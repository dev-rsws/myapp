<?php

class Blog extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');

    }

    public function index(){
    //    $data = [
    //     'nama' => $nama,
    //     'goldarah' => $goldarah,
    //     'alamat' => $alamat
    //    ];


        // $data = [
        //     'nama' => $nama,
        //     'goldarah' => $goldarah,
        //     'alamat' => $alamat
        // ];

        //variable blogs ada dalam $data
    //     $data['blogs'] = [
    //         ['title' => 'artikel pertama',
    //          'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet earum dolorum harum architecto incidunt eum, nostrum sed voluptatem, modi, perferendis sint autem exercitationem! Veniam quaerat voluptas optio temporibus, eos voluptatem.'
    //         ],
    //          ['title' => 'artikel kedua',
    //         'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet earum dolorum harum architecto incidunt eum, nostrum sed voluptatem, modi, perferendis sint autem exercitationem! Veniam quaerat voluptas optio temporibus, eos voluptatem.'
    //          ],
    // ];

    //AKSES DATABASE DENGAN PANGGIL LIBRARY DATABASE
    $this->load->database();

    //INI MENGGUNAKAN QUERY BIASA
    //$query = $this->db->query('SELECT * FROM blog');

    // INI MENGGUNAKAN QUERY BUILDER
    $query = $this->Blog_model->getBlogs();

    $data['blogs'] = $query->result_array();


    $this->load->view('blog', $data);

        //print_r($data);
    }




    public function detail($url){

       //INI IMPLEMENTASI QUERY DARI MODEL
        $query = $this->Blog_model->getSingleBlogs('url',$url);

        $data['blog'] = $query->row_array();

       $this->load->view('detail',$data);
    }



    public function add(){

        if($this->input->post()){
            $data['title'] = $this->input->post('title');
            $data['url'] = $this->input->post('url');
            $data['content'] = $this->input->post('content');
    
            print_r($data);


            $id = $this->Blog_model->insertBlog($data);

            if($id){
                echo "Alhamdulillah Data Berhasil Masuk";
            }else{
                echo "Data Gagal Masuk";
            }
        }

        $this->load->view('form_add');
        
    }

    public function edit($id){

        
        $query = $this->Blog_model->getSingleBlogs('id',$id);

        $data['blog'] = $query->row_array();

        //PROSES SIMPAN DATA KE DB
        if($this->input->post()){
            $post['title'] = $this->input->post('title');
            $post['url'] = $this->input->post('url');
            $post['content'] = $this->input->post('content');
    
            $id = $this->Blog_model->updateBlog($id, $post);

            if($id){
                echo "Alhamdulillah Data Berhasil DIUBAH";
            }else{
                echo "Data Gagal Masuk";
            }
        }

        $this->load->view('form_edit',$data);
    }

    public function delete($id){
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}








// NOTE
// - $this->input->post(); fungsi ini bisa input walau tanpa pengecekan awal apakah data sudah ada di di url
//INI PAKAI QUERY BIASA
        //$query = $this->db->query('SELECT * FROM blog WHERE url = "'.$url.'"');

        //INI PAKAI QUERY BUILDER (DIPINDAHKAN KE MODEL)
       //$this->db->where('url',$url);
       //$this->db->get('blog');