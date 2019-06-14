<?php
/**
 * Created by PhpStorm.
 * User: Tomoko
 * Date: 6/10/2019
 * Time: 4:29 PM
 */

#	*****	ERROR	MANAGEMENT	*****	#

//	Create	the	error	handler:
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars){
    //global	$debug,	$contact_email;
    $debug = true;
    $contact_email = "your@email.com";

    //	Build	the	error	message:
    $message = "An error occurred in script '$e_file' on line $e_line: <b>$e_message</b><br>";

    //	Append	$e_vars	to	the	$message:
    $message .= print_r($e_vars, 1);

    if ($debug){	//	Show	the	error.
        echo '<div class="error" style="background-color: #faa; margin: 1em;">' . $message . '</div>';
        debug_print_backtrace();
    }else{
        //	Log	the	error:
        error_log ($message, 1, $contact_email);	//	Send email.

        //	Only print an error message if the error isn't a notice or strict.
        if(($e_number != E_NOTICE) && ($e_number < 2048)) {
            echo '<div class="error">A system error	occurred. We apologize for the 
            inconvenience.</div>';
        }
    }//	End	of	$debug	IF.

}//	End	of	my_error_handler()	definition.

//	Use	my	error	handler:
set_error_handler('my_error_handler');

#	*****	ERROR	MANAGEMENT	*****	#