# Dynamic_form
Dynamic form with abstract class and form &amp; form elements class. Easy to add for any project, makes basic form easy and faster to create.
Just copy and include (path) classes to any php file you want to use them.
Abstract class FormComponent defines add, remove, display, validate and showError abstract methods, 
so far only add and remove methods are implemented in the instances. 

Form class extends abstract class FormComponent. It keeps all form elements (input, textarea...) in the $elements array. 
Also it contains two attributes: action and form method. Oncreating instance, please use 2 arguments: "action" and "method"
ex. '$form = new Form("someFile.php", "post")'.
Please feel free to add more form attributes as needed.

FormElement class extends abstract FormComponent class. It contains needed attributes for creating form inputs.
On creating an instance of Form class, all the arguments are needed to be implemented. 
Arguments in the methods are not optional, but if some of the arguments are not needed, just leave "" on that position.
They are ($type, $name, $value = null, $placeholder=null, $required=null, $label=null);
Types that can be used in the $type argument are: "text","number", "password", "hidden", "email", "tel", "date", "time",
"color", "textarea", "radio", "checkbox", "file", "image", "submit", "button", "reset", "month", "week", "range", "search", "url".
ex. $usernameInput = new FormElement ("text", "username", "", "", "", "Username Label"); 
