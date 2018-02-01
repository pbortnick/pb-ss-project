<?php

use SilverStripe\View\Requirements;

class HomePageController extends PageController
{
  protected function init()
  {
      parent::init();
      Requirements::css('/themes/vanilla/owl.carousel/dist/assets/owl.carousel.min.css');
      Requirements::javascript('/themes/vanilla/jquery/dist/jquery.js');
      Requirements::javascript('/themes/vanilla/owl.carousel/dist/owl.carousel.min.js');


  }

}
