<?php

namespace App\Controllers\Partials;

use WP_Query;

trait Lageprodukter
{
  public function lageprodukter()
  {
      $lageprodukter = get_posts([
          'post_type' => 'produktsortiment',
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
    }, $lageprodukter);
  }
}