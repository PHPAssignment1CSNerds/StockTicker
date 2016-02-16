<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StockHistory extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'stockhistory';	// this is the view we want shown
		
		
		$this->render();
	}
        
        function stock($id){
            $this->data['pagebody'] = 'stock';	// this is the view we want shown
		
            $this->data['type'] = $id;
		
            $this->render();
        }
        
       

}