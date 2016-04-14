<?php


class Login extends Application {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('members');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'login'; // this is the view we want shown
        // build the list of authors, to pass on to our view

        $this->render();
    }

    function submit() {
        $key = $_POST['userid'];
        $user = $this->members->get_user($key);
        $password = $_POST['password'];
        if(password_verify($password, $user->password)){
            $this->session->set_userdata('userID', $user->name);
            $this->session->set_userdata('userName', $user->name);
            //$this->session->set_userdata('userRole', $user->role);
            //redirect('stockticker.local:4710/Welcome');  
        }else{
            redirect('/');
        }
        
    }
    
    function signup(){
        $name = $_POST['userid'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $this->members->insert_into_members($name, $password);
        //redirect("stockticker.local:4710/Login");
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}