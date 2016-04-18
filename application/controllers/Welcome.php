<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('stock_model');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {



        $this->data['player_array'] = $this->stock_model->get_players();

        $this->data['pagebody'] = 'homepage'; // this is the view we want shown

        $this->data['equity_array'] = $this->stock_model->get_equity();
        $xml = simplexml_load_file("http://bsx.jlparry.com/status");
        $state = $xml->state;
        if ($state == 2 || $state == 3) {


            //UNCOMMENT BELOW IF HIS SERVER IS WORKING
            
              $this->stock_model->reset_transactions();
              $this->stock_model->read_transactions();
              $this->stock_model->reset_stocks();
              $this->stock_model->read_stocks();
              $this->stock_model->reset_moves();
              $this->stock_model->read_moves();
              
             
        }
        $this->data['role'] = $this->session->userdata('role');
        $this->data['recent_transactions'] = $this->stock_model->get_transactions();
        $this->data['stock_array'] = $this->stock_model->get_stocks();
        $this->data['recent_moves_array'] = $this->stock_model->recent_moves();

        $this->render();
    }

}

/* End of file Welcome.php */
