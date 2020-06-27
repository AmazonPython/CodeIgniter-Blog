<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()//定义构造函数__construct() 调用父类CI_Controller
    {
        parent::__construct();
        $this->load->helper('url');//加载URL辅助函数返回site_url()
        $this->load->model('home_model');//加载模型
        $this->load->library('pagination');//加载分页类
    }

    public function index()//index公共函数，主页
    {
        $data['rows'] = $this->home_model->home();//调用home_model模型home类
        $this->load->view('home', $data);//加载视图
    }

    public function article($id)
    {
        $data['rows'] = $this->home_model->article($id);
        $this->load->view('article', $data);
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function tweets()
    {
        $data['rows'] = $this->home_model->tweets();
        $this->load->view('tweets', $data);
    }

    public function diaries()
    {
        $data['rows'] = $this->home_model->diaries();
        $this->load->view('diaries', $data);
    }

    public function photos()
    {
        $this->load->view('photos');
    }

    public function learn()
    {
        $data['rows'] = $this->home_model->learn();
        $this->load->view('learn', $data);
    }

    public function guestbook()
    {
        $data['rows'] = $this->home_model->guestbook();
        $this->load->view('guestbook', $data);
    }

    public function message()//留言功能
    {
        if ($_POST != True)
        {
            $this->load->view('message');
        }
        elseif ($this->input->post('name') && $this->input->post('content') && $this->input->post('date') != null)
        {
            $name = $this->input->post('name');
            $content = $this->input->post('content');
            $date = $this->input->post('date');
            $result = $this->home_model->message($name, $content, $date);

            $this->load->view('message', $result);
        }else{
            $this->load->view('message');
        }
    }

    function search()//搜索功能
    {
        $keyword = $this->input->post('keyword');
        $data['rows'] = $this->home_model->search($keyword);
        $this->load->view('search', $data);
    }
}