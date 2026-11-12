</main>

<?php $home_prefix = is_front_page() ? '' : home_url( '/' ); ?>

<footer>
  <div class="wrap footer-inner">
    <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Victor Muhia Ng'ang'a. Built &amp; optimized in Nairobi.</p>
    <div class="footer-links">
      <a href="<?php echo esc_url( $home_prefix . '#services' ); ?>">Services</a>
      <a href="<?php echo esc_url( $home_prefix . '#work' ); ?>">Work</a>
      <a href="<?php echo esc_url( $home_prefix . '#about' ); ?>">About</a>
      <a href="<?php echo esc_url( $home_prefix . '#contact' ); ?>">Contact</a>
    </div>
  </div>
</footer>

<a href="https://wa.me/254705991249?text=<?php echo rawurlencode( "Hi Victor, I'm interested in your SEO & WordPress development services." ); ?>"
   class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.48 2 2 6.48 2 12c0 1.85.5 3.58 1.38 5.07L2 22l5.07-1.36A9.94 9.94 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2Zm0 18c-1.6 0-3.1-.44-4.38-1.2l-.31-.18-3.1.83.83-3.02-.2-.32A7.94 7.94 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8Zm4.3-5.9c-.24-.12-1.4-.69-1.62-.77-.22-.08-.38-.12-.54.12-.16.24-.62.77-.76.93-.14.16-.28.18-.52.06-.24-.12-1-.37-1.9-1.17-.7-.62-1.18-1.39-1.32-1.63-.14-.24-.02-.37.1-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.47-.4-.4-.54-.41h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.7 2.6 4.12 3.64.58.25 1.03.4 1.38.51.58.18 1.11.16 1.53.1.47-.07 1.4-.57 1.6-1.12.2-.55.2-1.02.14-1.12-.06-.1-.22-.16-.46-.28Z" fill="#fff"/>
  </svg>
</a>

<?php wp_footer(); // required — lets WP and plugins inject scripts at the very end ?>
</body>
</html>
