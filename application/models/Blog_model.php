<?php

class Blog_model extends CI_model{

    public function getBlogs(){
        $filter = $this->input->get('find');
        $this->db->like('title',$filter); //DENGAN kata kunci like akan dicari yg mirip atau ygb meneterupai
        return $this->db->get('blog');
    }

    public function getSingleBlogs($field,$value){

        $this->db->where($field,$value);
       return $this->db->get('blog');
    }

    public function insertBlog($data){
        $this->db->insert('blog',$data);
        return $this->db->insert_id();
    }

    public function updateBlog($id,$post){
        $this->db->where('id',$id);
        $this->db->update('blog',$post);
        return $this->db->affected_rows();//mengembalikan jumlah row yg ter efek jika berhasil maka nilai nya 1 / true begitu sebaliknya
    }

    public function deleteBlog($id){
        $this->db->where('id',$id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
}