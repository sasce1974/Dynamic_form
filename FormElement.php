<?php
/**
 * FormElement class extends abstract FormComponent class
 * It contains needed attributes for creating form inputs.
 * On creating an instance of Form class, all the arguments are needed.
 * If some of the arguments are not needed, just leave "" on that position.
 */


class FormElement extends FormComponent
{
    private $type;
    private $name;
    private $value;
    private $placeholder;
    private $required;
    private $label;

    /**
     * FormElement constructor.
     * @param $type
     * @param $name
     * @param null $value
     * @param null $placeholder
     * @param null $required
     * @param null $label
     * @arrayType contains all possible input files + textarea. If other type is
     * given, the default 'text' type will be declared.
     */
    function __construct($type, $name, $value = null, $placeholder=null,
                         $required=null, $label=null)
    {
        $this->type = $type;
        $arrayType = [
            "text","number", "password", "hidden", "email", "tel", "date", "time",
            "color", "textarea", "radio", "checkbox", "file", "image", "submit",
            "button", "reset", "month", "week", "range", "search", "url"
        ];
        if(!in_array($this->type, $arrayType)) $this->type = "text";

        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->label = $label;
    }

    function add(FormElement $obj)
    {
        return false;
    }

    function remove(FormElement $obj)
    {
        return false;
    }

    /**
     * display function prints the input element. If the label is given
     * it will print label before the associated input.
     * If the textarea is given as a type, it will print it as such.
     */
    function display()
    {
        if ($this->label != "") print "<label style='display: inline-block;width: 8em; margin:5px; margin-right: 1em'>$this->label</label> \n";
        if($this->type == "textarea") {
            print "<textarea name='$this->name' placeholder='$this->placeholder'>$this->value</textarea><br> \n";
        }else{
            print "<input type='$this->type' name='$this->name' value='$this->value' 
                    placeholder='$this->placeholder' $this->required><br> \n";
        }
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