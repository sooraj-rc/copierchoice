<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     */
    var $gen_contents = array();

    public function index() {
        $this->load->view('home');
    }

    public function mf() {
        
        $this->template->write_view('content', 'multi-form', $this->gen_contents);
        $this->template->render();
    }

}
