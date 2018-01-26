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
    $fields->addFieldToTab('Root.Attachments', UploadField::create('Image'));
    $f->addFieldToTab('Root.Main',
    new GridField('Pages', 'All pages', SiteTree::get()));
    $config = GridFieldConfig_RecordEditor::create();
    /**
    * $config = GridFieldConfig_RecordEditor::create();
    * $grid = GridField::create('ComparisonTopLevelImages', 'Images', $this->ComparisonTopLevelImages(), $config);
    */
    return $f;
  }
}
