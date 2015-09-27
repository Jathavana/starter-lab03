<?php

/* 
 * The first controller, displays the first page when they 
 * go directly to it, or through zzz, and it also displays
 * pages access through a specified id.
 */

class first extends Application {
    
    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }    
    
    function zzz(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        $this->render();    
    }
    
    function gimme($id){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        $this->render();    
    }
    
}
