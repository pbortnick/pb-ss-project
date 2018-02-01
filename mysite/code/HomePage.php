<?php
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;


class HomePage extends Page
{
  private static $has_many = [
    'HomePageSlides' => 'HomePageSlide'
  ];

  public function getCMSFields() {
    $f = parent::getCMSFields();
    $f->addFieldToTab('Root.Slides', GridField::create(
      'HomePageSlides',
      'HomePageSlides on this page',
      $this->HomePageSlides(),
      GridFieldConfig_RecordEditor::create()
    ));
    return $f;
  }

}
