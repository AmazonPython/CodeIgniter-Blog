<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
    }

    /**
     * 登录注册模块
     * 登录成功则可进行增删改查操作
     */
    public function register()
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            if ($_POST == True)
            {
                if ($this->input->post('username') && $this->input->post('password') != null)
                {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');

                    $result = $this->admin_model->register($username, $password);
                    $this->load->view('admin/register', $result);
                }

            }else{
                $this->load->view('admin/register');
            }
        }else{
            redirect('admin/admin/login');
        }
    }

    public function login()
    {
        $data = new stdClass();//创建数据对象

        $this->load->helper('form');//加载表单验证助手
        $this->load->library('form_validation');//加载表单验证库

        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');//设定验证规则
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false)
        {
            $this->load->view('admin/header');
            $this->load->view('admin/login');

        }else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->admin_model->login($username, $password))
            {
                $user_id = $this->admin_model->get_user_id_from_username($username);
                $user    = $this->admin_model->get_user($user_id);

                $_SESSION['user_id']      = (int)$user->id;//设置会话用户数据
                $_SESSION['username']     = (string)$user->username;
                $_SESSION['logged_in']    = (bool)true;

                $this->load->view('admin/header');
                $this->load->view('admin/success', $data);

            }else{

                $data->error = 'Wrong username or password.';
                $this->load->view('admin/header');
                $this->load->view('admin/login', $data);
            }
        }
    }

    public function logout()//登出功能
    {
        $data = new stdClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true)
        {
            foreach ($_SESSION as $key => $value)//删除会话数据
            {
                unset($_SESSION[$key]);
            }

            $this->load->view('admin/header');
            $this->load->view('admin/logout', $data);

        }else{
            redirect('/');//用户未登录，重定向至站点根目录
        }
    }

    /**
     * 文本显示模块
     */
    public function article()
    {
        $data['rows'] = $this->admin_model->article();
        $this->load->view('admin/article', $data);
    }

    public function diaries()
    {
        $data['rows'] = $this->admin_model->diaries();
        $this->load->view('admin/diaries', $data);
    }

    public function tweets()
    {
        $data['rows'] = $this->admin_model->tweets();
        $this->load->view('admin/tweets', $data);
    }

    public function guestbook()
    {
        $data['rows'] = $this->admin_model->guestbook();
        $this->load->view('admin/guestbook', $data);
    }

    public function photos()
    {
        $data['rows'] = $this->admin_model->photos();
        $this->load->view('admin/photos', $data);
    }

    /**
     * 文本添加模块
     */
    public function add_article()
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            if ($_POST != True)
            {
                $this->load->view('admin/add_article');
            }
            elseif (
                $this->input->post('title') &&
                $this->input->post('content') &&
                $this->input->post('type') &&
                $this->input->post('date') != null
            ){
                $title = $this->input->post('title');
                $content = $this->input->post('content');
                $type = $this->input->post('type');
                $date = $this->input->post('date');

                $result = $this->admin_model->add_article($title, $content, $type, $date);
                $this->load->view('admin/add_article', $result);
            }else{
                $this->load->view('admin/add_article');
            }
        }else{
            redirect('admin/admin/login');
        }
    }

    public function add_diaries()
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            if ($_POST != True)
            {
                $this->load->view('admin/add_diaries');
            }
            elseif ($this->input->post('content') && $this->input->post('date') != null)
            {
                $content = $this->input->post('content');
                $date = $this->input->post('date');

                $result = $this->admin_model->add_diaries($content, $date);
                $this->load->view('admin/add_diaries', $result);
            }else{
                $this->load->view('admin/add_diaries');
            }
        }else{
            redirect('admin/admin/login');
        }
    }

    public function add_tweets()
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            if ($_POST != True)
            {
                $this->load->view('admin/add_tweets');
            }
            elseif ($this->input->post('content') && $this->input->post('date') != null)
            {
                $content = $this->input->post('content');
                $date = $this->input->post('date');

                $result = $this->admin_model->add_tweets($content, $date);
                $this->load->view('admin/add_tweets', $result);
            }else{
                $this->load->view('admin/add_tweets');
            }
        }else{
            redirect('admin/admin/login');
        }
    }

    /**
     * 文本删除模块
     */
    public function delete_article($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $this->admin_model->delete_article($id);
        }else{
            redirect('admin/admin/login');
        }
    }

    public function delete_diaries($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $this->admin_model->delete_diaries($id);
        }else{
            redirect('admin/admin/login');
        }
    }

    public function delete_tweets($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $this->admin_model->delete_tweets($id);
        }else{
            redirect('admin/admin/login');
        }
    }

    public function delete_guestbook($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $this->admin_model->delete_guestbook($id);
        }else{
            redirect('admin/admin/login');
        }
    }

    /**
     * 文本更新模块
     */
    public function edit_article($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $article = $this->db->get_where('article', array('id' => $id))->row();
            $this->load->view('admin/edit_article',array('article' => $article));

        }else{
            redirect('admin/admin/login');
        }
    }

    public function update_article($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $article = new admin_model;
            $article->update_article($id);
            redirect(base_url('admin/admin/article'));

        }else{
            redirect('admin/admin/login');
        }
    }

    public function edit_diaries($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $diaries = $this->db->get_where('diaries', array('id' => $id))->row();
            $this->load->view('admin/edit_diaries',array('diaries' => $diaries));

        }else{
            redirect('admin/admin/login');
        }
    }

    public function update_diaries($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $diaries = new admin_model;
            $diaries->update_diaries($id);
            redirect(base_url('admin/admin/diaries'));

        }else{
            redirect('admin/admin/login');
        }
    }

    public function edit_tweets($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $tweets = $this->db->get_where('tweets', array('id' => $id))->row();
            $this->load->view('admin/edit_tweets',array('tweets' => $tweets));

        }else{
            redirect('admin/admin/login');
        }
    }

    public function update_tweets($id)
    {
        if ($_SESSION['logged_in'] == TRUE)
        {
            $tweets = new admin_model;
            $tweets->update_tweets($id);
            redirect(base_url('admin/admin/tweets'));

        }else{
            redirect('admin/admin/login');
        }
    }
}