<?php
/**
 * This is example file how form can be created.
 * Error handler file is also included.
 */
include "error_handler.php";
include "Form.php";
include "FormElement.php";

$userName = new FormElement("text", "userName","", "User name", "", "User Name");
$password = new FormElement("password", "password", "", "Password", "required", "Password");
$phone = new FormElement("tel", "phone", "", "123 456 789", "","Phone number");
$textarea = new FormElement("textarea", "txt_area", "", "Type something here...","","Text here");
$someDoodle = new FormElement("doodle", "doodle", "DOODLE", "", "","Doodle");
$submit = new FormElement("submit", "submit", "Click me", "", "", "");

/** @var $form instance of Form class*/
$form = new Form();

/** Add created inputs - Form elements */
$form->add($userName);
$form->add($password);
$form->add($phone);

$form->add($textarea);
$form->add($someDoodle);

$form->add($submit);

/** print the form */
print "<h3> Dynamic Form </h3> \n";
$form->display();

unset($form, $userName, $password, $phone, $submit);

?>