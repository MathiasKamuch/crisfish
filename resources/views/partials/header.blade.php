<div class="center-header-text">
 <h2>CHRISFISH</h2>
</div>
<nav class="header-navigation">
  <div class="center-header">
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</nav>

<nav id="onscroll" class="header-on-scroll">
  <div class="relative-on-scroll">
  <img class="logo-on-scroll" src="{!! the_field('logo', 'options') !!}" alt="">
  <div class="center-nav-scroll">
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
  </div>
</nav>