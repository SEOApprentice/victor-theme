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
  const errorMsg = document.getElementById('formError');

  if (form && confirmMsg && errorMsg && window.victorContactData) {
    const submitBtn = form.querySelector('button[type="submit"]');
    const submitBtnDefaultText = submitBtn.textContent;

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      confirmMsg.style.display = 'none';
      errorMsg.style.display = 'none';
      errorMsg.textContent = '';

      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      const data = new URLSearchParams();
      data.append('action', 'victor_contact_submit');
      data.append('nonce', victorContactData.nonce);
      data.append('name', document.getElementById('name').value);
      data.append('email', document.getElementById('email').value);
      data.append('site', document.getElementById('site').value);
      data.append('interest', document.getElementById('interest').value);
      data.append('message', document.getElementById('message').value);
      data.append('website_url', document.getElementById('website_url').value);

      fetch(victorContactData.ajax_url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: data,
      })
        .then((response) => response.json())
        .then((response) => {
          if (response && response.success) {
            confirmMsg.style.display = 'block';
            form.reset();
          } else {
            const message = (response && response.data && response.data.message)
              || 'Something went wrong — please try again or email me directly at vmuhian@gmail.com.';
            errorMsg.textContent = message;
            errorMsg.style.display = 'block';
          }
        })
        .catch(() => {
          errorMsg.textContent = 'Something went wrong — please check your connection and try again, or email me directly at vmuhian@gmail.com.';
          errorMsg.style.display = 'block';
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.textContent = submitBtnDefaultText;
        });
    });
  }
});
