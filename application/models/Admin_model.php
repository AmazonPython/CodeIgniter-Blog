<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();//加载数据库
    }

    /**
     * 登录注册模块
     * 登录成功则可进行增删改查操作
     */
    public function Register($username, $password)//register
    {
        if ($this->db->insert('admin', array(

            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)//password_hash()较MD5更安全

        ) )){

            return $this->db->insert_id() && redirect('admin/admin/login');

        } else {
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    public function login($username, $password)
    {
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);
    }

    public function get_user_id_from_username($username)//获取用户ID
    {
        $this->db->select('id');
        $this->db->from('admin');
        $this->db->where('username', $username);

        return $this->db->get()->row('id');
    }

    public function get_user($user_id)
    {
        $this->db->from('admin');
        $this->db->where('id', $user_id);

        return $this->db->get()->row();
    }

    /*
     * 密码效验模块
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function verify_password_hash($password, $hash)
    {
        return password_verify($password, $hash);
    }

    /**
     * 文本显示模块
     */
    public function article($config)
    {
        $data = $this->db->order_by('id', 'desc')->get('article', $config['per_page'], $this->uri->segment(4));
        return $data->result();
    }

    public function diaries($config)
    {
        $data = $this->db->order_by('id', 'desc')->get('diaries', $config['per_page'], $this->uri->segment(4));
        return $data->result_array();
    }

    public function tweets($config)
    {
        $data = $this->db->order_by('id', 'desc')->get('tweets', $config['per_page'], $this->uri->segment(4));
        return $data->result_array();
    }

    public function guestbook($config)
    {
        $data = $this->db->get('guestbook', $config['per_page'], $this->uri->segment(4));
        return $data->result_array();
    }

    public function reply($id)
    {
        $data = $this->db->from('guestbook')->where('id=', $id)->get();
        return $data->result()[0];
    }

    public function reply_store($name, $content, $date)
    {
        if ($this->db->insert('guestbook',array(

            'name' => $name,
            'content' => $content,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('admin/admin/guestbook');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    public function photos()
    {

    }

    /**
     * 文本添加模块
     */
    public function add_article($title, $content, $type, $date)
    {
        if ($this->db->insert('article',array(

            'title' => $title,
            'content' => $content,
            'type' => $type,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('admin/admin/article');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    public function add_diaries($content, $date)
    {
        if ($this->db->insert('diaries',array(

            'content' => $content,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('admin/admin/diaries');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    public function add_tweets($content, $date)
    {
        if ($this->db->insert('tweets',array(

            'content' => $content,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('admin/admin/tweets');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    /**
     * 文本删除模块
     */
    public function delete_article($id)
    {
        $data = $this->db->from('article')->where('id=', $id);
        $data->delete() && redirect('admin/admin/article');
    }

    public function delete_diaries($id)
    {
        $data = $this->db->from('diaries')->where('id=', $id);
        $data->delete() && redirect('admin/admin/diaries');
    }

    public function delete_tweets($id)
    {
        $data = $this->db->from('tweets')->where('id=', $id);
        $data->delete() && redirect('admin/admin/tweets');
    }

    public function delete_guestbook($id)
    {
        $data = $this->db->from('guestbook')->where('id=', $id);
        $data->delete() && redirect('admin/admin/guestbook');
    }

    /**
     * 文本更新模块
     */
    public function update_article($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content'=> $this->input->post('content'),
            'date' => $this->input->post('date'),
            'type' => $this->input->post('type')
        );

        if($id == 0){
            return $this->db->insert('article', $data);
        }else{
            $this->db->where('id', $id);
            return $this->db->update('article', $data);
        }
    }

    public function update_diaries($id)
    {
        $data = array(
            'content'=> $this->input->post('content'),
            'date' => $this->input->post('date')
        );

        if($id == 0){
            return $this->db->insert('diaries', $data);
        }else{
            $this->db->where('id', $id);
            return $this->db->update('diaries', $data);
        }
    }

    public function update_tweets($id)
    {
        $data = array(
            'content'=> $this->input->post('content'),
            'date' => $this->input->post('date')
        );

        if($id == 0){
            return $this->db->insert('tweets', $data);
        }else{
            $this->db->where('id', $id);
            return $this->db->update('tweets', $data);
        }
    }
}