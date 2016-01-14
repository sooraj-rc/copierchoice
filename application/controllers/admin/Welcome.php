<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    var $gen_contents = array();
    
    // index function - check login and navigate to dashboard
    public function index() {
        //$this->load->model('admin/admin_model');
        (!$this->authentication->check_logged_in("admin", false)) ? redirect('admin') : '';
        $this->gen_contents['page_heading'] = 'Dashboard';
        $this->template->set_template('admin');
        $this->template->write_view('content', 'admin/dashboard', $this->gen_contents);
        $this->template->render();
    }
    
    //manage product category 
    public function categories($mode="list",$catid=""){
        $this->load->model('admin/admin_model');
        // Category add area
        if($mode == "add"){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('catname', 'Category Name', 'required');
            if($this->form_validation->run() == TRUE){
                $catdata = array(
                    "catname" => $this->input->post("catname",true)
                );
                $response = $this->admin_model->process_category("add",$catdata);
                if($response == "added"){
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This category name already exists');
                }
            }
            redirect("admin/categories");
        }
        // Category edit area
        if($mode == "edit"){
            $catdata = array(
                "catid"     => $catid,
                "catname"   => $this->admin_model->get_catname($catid)
            );
            //print_r($catdata); die();
            $this->gen_contents['catdata'] = $catdata;
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('catname', 'Category Name', 'required');
            if($this->form_validation->run() == TRUE){
                $catdata = array(
                    "catname"   => $this->input->post("catname",true),
                    "catid"     => $this->input->post("catid",true),
                );
                $response = $this->admin_model->process_category("edit",$catdata);
                if($response == "edited"){
                    
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This category name already exists');
                }
                redirect("admin/categories");
            }
            
        }
        // Category delete area
        if($mode == "delete" && !empty($catid)){
            $catdata = array(
                'catid'=> $catid
            );
            $response = $this->admin_model->process_category("delete",$catdata);
            redirect("admin/categories");
        }
        
        $this->gen_contents['categories'] = $this->admin_model->get_categories();
        $this->gen_contents['page_heading'] = 'Product Categories';
        $this->template->set_template('admin');
        $this->template->write_view('content', 'admin/categories', $this->gen_contents);
        $this->template->render();
    }
    
    //manage product category 
    public function packages($mode="list",$package_id=""){
        $this->load->model('admin/admin_model');
        // Package add area
        if($mode == "add"){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('catname', 'Package Name', 'required');
            if($this->form_validation->run() == TRUE){
                $packdata = array(
                    "description"       => $this->input->post("description",true),
                    "credits_nr"        => $this->input->post("credits",true),
                    "price"             => $this->input->post("price",true),
                    "currency"          => $this->input->post("currency",true),
                    "currency_symbol"   => $this->input->post("currency_symbol",true)
                );
                $response = $this->admin_model->process_package("add",$packdata);
                if($response == "added"){
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This package name already exists');
                }
            }
            $this->gen_contents['page_heading'] = 'Packages';
            $this->template->set_template('admin');
            $this->template->write_view('content', 'admin/packages_add', $this->gen_contents);
            //redirect("admin/packages");
        }
        $this->gen_contents['packages'] = $this->admin_model->get_packages();
        
        $this->template->render();
        
    }

}
