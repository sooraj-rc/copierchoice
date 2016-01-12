<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    var $username = "";
    var $password = "";
    var $title = '';
    var $gen_contents = array();
    var $mcontents;
    var $merror;
    var $msuccess;

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        ini_set("display_errors", "0");
        error_reporting(0);
    }

    public function index() {

        $this->template->set_template('adminlogin');
        $this->load->model('admin/admin_model');
        if (s('ADMIN_USERID')) {
            redirect('admin/dashboard');
        } else {
            //echo "here inside"; die();
            $this->gen_contents['user_id'] = $this->authentication->admin_logged_in();

            if (!empty($_POST)) {

                $this->load->library('form_validation');
                $this->_init_adminlogin_validation_rules();
                //server side validation of input values
                if ($this->form_validation->run() == TRUE) {// form validation
                    $this->_init_adminlogin_details();
                    $login_details['username'] = $this->username;
                    $login_details['password'] = $this->password;
                    $msg = $this->authentication->process_admin_login($login_details);
                    //echo $msg; die();
                    if ($msg == 'success') {
                        // Remember Password set here --- start here - added by syama
                        //$this->admin_model->setRememberPassword();
                        // Remember Password set here --- end here
                        redirect("admin/dashboard");
                    } else if ($msg == 'inactive') {
                        sf('error_message', 'Your account has been inactivate');
                        redirect("admin");
                    } else {
                        sf('error_message', 'Invalid username or password');
                        redirect("admin");
                    }
                } else {
                    $this->merror = validation_errors();
                }
            }
            // Remember Password set here --- start here
            //$user_data = $this->admin_model->getRememberPassword();
            $this->session->set_userdata('c_username', @$user_data[1]);
            $this->session->set_userdata('c_password', @$user_data[0]);
            $this->session->set_userdata('c_remember', @$user_data[2]);
            // Remember Password set here --- end here

            $this->template->render();
        }
    }

    /**
     * validating the form elemnets
     */
    function _init_adminlogin_validation_rules() {
        $this->form_validation->set_rules('admin_username', 'username', 'required|max_length[50]');
        $this->form_validation->set_rules('admin_password', 'password', 'required|max_length[20]');
    }

    /**
     * Initialising the data     
     */
    function _init_adminlogin_details() {
        $this->username = $this->input->post("admin_username", true);
        $this->password = $this->input->post("admin_password", true);
    }

    /**
     * Admin logout function
     */
    function logout() {
        $this->authentication->admin_logout();
        redirect('admin');
    }

}
