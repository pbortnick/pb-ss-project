<?php

use SilverStripe\ORM\DataObject;

class HomePageSlides extends DataObject
{
    private static $db = [
      'Title' => 'Varchar(255)',
    ];

    private static $has_one = [
      'Image' => 'Image'
    ];
}
