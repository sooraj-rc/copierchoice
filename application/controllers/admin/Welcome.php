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
                    redirect("admin/categories");
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This category name already exists');
                }
            }
   
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
                    redirect("admin/categories");
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This category name already exists');
                }
            }
            
        }
        // Category delete area
        if($mode == "delete" && !empty($catid)){
            $catdata = array(
                'catid'=> $catid
            );
            $response = $this->admin_model->process_category("delete",$catdata);
            //redirect("admin/categories");
        }
        
        $this->gen_contents['categories'] = $this->admin_model->get_categories();
        $this->gen_contents['page_heading'] = 'Product Categories';
        $this->template->set_template('admin');
        $this->template->write_view('content', 'admin/categories', $this->gen_contents);
        $this->template->render();
    }
    
    //manage product category 
    public function packages($mode="list",$pack_id=""){
        $this->load->model('admin/admin_model');
        $page = 'admin/packages';
        // Package add area
        if($mode == "add"){
            $this->load->library('form_validation');
            $page = 'admin/packages_add';
            $this->form_validation->set_rules('description', 'Package Name', 'required');
            if($this->form_validation->run() == TRUE){
                $packdata = array(
                    "description"       => $this->input->post("description",true),
                    "credits_nr"        => $this->input->post("credits_nr",true),
                    "price"             => $this->input->post("price",true),
                    "currency"          => $this->input->post("currency",true),
                    "currency_symbol"   => $this->input->post("currency_symbol",true)
                );
                $response = $this->admin_model->process_package("add",$packdata);
                if($response == "added"){
                    redirect("admin/packages");
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This package name already exists');
                }
            }
            
        }
        
        // Package edit area
        if($mode == "edit"){
            $packdata = $this->admin_model->get_packages('list',$pack_id);
            //print_r($packdata); die();
            $this->gen_contents['pd'] = $packdata;
            $page = "admin/packages_add";
            $this->load->library('form_validation');
            $this->form_validation->set_rules('description', 'Package Name', 'required');
            if($this->form_validation->run() == TRUE){
                
                $packdata_new = array(
                    "packageID"         => $this->input->post("packageID",true),
                    "description"       => $this->input->post("description",true),
                    "credits_nr"        => $this->input->post("credits_nr",true),
                    "price"             => $this->input->post("price",true),
                    "currency"          => $this->input->post("currency",true),
                    "currency_symbol"   => $this->input->post("currency_symbol",true)
                );
                //print_r($packdata_new); die();
                $response = $this->admin_model->process_package("edit",$packdata_new);
                if($response == "edited"){
                    redirect("admin/packages");
                }
            }
            
        }
        // Package delete area
        if($mode == "delete" && !empty($pack_id)){
            $packdata = array(
                'packageID'=> $pack_id
            );
            $response = $this->admin_model->process_package("delete",$packdata);
            redirect("admin/packages");
        }
        
        $this->gen_contents['packages'] = $this->admin_model->get_packages();
        $this->gen_contents['page_heading'] = 'Packages';
        $this->template->set_template('admin');
        $this->template->write_view('content', $page, $this->gen_contents);
        $this->template->render();
        
    }
    
    //manage makers/brands
    public function makers($mode="list",$maker_id=""){
        $this->load->model('admin/admin_model');
        $page = 'admin/makers';
        // makeres add area
        if($mode == "add"){
            $this->load->library('form_validation');
            $page = 'admin/makers_add';
            $this->form_validation->set_rules('maker', 'Maker name', 'required');
            if($this->form_validation->run() == TRUE){
                $makerdata = array(
                    "maker"       => $this->input->post("maker",true),
                    "cat_id"      => $this->input->post("cat_id",true)
                );
                $response = $this->admin_model->process_makers("add",$makerdata);
                if($response == "added"){
                    redirect("admin/makers");
                }
                else if($response == "exists"){
                    sf('error_message', 'Sorry! This maker name already exists for same category');
                }
            }
        }
        
        // makers edit area
        if($mode == "edit"){
            $makerdata = $this->admin_model->get_makers('list',$maker_id);
            //print_r($packdata); die();
            $this->gen_contents['md'] = $makerdata;
            $page = "admin/makers_add";
            $this->load->library('form_validation');
            $this->form_validation->set_rules('maker', 'Maker name', 'required');
            if($this->form_validation->run() == TRUE){
                $makerdata_new = array(
                    "makerID"     => $this->input->post("makerID",true),
                    "maker"       => $this->input->post("maker",true),
                    "cat_id"      => $this->input->post("cat_id",true)
                );
                //print_r($packdata_new); die();
                $response = $this->admin_model->process_makers("edit",$makerdata_new);
                if($response == "edited"){
                    redirect("admin/makers");
                }
            }
            
        }
        // makers delete area
        if($mode == "delete" && !empty($maker_id)){
            $makerdata = array(
                'makerID'=> $maker_id
            );
            $response = $this->admin_model->process_makers("delete",$makerdata);
            redirect("admin/makers");
        }
        
        $this->gen_contents['makers'] = $this->admin_model->get_makers();
        $this->gen_contents['cat_list'] = $this->admin_model->get_categories();
        $this->gen_contents['page_heading'] = 'Makers/Brands';
        $this->template->set_template('admin');
        $this->template->write_view('content', $page, $this->gen_contents);
        $this->template->render();
        
    }
    
    //users list controller
    public function users($mode = 'list'){
        $this->load->model('admin/admin_model');
        $page = 'admin/users';
        $total_user = $this->admin_model->get_users_count();
        //--pagination
        $this->load->library('pagination');
        $this->load->library('bspagination');   //bootstrap pagination styles
        $config['base_url']     = admin_url().'users';
        $config['total_rows']   = $total_user;
        $config['per_page']     = 25;
        //config for bootstrap pagination class integration
        
        $bs_init = $this->bspagination->config();
        $config = array_merge($config, $bs_init);
        
        $this->pagination->initialize($config);
        $this->gen_contents['links'] =  $this->pagination->create_links();
        $pagin = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $this->gen_contents['users'] = $this->admin_model->get_users($config['per_page'], $pagin);
        $this->gen_contents['page_heading'] = 'Users (Sellers)';
        $this->template->set_template('admin');
        $this->template->write_view('content', $page, $this->gen_contents);
        $this->template->render();
    }
    
    //Leads list controller
    public function leads($mode = 'list'){
        $this->load->model('admin/admin_model');
        $page = 'admin/leads';
        $total_leads = $this->admin_model->get_leads_count();
        //--pagination
        $this->load->library('pagination');
        $this->load->library('bspagination');   //bootstrap pagination styles
        $config['base_url']     = admin_url().'leads';
        $config['total_rows']   = $total_leads;
        $config['per_page']     = 25;
        //config for bootstrap pagination class integration
        
        $bs_init = $this->bspagination->config();
        
        $config = array_merge($config, $bs_init);
        
        $this->pagination->initialize($config);
        $this->gen_contents['links'] =  $this->pagination->create_links();
        $pagin = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        //$this->admin_model->update_submit_date(); //-- updating exact datetime format to submit_date from SubmissionDate in leads table
        //die();
        
        $this->gen_contents['leads'] = $this->admin_model->get_leads($config['per_page'], $pagin);
        $this->gen_contents['page_heading'] = 'Leads';
        $this->template->set_template('admin');
        $this->template->write_view('content', $page, $this->gen_contents);
        $this->template->render();
    }
    

}
