<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    //This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');//加载URL辅助函数返回site_url()
        $this->load->model('home_model');//加载模型
        $this->load->library('pagination');//加载分页类
    }

    public function index()//index公共函数，主页
    {
        $config['base_url'] = 'http://codeigniter-3.1.11.bb/home/index';//输出分页链接
        $config['total_rows'] = $this->db->get("article")->num_rows();
        $config['per_page'] = 8;
        $config['num_links'] = 100;
        $this->pagination->initialize($config);

        $data['rows'] = $this->home_model->home($config);//调用home_model模型home类
        $this->load->view('home', $data);//加载视图
    }

    public function article($id)//文章详情页
    {
        $data['rows'] = $this->home_model->article($id);
        $this->load->view('article', $data);
    }

    public function about()//关于页面
    {
        $this->load->view('about');
    }

    public function tweets()
    {
        $config['base_url'] = 'http://codeigniter-3.1.11.bb/home/tweets';
        $config['total_rows'] = $this->db->get("tweets")->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 100;
        $this->pagination->initialize($config);

        $data['rows'] = $this->home_model->tweets($config);
        $this->load->view('tweets', $data);
    }

    public function diaries()
    {
        $config['base_url'] = 'http://codeigniter-3.1.11.bb/home/diaries';
        $config['total_rows'] = $this->db->get("diaries")->num_rows();
        $config['per_page'] = 5;
        $config['num_links'] = 100;
        $this->pagination->initialize($config);

        $data['rows'] = $this->home_model->diaries($config);
        $this->load->view('diaries', $data);
    }

    public function diaries_details($id)
    {
        $data['rows'] = $this->home_model->diaries_details($id);
        $this->load->view('diaries_details', $data);
    }

    public function photos()
    {
        $this->load->view('photos');
    }

    public function category()
    {
        $data['rows'] = $this->home_model->category();
        $this->load->view('category', $data);
    }

    public function category_details($type)
    {
        $config['base_url'] = 'http://codeigniter-3.1.11.bb/home/category_details/' . $type;
        $config['total_rows'] = $this->db->get("article")->num_rows();
        $config['per_page'] = 8;
        $config['num_links'] = 100;

        $this->pagination->initialize($config);

        $data['rows'] = $this->home_model->category_details($config, $type);
        $this->load->view('category_details', $data);
    }

    public function guestbook()
    {
        $config['base_url'] = 'http://codeigniter-3.1.11.bb/home/guestbook';
        $config['total_rows'] = $this->db->get("guestbook")->num_rows();
        $config['per_page'] = 8;
        $config['num_links'] = 100;
        $this->pagination->initialize($config);

        $data['rows'] = $this->home_model->guestbook($config);
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
