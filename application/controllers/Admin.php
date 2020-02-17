<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_admin');
        if($this->session->userdata('login_status') != TRUE )
        {
            $this->session->set_flashdata('notif','HARAP LOGIN TERLEBIH DAHULU!');
            redirect('');                        
        };
	}

//=====================Panel Untuk Routing Profil===============================================//
    function dashboard()
    {
    	$data = array(
                        
    					'title' 	=> 'Dashboard Page',
    					'isi' 		=> 'backend/dashboard/dashboard',
    					'label'		=> 'Dashboard'

    				);
    	$this->load->view('layout/backend/wrapper', $data);
    }

   function vision()
   {
   		$data = array(
    					'title' 	=> 'Company Vision Page',
    					'isi' 		=> 'backend/dashboard/vision',
    					'label'		=> 'Profile',
    					'data'		=> $this->Model_admin->get_data('vision')
    				);
    	$this->load->view('layout/backend/wrapper', $data);
   }

   function mission()
   {
   		$data = array(
    					'title' 	=> 'Mission Company Page',
    					'isi' 		=> 'backend/dashboard/mission',
    					'label'		=> 'Profile',
    					'data'		=> $this->Model_admin->get_data('mission')
    				);
    	$this->load->view('layout/backend/wrapper', $data);
   }

    function profile()
    {
        $data = array(
                        'title'     => 'Profile Page',
                        'isi'       => 'backend/dashboard/edit_profile',
                        'label'     => 'Profile',
                        'data'      => $this->Model_admin->getdataById('profile')

                    );
        $this->load->view('layout/backend/wrapper', $data);
    }

   function add_profile()
    {
        $data = array(
                        'title'     => 'Profile Page',
                        'isi'       => 'backend/dashboard/profile',
                        'label'     => 'Profile'
                    );
        $this->load->view('layout/backend/wrapper', $data);
    }
//=====================Panel Untuk Routing Unit===============================================//
  function diesel()
   {
        $data = array(
                        'title'     => 'Diesel Manufacture Page',
                        'isi'       => 'backend/dashboard/diesel',
                        'label'     => 'Diesel Manufacture',
                        
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
    
    function add_diesel()
   {
        $data = array(
                        'title'     => 'Diesel Manufacture Page',
                        'isi'       => 'backend/dashboard/add_diesel',
                        'label'     => 'Diesel Manufacture',
                        'data'      => $this->Model_admin->getdataById('diesel_profile')
                        
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

     function marine()
   {
        $data = array(
                        'title'     => 'Sentosa Marine Page',
                        'isi'       => 'backend/dashboard/marine',
                        'label'     => 'Sentosa Marine',
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
     function add_marine()
   {
        $data = array(
                        'title'     => 'Sentosa Marine Page',
                        'isi'       => 'backend/dashboard/add_marine',
                        'label'     => 'Sentosa Marine',
                        'data'      => $this->Model_admin->getdataById('marine_profile')
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

     function machine()
   {
        $data = array(
                        'title'     => 'Machining Centre Page',
                        'isi'       => 'backend/dashboard/machine',
                        'label'     => 'Machining Centre',
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

   function add_machine()
   {
        $data = array(
                        'title'     => 'Machining Centre Page',
                        'isi'       => 'backend/dashboard/add_machine',
                        'label'     => 'Machining Centre',
                        'data'      => $this->Model_admin->getdataById('machine_profile')
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
//=====================Panel Untuk Routing Unit Product===============================================//
   function diesel_product()
   {
        $data = array(
                        'title'     => 'Diesel Manufacture Page',
                        'isi'       => 'backend/dashboard/product_diesel',
                        'label'     => 'Unit Diesel Manufacture',
                        'label2'    => 'Compose Unit Product',
                        'konten'    =>  $this->Model_admin->get_data('diesel'),
                        'kategori'  =>  $this->Model_admin->getkodeprodukKategori("diesel"),
                        'th_menu1'  => 'ID Product',
                        'th_menu2'  => 'Nama Unit',
                        'th_menu3'  => 'Deskripsi',
                        'th_menu4'  => 'Gambar',
                        'th_menu5'  => 'Aksi',
                        'id_produk' => $this->Model_admin->getKodeProduk("diesel")
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

   function marine_product()
   {
        $data = array(
                        'title'     => 'Sentosa Marine Page',
                        'isi'       => 'backend/dashboard/product_marine',
                        'label'     => 'Unit Sentosa Marine',
                        'label2'    => 'Compose Unit Product',
                        'konten'    =>  $this->Model_admin->get_data('marine'),
                        'kategori'  =>  $this->Model_admin->getkodeprodukKategori("marine"),
                        'th_menu1'  => 'ID Product',
                        'th_menu2'  => 'Nama Unit',
                        'th_menu3'  => 'Deskripsi',
                        'th_menu4'  => 'Gambar',
                        'th_menu5'  => 'Aksi',
                        'id_produk' => $this->Model_admin->getKodeProduk("marine")
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

   function machine_product()
   {
        $data = array(
                        'title'     => 'Machining Centre Page',
                        'isi'       => 'backend/dashboard/product_machine',
                        'label'     => 'Unit Machining Centre',
                        'label2'    => 'Compose Unit Product',
                        'konten'    =>  $this->Model_admin->get_data('machine'),
                        'kategori'  =>  $this->Model_admin->getkodeprodukKategori("machine"),
                        'th_menu1'  => 'ID Product',
                        'th_menu2'  => 'Nama Unit',
                        'th_menu3'  => 'Deskripsi',
                        'th_menu4'  => 'Gambar',
                        'th_menu5'  => 'Aksi',
                        'id_produk' => $this->Model_admin->getKodeProduk("machine")
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

   function career()
   {
        $data = array(
                        'title'     => 'Career Dashboard',
                        'isi'       => 'backend/dashboard/career',
                        'label'     => 'Career Page',
                        'label2'    => 'Compose Career Post',
                        'konten'    =>  $this->Model_admin->get_data('karir'),
                        'th_menu1'  => 'ID Post',
                        'th_menu2'  => 'Kategori',
                        'th_menu3'  => 'Position',
                        'th_menu4'  => 'Tanggal Penutupan',
                        'th_menu5'  => 'Aksi',
                        'th_menu6'  => 'Deskripsi',
                        'th_menu7'  => 'Lokasi',
                        'id_karir'  =>  $this->Model_admin->getKodeKarir(),
                        'th_menu7'  => 'Lokasi'

                       
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

    function event()
   {
        $data = array(
                        'title'     => 'Event Dashboard',
                        'isi'       => 'backend/dashboard/event',
                        'label'     => 'Event Page',
                        'label2'    => 'Compose Event Post',
                        'konten'    =>  $this->Model_admin->get_data('event'),
                        'th_menu1'  => 'ID Post',
                        'th_menu2'  => 'Judul Event',
                        'th_menu3'  => 'Tanggal Event',
                        'th_menu4'  => 'Gambar',
                        'th_menu5'  => 'Aksi',
                        'id_event'  => $this->Model_admin->getKodeEvent()

                       
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

   function manage_user()
   {
        $data = array(
                        'title'     => 'Manage User Dashboard',
                        'isi'       => 'backend/dashboard/user',
                        'label'     => 'Manage User Page',
                        'label2'    => 'Compose New User',
                        'konten'    => $this->Model_admin->get_data('user'),
                        'th_menu1'  => 'ID User',
                        'th_menu2'  => 'Username',
                        'th_menu3'  => 'Role',
                        'th_menu4'  => 'Password',
                        'th_menu5'  => 'Aksi',
                        'id_user'   => $this->Model_admin->getKodeUser()
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */