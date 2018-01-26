<?php

use SilverStripe\CMS\Controllers\ContentController;

class HomePageController extends PageController
{
  public function onBeforeInit(){
		Requirements::javascript(THIRDPARTY_DIR.'/jquery/jquery.js');
		Requirements::javascript('vanilla/javascript/homepage-slider.js');

		if($this->owner->IncludeCSS){
			if($this->owner->SliderNavType == 'PrevNext'){
				Requirements::css('//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
			}
			Requirements::css('vanilla/css/homepage-slider.css');
		}


	}

}
