<?php
/**
 * Creating Abstract Class FormComponent
 * that will define Form class and FormElement class.
 * So far, only function "add" is implemented, the rest of
 * declared functions are ongoing work in progress
 */

abstract class FormComponent
{
    abstract function add (FormElement $obj);
    abstract function remove (FormElement $obj);
    abstract function display ();
    abstract function validate ();
    abstract function showError ();
}