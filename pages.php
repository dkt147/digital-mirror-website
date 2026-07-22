<?php
include 'config.php';

$slug = preg_replace('/[^a-z0-9_-]/i', '', $_GET['slug'] ?? '');
if (!$slug) {
  header('Location: about-us.php');
  exit;
}

function fetchApiPage(string $url): ?array {
  if (function_exists('curl_version')) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($response === false || $status < 200 || $status >= 300) {
      return null;
    }
    $data = json_decode($response, true);
    return is_array($data) ? $data : null;
  }

  if (ini_get('allow_url_fopen')) {
    $options = [
      'http' => [
        'method' => 'GET',
        'header' => "Accept: application/json\r\n",
        'timeout' => 10,
      ],
    ];
    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);
    if ($response === false) {
      return null;
    }
    $data = json_decode($response, true);
    return is_array($data) ? $data : null;
  }

  return null;
}

$apiPage = fetchApiPage(rtrim($API_URL, '/') . '/pages/' . rawurlencode($slug));
$title = $apiPage['title'] ?? str_replace('-', ' ', ucfirst($slug));
$subtitle = $apiPage['subtitle'] ?? '';
$content = '';
if (!empty($apiPage['content'])) {
  if (is_string($apiPage['content'])) {
    $content = $apiPage['content'];
  } elseif (is_array($apiPage['content'])) {
    foreach ($apiPage['content'] as $block) {
      if (is_string($block)) {
        $content .= '<p>' . htmlspecialchars($block, ENT_QUOTES, 'UTF-8') . '</p>';
      } elseif (is_array($block)) {
        if (!empty($block['title'])) {
          $content .= '<h2>' . htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
        }
        if (!empty($block['text'])) {
          $content .= '<p>' . htmlspecialchars($block['text'], ENT_QUOTES, 'UTF-8') . '</p>';
        }
      }
    }
  }
}
if (empty($content) && !empty($apiPage['body'])) {
  if (is_string($apiPage['body'])) {
    $content = $apiPage['body'];
  }
}
if (empty($content) && !empty($apiPage['sections']) && is_array($apiPage['sections'])) {
  foreach ($apiPage['sections'] as $section) {
    if (is_string($section)) {
      $content .= '<p>' . htmlspecialchars($section, ENT_QUOTES, 'UTF-8') . '</p>';
    } elseif (is_array($section)) {
      if (!empty($section['title'])) {
        $content .= '<h2>' . htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
      }
      if (!empty($section['text'])) {
        $content .= '<p>' . htmlspecialchars($section['text'], ENT_QUOTES, 'UTF-8') . '</p>';
      }
    }
  }
}
if (empty($content) && !empty($apiPage['description'])) {
  $content = '<p>' . htmlspecialchars($apiPage['description'], ENT_QUOTES, 'UTF-8') . '</p>';
}
if (empty($content) && !empty($apiPage['details']) && is_string($apiPage['details'])) {
  $content = '<p>' . htmlspecialchars($apiPage['details'], ENT_QUOTES, 'UTF-8') . '</p>';
}
if (empty($content)) {
  $content = '<p>We could not load the page content from the API right now. Please try again later.</p>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?> — Royals Arch Brow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            background: #0a0a08;
            color: #f5f0e8;
            font-family: 'Montserrat', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .navbar {
            background: rgba(10, 10, 8, 0.97);
        }

        .nav-gold-rule {
            height: 1px;
            background: linear-gradient(to right, transparent 0%, #c9a84c 30%, #c9a84c 70%, transparent 100%);
            opacity: 0.5;
        }

        .container {
            max-width: 1080px;
            margin: 0 auto;
            padding: 2rem 2.5rem 3rem;
        }

        .page-label {
            font-size: 0.7rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #c9a84c;
            margin-bottom: 0.5rem;
        }

        .page-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.8rem;
            font-style: italic;
            line-height: 1.05;
            margin-bottom: 1rem;
        }

        .page-subtitle {
            max-width: 740px;
            color: rgba(245, 240, 232, 0.65);
            margin-bottom: 2rem;
            font-size: 1rem;
            line-height: 1.8;
        }

        .page-content {
            color: rgba(245, 240, 232, 0.88);
            line-height: 1.8;
            font-size: 1rem;
        }

        .page-content h2 {
            margin: 1.5rem 0 0.75rem;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.4rem;
        }

        .page-content p {
            margin-bottom: 1rem;
        }

        .page-content a {
            color: #c9a84c;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="nav-gold-rule"></div>
    <main class="container">
        <div class="page-label"><?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?></div>
        <h1 class="page-title"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
        <?php if ($subtitle): ?><div class="page-subtitle">
            <?php echo htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8'); ?></div><?php endif; ?>
        <div class="page-content"><?php echo $content; ?></div>
        <?php if ($slug === 'privacy'): ?>
        <div class="privacy-consent" style="margin-top:1.25rem;">
            <label style="display:block;color:rgba(245,240,232,0.88);margin-top:0.5rem;"><input id="acceptPrivacy" type="checkbox" style="margin-right:0.6rem"> I accept the Privacy Policy</label>
            <label style="display:block;color:rgba(245,240,232,0.88);margin-top:0.5rem;"><input id="agreeTerms" type="checkbox" style="margin-right:0.6rem"> I agree to the Terms of Use</label>
            <label style="display:block;color:rgba(245,240,232,0.88);margin-top:0.5rem;"><input id="ageCheck" type="checkbox" style="margin-right:0.6rem"> I am 18 years of age or older</label>
            <button id="acceptBtn" class="accept-btn" disabled style="margin-top:0.8rem;padding:0.9rem 1.2rem;border-radius:999px;border:0;background:#c9a84c;color:#0a0a08;cursor:pointer">Accept & Continue</button>
            <div style="margin-top:0.5rem;color:rgba(245,240,232,0.65);font-size:0.9rem">You can read the full policy on <a href="https://cbygroyals.com/privacy" style="color:#c9a84c">cbygroyals.com/privacy</a></div>
        </div>
        <script>
        (function(){
          var a = document.getElementById('acceptPrivacy');
          var b = document.getElementById('agreeTerms');
          var c = document.getElementById('ageCheck');
          var btn = document.getElementById('acceptBtn');
          function upd(){ btn.disabled = !(a.checked && b.checked && c.checked); }
          [a,b,c].forEach(function(el){ el.addEventListener('change', upd); });
          btn.addEventListener('click', function(){ if(btn.disabled) return; try{ localStorage.setItem('archAcceptedPrivacy','1'); }catch(e){} window.location.href = 'privacy-confirmation.php'; });
        })();
        </script>
        <?php endif; ?>
    </main>
</body>

</html>