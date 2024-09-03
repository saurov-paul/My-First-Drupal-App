<?php

namespace Drupal\hello_name\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloNameForms extends FormBase{
    public function getFormId(){
        return 'name_form';
}
public function buildForm(array $form, FormStateInterface $form_state){
    $form['name'] = [
        '#type'=> 'textfield',
        '#title'=> $this->t('Your name'),
        '#required'=> true,
    ];

$form['submit'] = [
    '#type'=>'submit',
    '#value'=>$this->t('Submit'),
];
return $form;
}

public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $name = $form_state->getValue('name');
    $form_state->setRedirect('hello_name.greeting', ['name' => $name]);
  }

}