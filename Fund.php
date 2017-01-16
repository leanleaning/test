<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Fund extends MY_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index($page=1){
     
        if($page==1){
            $this->load->view('funmanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/fundmanage_payinterface');
            $this->load->view('footer');
        }
        if($page==2){
            $this->load->view('funmanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/fundmanage_payonline');
            $this->load->view('footer');
        }
        if($page==3){
            $this->load->view('funmanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/fundmanage_cashlist');
            $this->load->view('footer');
        }
        if($page==4){
            $this->load->view('funmanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/fundmanage_cashtocertificate');
            $this->load->view('footer');
        }
        if($page==5){
            $this->load->view('funmanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/fundmanage_cashtoconfirm');
            $this->load->view('footer');
        }
    }
    
    
    
    
}







?>