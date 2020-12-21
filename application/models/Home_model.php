<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();//加载数据库
    }

    public function home($config)
    {
        //$query = $this->db->query('select * from article order by id desc limit 0,8');//加载数据表

        //调用article表,按id倒序排列并显示8条数据
        $data = $this->db->order_by('id', 'desc')->get('article', $config['per_page'], $this->uri->segment(3));
        return $data->result();//单结果标准查询（对象形式）
    }

    public function article($id)
    {
        $data = $this->db->from('article')->where('id=', $id)->get();
        return $data->result()[0];
    }

    public function tweets($config)
    {
        $data = $this->db->order_by('id', 'desc')->get('tweets', $config['per_page'], $this->uri->segment(3));
        return $data->result_array();//单结果标准查询（数组形式）
    }

    public function diaries($config)
    {
        $data = $this->db->get('diaries', $config['per_page'], $this->uri->segment(3));
        return $data->result_array();
    }

    public function diaries_details($id)//日记详情
    {
        $data = $this->db->from('diaries')->where('id=', $id)->get();
        return $data->result_array()[0];
    }

    public function category()
    {
        $data = $this->db->group_by('type')->get('article');
        return $data->result();
    }

    public function category_details($config, $type)//分类详情
    {
        $data =  $this->db->where('type=', $type)->get('article', $config['per_page'], $this->uri->segment(4));
        return $data->result();
    }

    public function guestbook($config)
    {
        $data = $this->db->get('guestbook', $config['per_page'], $this->uri->segment(3));
        return $data->result_array();
    }

    public function message($name, $content, $date)
    {
        if ($this->db->insert('guestbook',array(

            'name' => $name,
            'content' => $content,
            'date' => $date

        ) )){

            return $this->db->insert_id() && redirect('home/guestbook');

        }else{
            log_message ('error', 'register error-->' . $this->db->last_query());
            return false;
        }
    }

    function search($keyword)
    {
        $data = $this->db->from('article')->like('title', $keyword)->or_like('content', $keyword)->get();
        return $data->result();
    }
}
