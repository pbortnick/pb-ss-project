<?php
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig;

class HomePage extends Page
{
  private static $has_many = [
    'HomePageSlides' => 'HomePageSlides'
  ];

  public function getCMSFields() {
    $f = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', GridField::create(
      'HomePageSlides',
      'HomePageSlides on this page',
      $this->HomePageSlides(),
      GridFieldConfig_RecordEditor::create()
    ));
    // $f->addFieldToTab('Root.Main', new GridField('pages', 'All pages', $this->HomePageSlides(), $config);
    $config = GridFieldConfig_RecordEditor::create();
    // $grid = GridField::create('ComparisonTopLevelImages', 'Images', $this->ComparisonTopLevelImages(), $config);
    return $f;
  }
}
