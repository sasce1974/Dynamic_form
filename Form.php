<?php
/**
 * Form class extends abstract class FormComponent.
 * It keeps all form elements (input, textarea...) in the
 * $elements array. Also it contains two attributes: action
 * and method. Please feel free to add more form attributes as needed.
 */

include "FormComponent.php";


class Form extends FormComponent
{

    private $elements = array();
    private $action;
    private $method;

    /**
     * Form constructor.
     * @param string $action
     * @param string $method
     * Create form instance with action and method attributes.
     */
    function __construct($action="", $method = "post")
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
    * Function add adds form elements from the Formelement class
    * to $elements array as individual objects...
    **/
    function add(FormElement $obj){
        $this->elements[] = $obj;
    }

    /** Function remove will remove added form element object. **/
    function remove(FormElement $obj)
    {
        $index = array_search($obj, $this->elements);
        if($index) unset($this->elements[$index]);
    }

    /**
     * Function display prints the form with the added elements.
     * using action and method attribute.
     **/
    function display()
    {
        //print "Action: " . $this->action . " Method: " . $this->method . "<br> \n";
        print "<form action='$this->action' method='$this->method' style='width: 50%'> \n";
        print "<fieldset> \n";
        foreach($this->elements as $element) {
            $element->display();
        }
        print "</fieldset></form> \n";
    }

    function validate()
    {
        // TODO: Implement validate() method.
    }

    function showError()
    {
        // TODO: Implement showError() method.
    }
}