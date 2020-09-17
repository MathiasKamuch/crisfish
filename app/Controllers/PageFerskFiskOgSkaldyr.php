<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageFerskFiskOgSkaldyr extends Controller
{
  protected $acf = true;
  use Partials\fersk;
}