<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class HomePageSlides extends DataObject
{
    private static $db = [
      'Title' => 'Varchar(255)',
    ];

    private static $has_one = [
      'Image' => 'Image::class',
      'HomePage' => 'HomePage'
    ];

}
