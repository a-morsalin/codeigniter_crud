<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
	    $this->load->model('queries');
	    $posts = $this->queries->getPost();
		$this->load->view('welcome_message', ['posts'=>$posts]);
	}

	public function create(){
	    $this->load->view('create');
    }

	public function update($id){
	    $this->load->model('queries');
	    $post = $this->queries->getSinglePost($id);
	    $this->load->view('update',['post'=>$post]);
    }

    public function save(){

	    $this->form_validation->set_rules('title','Title','required');
	    $this->form_validation->set_rules('description','Description','required');

	    if($this->form_validation->run()){

	        $data = $this->input->post();

	        $today = date('y-m-d');
	        $data['date_created'] = $today;

	        unset($data['submit']);

	        $this->load->model('queries');
	        if($this->queries->addPost($data)){
	            $this->session->set_flashdata('msg','Post has been saved');
            }else{
	            $this->session->set_flashdata('msg','Failed to save post');
            }
            return redirect('welcome');

        }else{
	        $this->load->view('create');
//            echo validation_errors();
        }
    }

    public function change($id){

	    $this->form_validation->set_rules('title','Title','required');
	    $this->form_validation->set_rules('description','Description','required');

	    if($this->form_validation->run()){

	        $data = $this->input->post();
	        $today = date('y-m-d');
	        $data['date_created'] = $today;

	        unset($data['submit']);

	        $this->load->model('queries');
	        if($this->queries->updatePost($data,$id)){
	            $this->session->set_flashdata('msg','Post has been updated');
            }else{
	            $this->session->set_flashdata('msg','Failed to update post');
            }
            return redirect('welcome');

        }else{
	        $this->load->view('create');
        }
    }

    public function view($id){
        $this->load->model('queries');
        $post = $this->queries->getSinglePost($id);
        $this->load->view('view',['post'=>$post]);
    }

    public function  delete($id){
        $this->load->model('queries');
        if($this->queries->deletePost($id)){
            $this->session->set_flashdata('msg','Post has been deleted');
        }else {
            $this->session->set_flashdata('msg','Failed to delete post');
        }
        return redirect('welcome');
    }

}
