// ========== APP STATE ==========
const state = {
  user: null,
  onboarding: { skinTone: null, browGoal: null, style: null }
};

function goBack(target) {
  window.location.href = target;
}

function showToast(msg, type = 'info') {
  const toast = document.getElementById('toast');
  if (!toast) return;
  toast.textContent = msg;
  toast.className = `toast ${type} show`;
  setTimeout(() => toast.classList.remove('show'), 3000);
}

function saveUser(name, email) {
  if (name) localStorage.setItem('archUserName', name);
  if (email) localStorage.setItem('archUserEmail', email);
}

function getSavedUser() {
  return {
    name: localStorage.getItem('archUserName') || 'Mary Johnson',
    email: localStorage.getItem('archUserEmail') || 'mary@gmail.com'
  };
}

function selectSkinTone(id) {
  state.onboarding.skinTone = id;
  localStorage.setItem('archSkinTone', id);
  document.querySelectorAll('.skin-tone-option').forEach(el => el.classList.toggle('selected', el.dataset.id === id));
  const label = document.getElementById('skin-tone-label');
  if (label) {
    const tone = { fair: 'Fair', light: 'Light', medium: 'Medium', 'medium-warm': 'Medium Warm', deep: 'Deep', rich: 'Rich' }[id] || 'Select your tone';
    label.textContent = tone;
  }
}

function selectBrowGoal(goal) {
  state.onboarding.browGoal = goal;
  localStorage.setItem('archBrowGoal', goal);
  document.querySelectorAll('.brow-goal-btn').forEach(btn => btn.classList.toggle('selected', btn.dataset.goal === goal));
}

function selectStyle(style) {
  state.onboarding.style = style;
  localStorage.setItem('archStyle', style);
  document.querySelectorAll('.style-option').forEach(card => card.classList.toggle('selected', card.dataset.style === style));
}

function setupPasswordToggles() {
  document.querySelectorAll('.toggle-pass').forEach(btn => {
    btn.addEventListener('click', () => {
      const input = btn.closest('.input-wrapper')?.querySelector('input');
      if (!input) return;
      const isPass = input.type === 'password';
      input.type = isPass ? 'text' : 'password';
      btn.innerHTML = isPass
        ? `<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>`
        : `<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>`;
    });
  });
}

function setupSkinTones() {
  const container = document.getElementById('skin-tone-options');
  if (!container) return;
  const tones = [
    { id: 'fair', label: 'Fair', color: '#f5deb3' },
    { id: 'light', label: 'Light', color: '#d4a574' },
    { id: 'medium', label: 'Medium', color: '#c07845' },
    { id: 'medium-warm', label: 'Medium Warm', color: '#a0622a' },
    { id: 'deep', label: 'Deep', color: '#6b3a1f' },
    { id: 'rich', label: 'Rich', color: '#3d1c0a' }
  ];
  container.innerHTML = tones.map(t => `
    <button type="button" class="skin-tone-option" data-id="${t.id}" onclick="selectSkinTone('${t.id}')">
      <div class="skin-tone-circle" style="background:${t.color}"></div>
      <span class="skin-tone-label">${t.label}</span>
    </button>
  `).join('');
  const saved = localStorage.getItem('archSkinTone');
  if (saved) selectSkinTone(saved);
  const savedGoal = localStorage.getItem('archBrowGoal');
  if (savedGoal) selectBrowGoal(savedGoal);
}

function setupStyleOptions() {
  const savedStyle = localStorage.getItem('archStyle');
  if (savedStyle) selectStyle(savedStyle);
}

function updateDashboard() {
  const user = getSavedUser();
  const dashName = document.getElementById('dash-name');
  const sidebarName = document.getElementById('sidebar-name');
  if (dashName) dashName.textContent = `${user.name.split(' ')[0]}.`;
  if (sidebarName) sidebarName.textContent = user.name.split(' ')[0];
}

function nextOnboardingStep() {
  const selectedTone = state.onboarding.skinTone || localStorage.getItem('archSkinTone');
  if (!selectedTone) { showToast('Please select your skin tone', 'error'); return; }
  window.location.href = 'onboarding-style.html';
}

function completeOnboarding() {
  const selectedStyle = state.onboarding.style || localStorage.getItem('archStyle');
  if (!selectedStyle) { showToast('Please select a style direction', 'error'); return; }
  window.location.href = 'onboarding-complete.html';
}

function enterArch() {
  window.location.href = 'dashboard.html';
}

function startSession(mode) {
  localStorage.setItem('archSessionMode', mode);
  window.location.href = `session-active.html?mode=${encodeURIComponent(mode)}`;
}

function handleSignup(e) {
  if (e) e.preventDefault();
  const name = document.getElementById('signup-name')?.value.trim();
  const email = document.getElementById('signup-email')?.value.trim();
  const pass = document.getElementById('signup-pass')?.value;
  const confirm = document.getElementById('signup-confirm')?.value;
  clearErrors('signup');
  let valid = true;
  if (!name) { showError('signup-name', 'Name is required'); valid = false; }
  if (!email || !email.includes('@')) { showError('signup-email', 'Please enter a valid email address'); valid = false; }
  if (!pass || pass.length < 6) { showError('signup-pass', 'Password must be at least 6 characters'); valid = false; }
  if (pass !== confirm) { showError('signup-confirm', 'Passwords do not match'); valid = false; }
  if (!valid) return;
  saveUser(name, email);
  window.location.href = 'privacy.html';
}

function handleLogin(e) {
  if (e) e.preventDefault();
  const email = document.getElementById('login-email')?.value.trim();
  const pass = document.getElementById('login-pass')?.value;
  clearErrors('login');
  let valid = true;
  if (!email) { showError('login-email', 'Email is required'); valid = false; }
  if (!pass) { showError('login-pass', 'Password is required'); valid = false; }
  if (!valid) return;
  saveUser('Mary Johnson', email);
  window.location.href = 'dashboard.html';
}

function handleForgotPassword(e) {
  if (e) e.preventDefault();
  const email = document.getElementById('forgot-email')?.value.trim();
  if (!email) { showError('forgot-email', 'Email is required'); return; }
  localStorage.setItem('archForgotEmail', email);
  window.location.href = 'check-inbox.html';
}

function acceptPrivacy() {
  window.location.href = 'onboarding-profile.html';
}

function showError(fieldId, msg) {
  const field = document.getElementById(fieldId);
  if (!field) return;
  field.classList.add('error');
  const errEl = field.closest('.form-group')?.querySelector('.form-error') || field.parentElement?.querySelector('.form-error');
  if (errEl) errEl.textContent = msg;
}

function clearErrors(prefix) {
  document.querySelectorAll(`#${prefix}-form .form-input`).forEach(f => f.classList.remove('error'));
  document.querySelectorAll(`#${prefix}-form .form-error`).forEach(f => f.textContent = '');
}

function updateCheckInbox() {
  const email = localStorage.getItem('archForgotEmail') || 'mary@gmail.com';
  const emailEl = document.getElementById('forgot-sent-email');
  if (emailEl) emailEl.textContent = email;
}

function updateCompleteSummary() {
  const skin = localStorage.getItem('archSkinTone') || '—';
  const goal = localStorage.getItem('archBrowGoal') || '—';
  const style = localStorage.getItem('archStyle') || '—';
  const skinEl = document.getElementById('complete-skin-tone');
  const goalEl = document.getElementById('complete-brow-goal');
  const styleEl = document.getElementById('complete-style');
  if (skinEl) skinEl.textContent = { fair:'Fair', light:'Light', medium:'Medium', 'medium-warm':'Medium Warm', deep:'Deep', rich:'Rich' }[skin] || skin;
  if (goalEl) goalEl.textContent = { shape:'Shape', colour:'Colour', both:'Both' }[goal] || goal;
  if (styleEl) styleEl.textContent = { refined:'Refined & Natural', precise:'Precise & Considered', discover:'Show Me What Suits Me' }[style] || style;
}

function updateProfileSummary() {
  const user = getSavedUser();
  const nameEl = document.getElementById('profile-name');
  const emailEl = document.getElementById('profile-email');
  const sidebarEl = document.getElementById('sidebar-name');
  const dashEl = document.getElementById('dash-name');
  if (nameEl) nameEl.textContent = user.name;
  if (emailEl) emailEl.textContent = user.email;
  if (sidebarEl) sidebarEl.textContent = user.name.split(' ')[0];
  if (dashEl) dashEl.textContent = `${user.name.split(' ')[0]}.`;
  const skinEl = document.getElementById('profile-skin-tone');
  const goalEl = document.getElementById('profile-brow-goal');
  const styleEl = document.getElementById('profile-style');
  const skin = localStorage.getItem('archSkinTone') || 'Medium Warm';
  const goal = localStorage.getItem('archBrowGoal') || 'Colour';
  const style = localStorage.getItem('archStyle') || 'Refined & Natural';
  if (skinEl) skinEl.textContent = { fair:'Fair', light:'Light', medium:'Medium', 'medium-warm':'Medium Warm', deep:'Deep', rich:'Rich' }[skin] || skin;
  if (goalEl) goalEl.textContent = { shape:'Shape', colour:'Colour', both:'Both' }[goal] || goal;
  if (styleEl) styleEl.textContent = { refined:'Refined & Natural', precise:'Precise & Considered', discover:'Show Me What Suits Me' }[style] || style;
}

function getQueryParam(name) {
  const params = new URLSearchParams(window.location.search);
  return params.get(name);
}

function setSessionModeFromQuery() {
  const mode = getQueryParam('mode') || localStorage.getItem('archSessionMode') || 'try';
  const map = { try:'Try a Brow Style', trace:'Draw Your Tracing Guide', recommend:'Get a Recommendation', photo:'Photograph Your Brows' };
  const title = document.getElementById('session-mode');
  if (title) title.textContent = map[mode] || 'Try a Brow Style';
}

window.addEventListener('DOMContentLoaded', () => {
  setupPasswordToggles();
  setupSkinTones();
  setupStyleOptions();
  updateCheckInbox();
  updateCompleteSummary();
  updateProfileSummary();
  updateDashboard();
  setSessionModeFromQuery();
});
