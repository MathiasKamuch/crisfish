<section class="headervideo">
  <video preload="metadata" autoplay loop src="{!! the_field('video', 'options') !!}#t=0.5"></video>
  <div class="grey-video-overlay"></div>
</section>

<section class="kontakt-center-page">
  <div class="kontakt-flex-helper">
    <div class="kontakt-meet-content">
      {!! the_field('kontakt_tekst') !!}
    </div>

    <div class="kontakt-button-group">
      <div class="kontakt-green-button" data-filter=".salg">
        Salgsteam lageprodukter
      </div>
      <div class="kontakt-green-button" data-filter=".fersk">
        Salgsteam fersk fisk
      </div>
      <div class="kontakt-green-button" data-filter=".kval">
        Kvalitetsteam
      </div>
      <div class="kontakt-green-button" data-filter=".adm">
        Administration & bogholderi
      </div>
    </div>

<div class="mixcontainer">
  @foreach ($kontakt as $k)
   @if ($k['team'] == 'lage')
   <div class="person-container mix salg" data-order="1">
     <div class="person">
       @if($k['billede'])
      <img class="personimage" src="{!! $k['billede'] !!}" alt="">
      @endif
      <h2>{!! $k['navn'] !!}</h2>
      <p>{!! $k['titel'] !!}</p>
      @if($k['tlf'])
      <div>
        <a href="tel:+45">{!! $k['tlf'] !!}</a>
      </div>
      @endif
      @if($k['mobil'])
      <div>
        <a href="tel:+45">{!! $k['mobil'] !!}</a>
      </div>
      @endif
      @if($k['mail'])
      <div>
        <a href="mailto:">{!! $k['mail'] !!}</a>
      </div>
      @endif
     </div>
   </div>
   @endif
   @if ($k['team'] == 'fersk')
   <div class="person-container mix fersk" data-order="2"></div>
   @endif
   @if ($k['team'] == 'kval')
   <div class="person-container mix kval" data-order="3"></div>
   @endif
   @if ($k['team'] == 'adm')
   <div class="person-container mix adm" data-order="4"></div>
   @endif
  @endforeach
</div>




</div>
</section>

{{-- <div class="refbutton" data-filter="all">Alle</div>
<div class="refbutton" data-filter=".privat">Privat</div>
<div class="refbutton" data-filter=".erhverv">Erhverv</div>
<div class="refbutton" data-filter=".offentlig">Offentlig</div>

<section class="frontpage-grid-container mixcontainer">
  {{-- Boxcontainer --}}
  {{-- @foreach($referencerside as $r)
  @if($r['ref'] == 'privat')
  <a href="{!! $r['link'] !!}" class="box-container mix privat" data-order="1">
    <div class="redbox-container">
      <div class="refredbox-relative">
        <div class="refredbox-text">
          <h2 class="refredboxh2">{!! $r['title'] !!}</h2>
        </div>
      </div>
    </div>
    <img src="{!! $r['billede'] !!}" alt="">
  </a>
  @endif
  @if($r['ref'] == 'erhverv')
  <a href="{!! $r['link'] !!}" class="box-container mix erhverv" data-order="2">
    <div class="redbox-container">
      <div class="refredbox-relative">
        <div class="refredbox-text">
          <h2 class="refredboxh2">{!! $r['title'] !!}</h2>
        </div>
      </div>
    </div>
    <img src="{!! $r['billede'] !!}" alt="">
  </a>
  @endif
  @if($r['ref'] == 'offentlig')
  <a href="{!! $r['link'] !!}" class="box-container mix offentlig" data-order="3">
    <div class="redbox-container">
      <div class="refredbox-relative">
        <div class="refredbox-text">
          <h2 class="refredboxh2">{!! $r['title'] !!}</h2>
        </div>
      </div>
    </div>
    <img src="{!! $r['billede'] !!}" alt="">
  </a>
  @endif
@endforeach --}}
{{-- </section> --}}