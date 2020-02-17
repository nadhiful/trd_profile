<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class En extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model_admin");
		
	}

	//=====================Panel Untuk Routing Login===============================================//
	function index()
	{
		$data = array(
						'title'		=> 'Halaman Login',
					 );
		$this->load->view('backend/login/login',$data);
	}

	
	function check_user()
	{
			$this->form_validation->set_rules(
				'username', 'Username', 'trim|required'
			);
			$this->form_validation->set_rules(
				'password', 'Password', 
				'trim|required|min_length[2]|max_length[8]'
				);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('backend/login/login');
			} else {
				$valid = $this->Model_admin->check_user();
				if ($valid == FALSE)
				{
					$this->session->set_flashdata('notif','Password atau Username Salah');
					redirect('En');
				} else {
					foreach ($valid as $key ) {
						$id_user 	= $key->id_user;
						$id_role 	= $key->id_role;
						$nama    	= $key->nama;
						$last_login = $key->last_login;
					}
					$data = array(
									'id_user' 		=> $id_user,
									'id_role' 		=> $id_role,
									'nama'	 		=> $nama,
									'login_status'	=> TRUE
								);
					$this->session->set_userdata($data);
					redirect('Admin/dashboard','refresh');

				}
			}

	}
	function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('id_role');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('login_status');
        $this->session->sess_destroy();
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('En');
    }
 //=====================Panel Untuk Routing Login===============================================//



}

/* End of file  */
/* Location: ./application/controllers/ */