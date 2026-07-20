document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('menuToggle');
  const links = document.getElementById('navLinks');

  if (toggle && links) {
    toggle.addEventListener('click', () => {
      const isOpen = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
    });
    links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      links.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }));
  }

  const form = document.getElementById('contactForm');
  const confirmMsg = document.getElementById('confirm');
  if (form && confirmMsg) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      confirmMsg.style.display = 'block';
      form.querySelector('button[type="submit"]').textContent = 'Sent';
    });
  }
});
