<?php

namespace App\Controllers\Partials;

use WP_Query;

trait Kontaktpersoner
{
  public function kontakt()
  {
      $kontakt = get_posts([
          'post_type' => 'kontaktpersoner',
          'numberposts' => -1,
          'order' => 'DSC',
      ]);

      return array_map(function ($post) {
        return [
          'navn' => apply_filters('get_the_title', $post->post_title, false),
          'billede' => get_field('billede', $post->ID),
          'titel' => get_field('titel', $post->ID),
          'tlf' => get_field('telefonnummer', $post->ID),
          'mobil' => get_field('mobilnummer', $post->ID),
          'mail' => get_field('mail', $post->ID),
          'team' => get_field('team', $post->ID),
        ];
    }, $kontakt);
  }
}