<section class="full-size-image">
  <div class="fpage-content">
    <div class="logo-fpage">
      <img src="{!! the_field('logo', 'option') !!}" alt="">
    </div>
    <div class="fpage-excerpt">
      {!! the_field('hero_tekst') !!}
    </div>
  </div>
  <div class="content-container">
    <img src="{!! the_field('stort_billede') !!}" alt="">
  </div>
  <div class="dark-overlay"></div>

  <div class="scroll-arrow-container">
    <span>Scroll ned</span>
    <div class="downarrow">
      <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</section>

<section class="fpage-top-grid">
<div class="top-grid-text-container" data-aos="fade-right" data-aos-easing="ease-in-sine">
  <h1 class="top-grid-headline">{!! the_field('venstre_tekst_overskrift') !!}</h1>
  <div class="top-grid-background-text">
    <div class="top-grid-text">
      {!! the_field('venstre_tekst') !!}
    </div>
  </div>
</div>
<div class="top-grid-image-container" data-aos="fade-left" data-aos-delay="300" data-aos-easing="ease-in-sine">
  <img class="top-grid-image" src="{!! the_field('hojre_billede') !!}" alt="">
</div>
</section>

<section class="section-two-grid">
  <div class="section-two-image-container" data-aos="fade-up" data-aos-easing="ease-in-sine">
    <img class="section-two-image" src="{!! the_field('sektion_to_billede') !!}" alt="">
  </div>

  <div class="section-two-text-grid" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
    <div class="section-two-text-icon">
      <img src="{!! the_field('jomfruhummer_ikon') !!}" alt="">
    </div>
    <div class="section-two-text-container">
      {!! the_field('sektion_to_tekst') !!}
      <div class="green-button">
        <span class="button-text">Se produkterne</span>
        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
      </div>
    </div>
    
  </div>
</section>

<section class="section-three-grid">
  <div class="left-col-image" data-aos="fade-up" data-aos-easing="ease-in-sine">
    <img class="image-cover" src="{!! the_field('sektion_tre_venstre_billede') !!}" alt="">
  </div>
  <div class="section-two-text-grid" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="300">
    <div class="section-two-text-icon">
      <img src="{!! the_field('lageprodukter_ikon') !!}" alt="">
    </div>
    <div class="section-two-text-container">
      {!! the_field('sektion_tre_tekst') !!}
      <div class="green-button">
        <span class="button-text">Se produkterne</span>
        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
      </div>
    </div>
  </div>
  <div class="right-col-image" data-aos="fade-up" data-aos-delay="600" data-aos-easing="ease-in-sine">
    <img class="image-cover" src="{!! the_field('sektion_tre_hojre_billede') !!}" alt="">
  </div>
</section>

<section class="break-section" data-aos="fade-up" data-aos-easing="ease-in-sine">
  <div class="break-section-text-container">
    <div class="text-container">
      <h2 class="fisk-header">{!! the_field('fisk_og_udvikling_overskrift') !!}</h2>
      <div class="white-line"></div>
      {!! the_field('fisk_og_udvikling_tekst') !!}
      <div class="white-button">
        <span class="button-text">Se mere om hvem vi er</span>
        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
      </div>
    </div>
  </div>
<div class="break-section-overlay"></div>
<video preload="metadata" class="fisk-image" autoplay loop src="{!! the_field('fisk_og_udvikling_video') !!}#t=0.5"></video>

</section>
<section class="section-two-grid" style="margin-top: 0px;">
  <div class="section-two-image-container" data-aos="fade-up" data-aos-easing="ease-in-sine">
    <img class="section-two-image" src="{!! the_field('sektion_fire_billede') !!}" alt="">
  </div>

  <div class="section-two-text-grid" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
    <div class="section-two-text-icon">
      <img src="{!! the_field('sektion_fire_ikon') !!}" alt="">
    </div>
    <div class="section-two-text-container">
      {!! the_field('sektion_fire_tekst') !!}
      <div class="green-button">
        <span class="button-text">Se produkterne</span>
        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
      </div>
    </div>
    
  </div>
</section>

<section class="break-section-two" data-aos="fade-up" data-aos-easing="ease-in-sine">
  <div class="center-white-box">
    <div class="white-box-container" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
      <div>
        <h2 class="safety-header">{!! the_field('fodevaresikkerhed_overskrift') !!}</h2>
      </div>
      <div class="black-line"></div>
      <div class="safety-text">
        {!! the_field('fodevaresikkerhed_tekst') !!}
      </div>
      <div class="black-button">
        <span class="black-button-text">Læs mere</span>
        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
      </div>
      <div class="grid-image-container">
        <img src="{!! get_field('fodevaresikkerhed_certifikater')['0']['sizes']['large'] !!}" alt="">
        <img src="{!! get_field('fodevaresikkerhed_certifikater')['1']['sizes']['large'] !!}" alt="">
        <img src="{!! get_field('fodevaresikkerhed_certifikater')['2']['sizes']['large'] !!}" alt="">
        <img src="{!! get_field('fodevaresikkerhed_certifikater')['3']['sizes']['large'] !!}" alt="">
      </div>

      
      
    </div>
  </div>
<div class="break-section-overlay"></div>
  <img class="fisk-image" src="{!! the_field('fodevaresikkerhed_billede') !!}" alt="">
</section>
