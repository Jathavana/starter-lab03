<?php

/* 
 * This file holds the hook, the bolds any <p> tag with a class 
 * attribute lead.
 */


function bold(){
    
    $CI =& get_instance();
    $buffer = $CI->output->get_output(); //grab the output meant for codigniter output class. 
    $search = '/<p class="lead">(.*?)<\/p>/'; //The p class tag we search for

    /** Call back, that matches the above search, and then replaces any
     * capitalised words with a bolded version.
     */
    $buffer = preg_replace_callback($search, 
                    function($matches){ 
                        $search = '/[A-Z][\w]*/';
                        
                        $output = preg_replace($search, '<strong>$0</strong>', $matches[0]);
                        
                        return $output;
                    }
            , $buffer
    );
            
    // Set the output, to the manipulated buffer, and display it.     
    $CI->output->set_output($buffer);
    $CI->output->_display();
}
    
