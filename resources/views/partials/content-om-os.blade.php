<section class="headervideo">
  <video preload="metadata" autoplay loop src="{!! the_field('video', 'options') !!}#t=0.5"></video>
  <div class="grey-video-overlay"></div>
</section>
<section class="break-section" data-aos="fade-up" data-aos-easing="ease-in-sine">
  <div class="break-section-text-container">
    <div class="text-container">
      <h1 class="fisk-header">{!! the_field('hero_overskrift') !!}</h1>
      <div class="white-line"></div>
      {!! the_field('hero_tekst') !!}
    </div>
  </div>
<div class="break-section-overlay"></div>
<img src="{!! the_field('hero_billede') !!}" alt="">
</section>

<section class="center-subpage-mosaic">
  <div class="bottom-text-grid">
    <div class="text-column-bottom" data-aos="fade-up" data-aos-easing="ease-in-sine">
      {!! the_field('venstre_tekst') !!}
    </div>
    <div class="text-column-bottom" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
      {!! the_field('hojre_tekst') !!}
    </div>
  </div>
</section>

<section class="fpage-top-grid">
  <div class="top-grid-text-container" data-aos="fade-right" data-aos-easing="ease-in-sine">
    <div class="top-grid-background-text">
      <div class="top-grid-text">
        {!! the_field('tekst_til_billede') !!}
      </div>
    </div>
  </div>
  <div class="top-grid-image-container" data-aos="fade-left" data-aos-delay="300" data-aos-easing="ease-in-sine">
    <img class="top-grid-image" src="{!! the_field('stort_billede') !!}" alt="">
  </div>
  </section>