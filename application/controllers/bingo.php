<?php

/* 
 * Bingo displays the last two pages, when they are accessed through 
 * some very forgiving phrases. 
 */


class bingo extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    //Display fifth page
    function index (){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        $this->data = array_merge($this->data, $source);
        $this->render();  
    }
    
    //Display last page
    function wisdom (){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);
        $this->render();  
    }
}
