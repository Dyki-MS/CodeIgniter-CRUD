<?php

class Overview extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("admin/login"));
        }
    }

    public function index()
    {
        $this->load->view("admin/overview");
    }
} 

?>