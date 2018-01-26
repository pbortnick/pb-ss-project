<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;

class PageController extends ContentController
{

  private static $allowed_actions = [
    'HelloForm'
  ];

  public function HelloForm()
  {
      $fields = new FieldList(
          TextField::create('Name', 'Your Name')
      );

      $actions = new FieldList(
          FormAction::create('doSayHello')->setTitle('Say hello')
      );

      $required = new RequiredFields('Name');

      $form = new Form($this, 'HelloForm', $fields, $actions, $required);

      return $form;
  }

  public function doSayHello($data, Form $form)
  {
      $form->sessionMessage('Hello ' . $data['Name'], 'success');

      return $this->redirectBack();
  }
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * [
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * ];
     * </code>
     *
     * @var array
     */

    protected function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/


    }

}
