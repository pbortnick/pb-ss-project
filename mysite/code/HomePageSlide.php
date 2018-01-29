<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class HomePageSlide extends DataObject
{
    private static $db = [
      'Title' => 'Varchar(255)',
    ];

    private static $has_one = [
      'Image' => Image::class,
      'HomePage' => 'HomePage'
    ];

    public function getCMSFields() {
      $f = parent::getCMSFields();
      if ($this->exists()) {
        $slide = UploadField::create('Image');
        $slide->setAllowedFileCategories('image');
        $slide->setFolderName('Home Page Slides');
        $f->addFieldToTab('Root.Main', $slide);
      endif;

      $title = TextField::create('Title');
      $f->addFieldToTab('Root.Main', $title);

      return $f;
    }

}
