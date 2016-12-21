<?php
class News extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'users archive';
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL)
    {
        $data['Users_item'] = $this->User_model->get_Users($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
        $data['title'] = $data['news_item']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
