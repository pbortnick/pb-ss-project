<?php

use SilverStripe\ORM\DataObject;

class HomePageSlide extends DataObject
{
    private static $db = [
        'Title' => 'Varchar(255)',
        private static $has_one = array(
          'image' => 'Image'
        );
    ];
}
