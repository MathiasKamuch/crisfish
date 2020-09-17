<section class="headervideo">
  <video autoplay loop src="{!! the_field('video', 'options') !!}"></video>
  <div class="grey-video-overlay"></div>
</section>
<section class="subpage-header">
  <div class="green-subpage-box">
    <div class="green-subpage-box-text">
      {!! the_field('hero_tekst') !!}
    </div>
  </div>

  <img class="subpage-image" src="{!!  the_field('hero_billede') !!}" alt="">
</section>

<h2 class="subpage-h2">Produktsortiment</h2>

<section class="center-subpage-mosaic">
  <div class="mosaic-width">
    @foreach ($lageprodukter as $l)
    <a href="{!! $l['link'] !!}" class="test-mosaic" data-aos="fade-up" data-aos-easing="ease-in-sine">
      <div class="mosaic-text">{!! $l['title'] !!}</div>
      {!! $l['img'] !!}
    </a>
    @endforeach
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