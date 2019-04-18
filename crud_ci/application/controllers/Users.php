<?php
Class Users extends CI_Controller{

	 function index(){
		$this->load->model("model_users");
		 $data['list_users'] = $this->model_users->load_users();
		
		$this->load->view("data_users",$data);
	}

	function add(){
		$this->load->model("model_users");

		$data = array();

		if(isset($_POST['tombol_submit'])){

			//proses simpan dilakukan
			$this->model_users->simpan($_POST);
			redirect("Users");
		}
		 $data['tipe'] = "Add";
		$this->load->view("add_users",$data);
	}
	public function edit($id){
		$this->load->model("model_users");
		$data['tipe'] = "Edit";
		// $data['default'] = $this->model_data->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_users->update($_POST, $id);
			redirect("users");
		}

		$this->load->view("add_users",$data);
	}
	public function delete($id){
		$this->load->model("model_users");
		$this->model_users->hapus($id);
		redirect("users");
	}
}
