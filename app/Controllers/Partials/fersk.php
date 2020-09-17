<?php

namespace App\Controllers\Partials;

use WP_Query;

trait Fersk
{
  public function fersk()
  {
      $fersk = get_posts([
          'post_type' => 'fersk',
          'numberposts' => -1,
          'order' => 'DSC',
      ]);

      return array_map(function ($post) {
        return [
          'title' => apply_filters('get_the_title', $post->post_title, false),
          'content' => apply_filters('get_the_content', $post->post_content, false),
          'link' => apply_filters('permalink', get_permalink($post)),
          'img' => get_the_post_thumbnail($post->ID, 'imgzoom'),
        ];
    }, $fersk);
  }
}