<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Compare Looks — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #050505;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.62);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --border: rgba(255,255,255,0.12);
      --card-bg: rgba(255,255,255,0.03);
      --radius: 28px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { min-height: 100%; }
    body {
      background: radial-gradient(circle at top, rgba(201,168,76,0.08), transparent 20%), var(--black);
      color: var(--white);
      font-family: var(--font-body);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .page {
      width: 100%;
      max-width: 1100px;
      border-radius: 34px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 90px rgba(0,0,0,0.65);
      overflow: hidden;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 22px 22px 12px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.02);
    }

    .back-btn,
    .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .back-btn:hover { transform: scale(1.05); background: rgba(201,168,76,0.12); }

    .heading {
      flex: 1;
      font-family: var(--font-display);
      font-size: 1.6rem;
      line-height: 1.1;
      color: var(--white);
      text-align: center;
      letter-spacing: 0.01em;
    }

    .content {
      padding: 0 22px 26px;
    }

    .subheading {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
      margin: 24px 0 18px;
      text-align: left;
    }

    .option-list {
      display: grid;
      gap: 14px;
      margin-bottom: 22px;
    }

    .option {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 16px;
      padding: 20px 18px;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.08);
      background: var(--card-bg);
      transition: border-color var(--transition), background var(--transition), box-shadow var(--transition);
      cursor: pointer;
    }

    .option.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.12);
      box-shadow: 0 18px 30px rgba(201,168,76,0.16);
    }

    .option-label {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .option-title {
      font-family: var(--font-display);
      font-size: 1.35rem;
      line-height: 1.05;
      color: var(--white);
    }

    .option-copy {
      color: var(--white-dim);
      font-size: 0.94rem;
      line-height: 1.6;
    }

    .radio {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.3);
      position: relative;
      align-self: center;
      flex-shrink: 0;
    }

    .radio::after {
      content: '';
      position: absolute;
      inset: 5px;
      border-radius: 50%;
      background: var(--gold);
      opacity: 0;
      transition: opacity var(--transition);
    }

    .option.selected .radio::after { opacity: 1; }

    .status {
      color: var(--gold);
      font-size: 0.85rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .btn {
      display: inline-flex;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: rgba(255,255,255,0.08);
      color: var(--white);
      font-size: 0.85rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      font-weight: 700;
      justify-content: center;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition), opacity var(--transition);
    }

    .btn:hover:not(.disabled) { background: rgba(255,255,255,0.15); transform: translateY(-1px); }
    .btn.disabled { opacity: 0.65; cursor: not-allowed; }

    @media (max-width: 520px) {
      .page { max-width: 100%; }
      .header { padding: 18px 18px 10px; }
      .heading { font-size: 1.35rem; }
      .content { padding: 0 18px 22px; }
      .option { padding: 18px 16px; }
      .option-title { font-size: 1.2rem; }
    }
  </style>
</head>
<body>
  <article class="page">
    <header class="header">
      <a class="back-btn" href="preview-look.php" aria-label="Back">&#8592;</a>
      <div class="heading">Two looks worth comparing.</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </header>

    <div class="content">
      <p class="subheading">Select the two you’d like side by side.</p>

      <div class="option-list">
        <section class="option" data-name="Considered">
          <div class="option-label">
            <div class="option-title">Considered</div>
            <div class="option-copy">A refined everyday shape with quiet polish.</div>
          </div>
          <div class="radio"></div>
        </section>

        <section class="option selected" data-name="Arch">
          <div class="option-label">
            <div class="option-title">Arch</div>
            <div class="option-copy">A lifted structure with bright, crisp definition.</div>
          </div>
          <div class="radio"></div>
        </section>

        <section class="option" data-name="Understated">
          <div class="option-label">
            <div class="option-title">Understated</div>
            <div class="option-copy">Soft, subtle shape with natural ease.</div>
          </div>
          <div class="radio"></div>
        </section>
      </div>

      <div class="status">1 of 2 chosen</div>
      <a class="btn disabled" href="#">Select one more to compare</a>
    </div>
  </article>

  <script>
    const options = document.querySelectorAll('.option');
    const status = document.querySelector('.status');
    const actionButton = document.querySelector('.btn');
    const maxSelected = 2;

    function updateState() {
      const selected = document.querySelectorAll('.option.selected');
      const count = selected.length;
      status.textContent = `${count} of ${maxSelected} chosen`;

      if (count < maxSelected) {
        actionButton.classList.add('disabled');
        actionButton.setAttribute('aria-disabled', 'true');
        actionButton.textContent = `Select ${maxSelected - count} more to compare`;
        actionButton.href = '#';
      } else {
        actionButton.classList.remove('disabled');
        actionButton.removeAttribute('aria-disabled');
        actionButton.textContent = 'Compare these looks';
        actionButton.href = 'your-look.php';
      }
    }

    options.forEach(option => {
      option.addEventListener('click', () => {
        if (option.classList.contains('selected')) {
          option.classList.remove('selected');
        } else if (document.querySelectorAll('.option.selected').length < maxSelected) {
          option.classList.add('selected');
        }
        updateState();
      });
    });

    actionButton.addEventListener('click', (event) => {
      if (actionButton.classList.contains('disabled')) {
        event.preventDefault();
      }
    });

    updateState();
  </script>
</body>
</html>
