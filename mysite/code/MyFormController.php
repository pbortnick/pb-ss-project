<?php

use SilverStripe\CMS\Controllers\ContentController;

class MyFormController extends PageController
{
  public function MyForm()
  {
      $myForm = Form::create(
          $controller,
          'ContactForm',
          FieldList::create(
              TextField::create('YourName','Your name'),
              TextareaField::create('YourComments','Your comments')
          ),
          FieldList::create(
              FormAction::create('sendMyForm','Submit')
          ),
          RequiredFields::create('YourName','YourComments')
      );

      return $myForm;
  }

  public function sendMyForm($data, $form)
  {
      $name = $data['YourName'];
      $message = $data['YourMessage'];
      if(strlen($message) < 10) {
          $form->addErrorMessage('YourMessage','Your message is too short','bad');
          return $this->redirectBack();
      }

      return $this->redirect('/');
  }

}
