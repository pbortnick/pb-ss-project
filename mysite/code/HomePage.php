<?php

use Page;

class HomePage extends Page
{
  private static $has_many = [
    'HomePageSlides' => 'HomePageSlides'
  ];

  public function getCMSFields() {
    $f = parent::getCMSFields();
    $config = GridFieldConfig_RelationEditor::create();
    $grid = GridField::create('ComparisonTopLevelImages', 'Images', $this->ComparisonTopLevelImages(), $config);
    $f->addFieldToTab('Root.Main', $grid);
    return $f;
  }
}
