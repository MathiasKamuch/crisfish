<section class="headervideo">
  <video preload="metadata" autoplay loop src="{!! the_field('video', 'options') !!}#t=0.5"></video>
  <div class="grey-video-overlay"></div>
</section>
<section class="fpage-top-grid">
  <div class="top-grid-text-container" data-aos="fade-right" data-aos-easing="ease-in-sine">
    <div class="top-grid-background-text">
      <div class="top-grid-text">
        <h1>{!! the_title() !!}</h1>
        {!! the_content() !!}
      </div>
    </div>
  </div>
  <div class="top-grid-image-container" data-aos="fade-left" data-aos-delay="300" data-aos-easing="ease-in-sine">
    {!! the_post_thumbnail('large', array('class' => 'top-grid-image')) !!}
  </div>
  </section>