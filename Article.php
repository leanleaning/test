<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Article extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper(array('url','form'));
    }
    public function index($page='cgl'){
        if($page=='cgl'){
            $this->cgl();
            $this->load->view('video/article_categorylist');
        }
        elseif($page=='cgr'){
            $this->load->view('video/article_categoryrecovery');
        }
        elseif($page=='al'){
             $this->load->view('video/article_list');
        }
        elseif ($page=='ap') {
         $this->load->view('video/article_problem');
        }
        elseif ($page=='ar') {
             $this->load->view('video/article_recovery');
        }
        
    }
    public function cgl(){
        //这边进行处理
    }
    public function delete(){
        $delete=$_POST['article_id'];
        $this->data->delete('t_article',array('article_id'=>$delete));
    }
    public function add(){
        $adddata='';
        $this->data->insert('t_article',$adddata);
        
    }
}
    

