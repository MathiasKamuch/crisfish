<footer class="footer-container">
  <div class="grey-footer-overlay"></div>
  <div class="footer-grid">
    <div class="footer-col">
      <img class="footer-logo" src="{!! the_field('footer_logo', 'options') !!}" alt="">
      <div class="footer-adress">
        <i class="fas fa-map-marked-alt"></i>
        <span class="footer-text">{!! the_field('footer_adresse', 'options') !!}</span>
      </div>
      <div class="footer-mobile">
        <i class="fas fa-mobile-alt"></i>
        <span class="footer-text">{!! the_field('footer_telefonnummer', 'options') !!}</span>
      </div>
      <div class="footer-mail">
        <i class="far fa-envelope"></i>
        <span class="footer-text">{!! the_field('footer_mail', 'options') !!}</span>
      </div>
    </div>
    <div class="footer-col">
      <h3 class="linkstext">Links</h3>
      <a class="footer-link" href="#">Privatlivspolitik</a>
      <a class="footer-link" href="#">CSR</a>
      <a class="footer-link" href="#">Virksomhedsstruktur</a>
    </div>
    <div class="footer-col">
      <a class="footer-image-link" href="">
        <img class="footer-image" src="{!! the_field('kontrolrapport', 'options') !!}" alt="">
      </a>

    </div>
  </div>
  <img class="footer-background" src="{!! the_field('footer_baggrund', 'options') !!}" alt="">
</footer>