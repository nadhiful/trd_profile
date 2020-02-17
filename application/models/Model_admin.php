<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public $variable;
	private $_table = 'user';

	public function __construct()
	{
		parent::__construct();

	}
// ============Modul Login=========================================//
	function check_user()
	{
		$input  	= $this->input->post('username');		
		$password 	= $this->input->post('password');
		$hasil 	= $this->db->where('id_user', $input)
						   ->or_where('nama',$input)
						   ->from('user')
						   ->limit(1)
				 		   ->get();
		if ($hasil->num_rows () > 0) {

			foreach ($hasil->result() as $key) {
				$getPassword = $key->password;
				$id = $key->id_user;
			}
			$isPassword = password_verify($password, $getPassword);
			if ($isPassword) {
				$this->_updateLastLogin($id);
				return $hasil->result();
				return true;
			}
		}
		return false;
	}

	 private function _updateLastLogin($id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id_user='{$id}'";
        $this->db->query($sql);
    }
//============Modul Get Data All==================================//
	function get_data($trigger)
	{
		if ($trigger=="vision") {
			$hasil = $this->db->select('*')
							  ->from('post')
							  ->where('id_kategori',2)
							  ->limit(1)
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "mission"){
			$hasil = $this->db->select('*')
							  ->from('post')
							  ->where('id_kategori',3)
							  ->limit(1)
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "diesel"){
			$hasil =  $this->db->select('a.id_product,a.nama,a.deskripsi,b.nama as kategori,a.images')
							   ->from('product as a')
							   ->join('kategori_product as b','a.id_kategori = b.id','inner')
							   ->where('a.id_kategori = 1')
							   ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "marine"){
			$hasil =  $this->db->select('a.id_product,a.nama,a.deskripsi,b.nama as kategori,a.images')
							   ->from('product as a')
							   ->join('kategori_product as b','a.id_kategori = b.id','inner')
							   ->where('a.id_kategori = 2')
							   ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "machine"){
			$hasil =  $this->db->select('a.id_product,a.nama,a.deskripsi,b.nama as kategori,a.images')
							   ->from('product as a')
							   ->join('kategori_product as b','a.id_kategori = b.id','inner')
							   ->where('a.id_kategori = 3')
							   ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif ($trigger == "karir") {
			$hasil = $this->db->select('*')
							  ->from('karir')
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "event"){
			$hasil = $this->db->select('*')
							  ->from('event')
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger == "user"){
			$hasil = $this->db->select('*')
							  ->from('user')
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif ($trigger == "messages") {
			$hasil = $this->db->select('*')
							  ->from('messages')
							  ->order_by('id', 'DESC')
							  ->get();
			if ($hasil->num_rows() > 0) {
				return $hasil->result();
			}else {
				return array();
			}
		}
	}
//============Modul Get Data By ID================================//
	function getdataById($trigger)
	{
		if ($trigger == 'profile') {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b','a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 1')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}elseif ($trigger=="diesel_profile") {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b', 'a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 4')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}elseif ($trigger=="marine_profile") {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b', 'a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 5')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}elseif ($trigger == "machine_profile") {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b', 'a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 6')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}
	}
//====================Modul Upload Gambar ================================================//
	private function _uploadImage($trigger,$id)
	{
		if ($trigger == 'profile' AND $id == 0) {
			$name 						= 'profile_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'diesel_a_pr' && $id == 0 ) {
			$name 						= 'diesel_profile_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'marine_a_pr' && $id == 0 ) {
			$name 						= 'marine_profile_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'machine_a_pr' && $id == 0 ) {
			$name 						= 'machine_profile_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'profile_u' && $id == 0 ) {
			$name 						= 'profile_update_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'diesel_u_pr' && $id == 0) {
			$name 						= 'diesel_profile_update_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'marine_u_pr'&& $id == 0 ) {
			$name 						= 'marine_profile_update_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'machine_u_pr' AND $id == 0 ) {
			$name 						= 'machine_profile_update_';
			$folder 					= './upload/profile/';
		}elseif ($trigger == 'diesel_produk' && $id == 0) {
			$index 						= $this->getKodeProduk("diesel");
			$name 						= 'diesel_produk_'.$index."_";
			$folder 					= './upload/product/';
		}elseif ($trigger == 'marine_produk' && $id == 0) {
			$index 						= $this->getKodeProduk("marine");
			$name 						= 'marine_produk_'.$index."_";
			$folder 					= './upload/product/';
		}elseif ($trigger == 'machine_produk' && $id == 0) {
			$index 						= $this->getKodeProduk("machine");
			$name 						= 'machine_produk_'.$index."_";
			$folder 					= './upload/product/';
		}elseif ($trigger == 'add_event' && $id == 0) {
			$index 						= $this->getKodeEvent();
			$name 						= 'event_'.$index."_";
			$folder 					= './upload/event/';
		}

		$dateString 					= date('Y-m-d');
		$myDate 						= new DateTime($dateString);
		$formattedDate 					= $myDate->format('Y m d');
	    $config['upload_path']          = $folder;
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']			= $name.$formattedDate;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('images')) {
	        return $this->upload->data('file_name');   
	    }
	    print_r($this->upload->display_errors());
	    return "default.jpg";
	}
//====================Modul Delete Gambar ========================//

    private function _deleteImage($id)
	{
	    $product = $this->getdataImageID($id);

	    if ($product  != "default.jpg") {
           $filename = explode(".", $product)[0];
	       return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
	     }
	}
//============Modul Update Data =======================================================================//

	function update_data($trigger)
	{
		if($trigger == "visi") {
			$hasil 	= 	$this->db->where('id_kategori', 2)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput("visi_u");
			$this->db->where('id', $id)
					 ->update('post',$var);
			redirect('Admin/vision');
		}elseif($trigger == "misi") {
			$hasil 	= 	$this->db->where('id_kategori', 3)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput("misi_u");
			$this->db->where('id', $id)
					 ->update('post',$var);
			redirect('Admin/mission');
		}elseif($trigger == "profile_a") {
			$var = $this->getdatafromUserInput("profil_a");
			$this->db->insert('post', $var);
			redirect('Admin/profile');
		}elseif($trigger == "profile_u") {
			$hasil 	= 	$this->db->where('id_kategori', 1)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput("profil_u");
			$this->db->where('id', $id)
				 	 ->update('post',$var);
			redirect('Admin/profile');
		}elseif ($trigger == "diesel_a") {
			$var = $this->getdatafromUserInput('diesel_a');
			$this->db->insert('post', $var);
			redirect('Admin/add_diesel');
		}elseif ($trigger == "diesel_u") {
			$hasil 	= 	$this->db->where('id_kategori', 4)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput('diesel_u');
			$this->db->where('id', $id)
				 	 ->update('post',$var);
			redirect('Admin/add_diesel');
		}elseif ($trigger == "marine_a") {
			$var = $this->getdatafromUserInput('marine_a');
			$this->db->insert('post', $var);
			redirect('Admin/add_marine');
		}elseif ($trigger == "marine_u") {
			$hasil 	= 	$this->db->where('id_kategori', 5)
								 ->from('post')
								 ->get();
				foreach ($hasil->result() as $key) {
					$id 	= $key->id;
				}
				$var = $this->getdatafromUserInput('marine_u');
				$this->db->where('id', $id)
					 	 ->update('post',$var);
				redirect('Admin/add_marine');
		}elseif ($trigger == "machine_a") {
			$var = $this->getdatafromUserInput('machine_a');
			$this->db->insert('post', $var);
			redirect('Admin/add_machine');
		}elseif ($trigger == "machine_u") {
			$hasil 	= 	$this->db->where('id_kategori', 6)
								 ->from('post')
								 ->get();
				foreach ($hasil->result() as $key) {
					$id 	= $key->id;
				}
				$var = $this->getdatafromUserInput('machine_u');
				$this->db->where('id', $id)
					 	 ->update('post',$var);
				redirect('Admin/add_machine');

		}elseif ($trigger == "karir_u") {
			$var = $this->getdatafromUserInput("karir_u");
			$id = $this->input->post('kd_karir');
			$this->db->where('id_karir', $id)
					 ->update('karir',$var);
			redirect('Admin/career','refresh');
		}elseif ($trigger == "event_u") {
			$var = $this->getdatafromUserInput("event_u");
			$id = $this->input->post('kd_event');
			$this->db->where('id_event', $id)
					 ->update('event',$var);
			redirect('Admin/event','refresh');
		}elseif($trigger == "user_u"){
			$var = $this->getdatafromUserInput("user_u");
			$id = $this->input->post('kd_user');
			$this->db->where('id_user', $id)
			 		 ->update('user',$var);
			redirect('Admin/manage_user','refresh');
		}

	}
//=================Modul Get Input From User ==========================================================//
	private function getdatafromUserInput($trigger)
	{
		$var 	= $trigger ;
		$pecah 	= explode("_",$var);
		$awal 	= $pecah[0];
		$index	= $pecah[1];

		if ($awal == "profil") {
			if ($index == "a") {
				$data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('profile'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
		        );
				return $data;
				return true;

			}elseif ($index == "u") {
				if(!empty($_FILES["images"]["name"])) {
				$id=0;
			    $data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('profile_u',$id),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    return $data;
			} else {
				$data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_image'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}	
			}
			// ========Get Input Misi Profile=========///	
		}elseif ($awal == "misi") {
			if ($index == "u") {
				$data=array(
			            'id_kategori' 	=> 3,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        	);
				return $data;
				return true;
			}
			// ========Get Input Visi Profile=========///	
		}elseif ($awal == "visi") {
			if ($index == "u") {
				$data=array(
			            'id_kategori' 	=> 2,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'date_updated'	=> date('Y-m-d')
	        );
				return $data;
				return true;
			}
		// ========Get Input Diesel Profile=========///	
		}elseif ($awal == "diesel") {
			if ($index == "a") {
				$data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('diesel_a_pr'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			} elseif ($index == "u") {
				if(!empty($_FILES["images"]["name"])) {
				$id=0;
			    $data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('diesel_u_pr',$id),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    return $data;
			} else {
				$data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_images'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}	
			}
		// ========Get Input Marine Profile=========///
		}elseif ($awal == "marine") {
			if ($index == "a") {
				$data=array(
			            'id_kategori' 	=> 5,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('marine_a_pr'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			} elseif ($index == "u") {
				if (!empty($_FILES["images"]["name"])) {
					$id=0;
					$data=array(
			            'id_kategori' 	=> 5,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('marine_u_pr',$id),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    	return $data;
				}else {
				$data=array(
			            'id_kategori' 	=> 5,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_images'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}
			}
			// ========Get Input Machine Profile=========///
		}elseif ($awal == "machine") {
			if($index == "a") {
				$data=array(
			            'id_kategori' 	=> 6,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('machine_a_pr'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			}elseif ($index == "u") {
				if (!empty($_FILES["images"]["name"])) {
					$id = 0;
					$data=array(
			            'id_kategori' 	=> 6,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('machine_u_pr',$id),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    	return $data;
				}else {
				$data=array(
			            'id_kategori' 	=> 6,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_images'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}
			}
		}elseif ($awal == "product-diesel") {
			if ($index == 'a') {
				$id = 0;
				$data=array(
			            'id_product'	=> $this->getKodeProduk("diesel"),
			            'id_kategori'	=> 1,
			            'nama'			=> $this->input->post('nama'),
			            'deskripsi'		=> $this->input->post('isi'),
			            'images'		=> $this->_uploadImage('diesel_produk',$id),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			}
		}elseif ($awal == "product-marine") {
			if ($index == 'a') {
				$id = 0;
				$data=array(
			            'id_product'	=> $this->getKodeProduk("marine"),
			            'id_kategori'	=> 2,
			            'nama'			=> $this->input->post('nama'),
			            'deskripsi'		=> $this->input->post('isi'),
			            'images'		=> $this->_uploadImage('marine_produk',$id),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			}
		}elseif ($awal == "product-machine") {
			if ($index == 'a') {
				$id = 0;
				$data=array(
			            'id_product'	=> $this->getKodeProduk("machine"),
			            'id_kategori'	=> 3,
			            'nama'			=> $this->input->post('nama'),
			            'deskripsi'		=> $this->input->post('isi'),
			            'images'		=> $this->_uploadImage('machine_produk',$id),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			}

		}elseif ($awal == "karir") {
			if ($index == "a") {
				$id = 0;
				$data=array(
				            'id_karir'		=> $this->getKodeKarir(),
				            'kategori'		=> $this->input->post('kategori'),
				            'job_position'	=> $this->input->post('position'),
				            'job_desc'		=> $this->input->post('deskripsi'),
				            'job_location'	=> $this->input->post('lokasi'),
				            'date_create'	=> date('Y-m-d'),
				            'date_close'	=> $this->input->post('tutup')
	        		);
			        return $data;
			        return TRUE;
			}elseif ($index == "u") {
				$data=array(
				            'id_karir'		=> $this->input->post('kd_karir'),
				            'kategori'		=> $this->input->post('kd_kategori'),
				            'job_position'	=> $this->input->post('kd_position'),
				            'job_desc'		=> $this->input->post('kd_deskripsi'),
				            'job_location'	=> $this->input->post('kd_lokasi'),
				            'date_close'	=> $this->input->post('kd_tutup')
	        		);
			        return $data;
			        return TRUE;
			}
		}elseif ($awal == "event"){
			if ($index == "a") {	
				$id = 0;
				$data = array(
								'id_event' 		=>  $this->input->post('id_event'),
								'title'			=>  $this->input->post('judul'),
								'date_event'	=>  $this->input->post('tanggal'),
								'images'		=>  $this->_uploadImage("add_event",$id)
							);
				return $data;
				return TRUE;
			}elseif ($index == "u") {
				if(!empty($_FILES["images"]["name"])) {
				$id = $this->input->post('kd_event');
			    $data=array(
			            'title' 		=> $this->input->post('kd_judul'),
			            'date_event'	=> $this->input->post('kd_tanggal'),
			            'images'		=> $this->uploadImageEvent(),
	        		);
			    return $data;
				}else{
					$data=array(
			            'title' 		=> $this->input->post('kd_judul'),
			            'date_event'	=> $this->input->post('kd_tanggal'),
			            'images'		=> $this->input->post('old_images'),
			           
	        		);
			   		return $data;
				}
			}
		}elseif($awal == "user"){
			if ($index == "a") {
				$id = 0;
				$getPassword = $this->input->post('password');
				$data = array(
								'id_user' 	=>  $this->getKodeUser(),
								'id_role'	=>  $this->input->post('role'),
								'nama'		=>  $this->input->post('username'),
								'password'	=>  password_hash($getPassword, PASSWORD_BCRYPT)
							);
				return $data;
				return TRUE;
			}elseif($index == "u"){
				$id = 0;
				$getPassword = $this->input->post('kd_password');
				$data = array(
								'id_user' 	=>  $this->input->post('kd_user'),
								'id_role'	=>  $this->input->post('kd_role'),
								'nama'		=>  $this->input->post('kd_username'),
								'password'	=>  password_hash($getPassword, PASSWORD_BCRYPT)
							);
				return $data;
				return TRUE;
			}
		}

	}
//=================Modul Get Insert From User =========================================================//
	function insert_data($trigger)
	{
		$var 	= $trigger ;
		$pecah 	= explode("_",$var);
		$awal 	= $pecah[0];
		$tengah	= $pecah[1];
		$akhir  = $pecah[2]; 
		if ($awal == 'product' && $tengah == 'diesel') {
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("product-diesel_a");
				$this->db->insert('product', $var);
				redirect('Admin/diesel_product');
			}
		}elseif ($awal == 'product' && $tengah == 'marine') {
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("product-marine_a");
				$this->db->insert('product', $var);
				redirect('Admin/marine_product');
			}
		}elseif ($awal == 'product' && $tengah == 'machine') {
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("product-machine_a");
				$this->db->insert('product', $var);
				redirect('Admin/machine_product');
			}

		}elseif($awal == 'product' && $tengah == 'karir'){
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("karir_a");
				$this->db->insert('karir',$var);
				redirect('Admin/career','refresh');
			}
		}elseif ($awal == "product" && $tengah == "event") {
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("event_a");
				$this->db->insert('event', $var);
				redirect('Admin/event','refresh');
			}
		}elseif ($awal == "product" && $tengah == "user") {
			if ($akhir == "a") {
				$var = $this->getdatafromUserInput("user_a");
				$this->db->insert('user', $var);
				redirect('Admin/manage_user','refresh');
			}
		}

		
	}

//=========================Panel Get Kode Produk =======================================//
   function getKodeProduk($trigger)
    {
    	$resultan = $this->db->select('*')
    						 ->from('product')
    						 ->get();
    	if ($resultan->num_rows() > 0) {
    		
	       $kd = "";
	       $hasil = $this->db->select('id_product')
	                         ->from('product')
	                         ->order_by('id_product','DESC')
	                         ->limit(1)
	                         ->get();
	              foreach ($hasil->result() as $key ) {
	              $result1 = $key->id_product;
	        }
	//===========================================================================//
	       $hasil3 = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product where id_product LIKE '%DS%' ");
	       foreach ($hasil3->result() as $key3) {
	                     $tmp3 = ((int)$key3->kd_max)+1;
	            $kd3 = sprintf("%03s", $tmp3);
	       }

	       $hasil4 = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product where id_product LIKE '%SM%' ");
	       foreach ($hasil4->result() as $key4) {
	                     $tmp4 = ((int)$key4->kd_max)+1;
	            $kd4 = sprintf("%03s", $tmp4);
	       }

	       $hasil5 = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product where id_product LIKE '%MC%' ");
	       foreach ($hasil5->result() as $key5) {
	                     $tmp5 = ((int)$key5->kd_max)+1;
	            $kd5 = sprintf("%03s", $tmp5);
	       }
	//===========================================================================//
	       $string = explode('-', $result1);
	       $pecah1 = $string[0];
	       $pecah2 = $string[1];
	       if ($trigger == "diesel" && $pecah1 =="DS") {
	                     return "DS-".$kd3;
	       }elseif ($trigger == "diesel" && $pecah1 != "DS") {
	                     return "DS-".$kd3;
	       }elseif($trigger == "marine" && $pecah1 =="SM") {
	                     return "SM-".$kd4;
	       }elseif ($trigger == "marine" && $pecah1 != "SM") {
	                     return "SM-".$kd4;
	       }elseif($trigger == "machine" && $pecah1 =="MC") {
	                     return "MC-".$kd5;
	       }elseif ($trigger == "machine" && $pecah1 != "MC") {
	                     return "MC-".$kd5;
	       }
       }else{

	       if ($trigger == 'diesel') {
	            $q = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product");
	            
	            if($q->num_rows()>0)
	            {
	                foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd = sprintf("%03s", $tmp);
	                }
	            }
	            else
	            {
	                $kd = "001";
	            }
	            return "DS-".$kd;
	       }elseif ($trigger == 'marine' ) {
	            $q = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product");
	            $kd = "";
	            if($q->num_rows()>0)
	            {
	                foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd = sprintf("%03s", $tmp);
	                }
	            }
	            else
	            {
	                $kd = "001";
	            }
	            return "SM-".$kd;
	       }elseif ($trigger == 'machine' ) {
	            $q = $this->db->query("select MAX(RIGHT(id_product,3)) as kd_max from product");
	            $kd = "";
	            if($q->num_rows()>0)
	            {
	                foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd = sprintf("%03s", $tmp);
	                }
	            }
	            else
	            {
	                $kd = "001";
	            }
	            return "MC-".$kd;
	       		}
	    }

    }
//=========================Panel Get Kode Produk =====================================================//
   function getkodeprodukKategori($trigger)
    {
        if ($trigger == "diesel"){
           $hasil   =   $this->db->where('id',1)
                                 ->from('kategori_product')
                                 ->get();
            if($hasil->num_rows() > 0){
                $des = $hasil->result();
                return $des;
                }else{
                return array();
             }
        }elseif($trigger == "marine"){
        	$hasil   =   $this->db->where('id',2)
                                 ->from('kategori_product')
                                 ->get();
            if($hasil->num_rows() > 0){
                $des = $hasil->result();
                return $des;
                }else{
                return array();
             }
        }elseif($trigger == "machine"){
        	$hasil   =   $this->db->where('id',3)
                                 ->from('kategori_product')
                                 ->get();
            if($hasil->num_rows() > 0){
                $des = $hasil->result();
                return $des;
                }else{
                return array();
             }
        }
    }
//=========================Panel Get Kode Produk =====================================================//
//=========================Panel Get Data Image ID=====================================================//
    private function getdataImageID($id)
    {
    		$hasil = $this->db->select('*')
    						  ->where('id_product', $id)
    						  ->from('product')
    						  ->limit(1)
    						  ->get();
    		foreach ($hasil->result() as $key ) {
    			$images = $key->images;
    		}
    		return $images;    	
    }
//=================Modul Get Delete From User =========================================================//
	function delete_data($trigger,$id)
	{
		if ($trigger == 'product_diesel_d'){
		   $link = 'Admin/diesel_product';
		}elseif($trigger == 'product_marine_d'){
			$link = 'Admin/marine_product';
		}elseif($trigger == 'product_machine_d'){
			$link = 'Admin/machine_product';
		}

			$this->_deleteImage($id);
			$this->db->where('id_product',$id)
				 	 ->delete('product');
			redirect($link,'refresh');
	}


	function getKodeKarir()
	{
		$q = $this->db->query("select MAX(RIGHT(id_karir,3)) as kd_max from karir");
	    $kd = "";
	    if ($q->num_rows() > 0) {
	    	foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd  = sprintf("%03s", $tmp);
	                }
	    }else{
	    	$kd = "001";
	    }
	    
	    return "CRR-".$kd;
	}

	function getKodeEvent()
	{
		$q = $this->db->query("select MAX(RIGHT(id_event,3)) as kd_max from event");
	    $kd = "";
	    if ($q->num_rows() > 0) {
	    	foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd  = sprintf("%03s", $tmp);
	                }
	    }else{
	    	$kd = "001";
	    }
	    
	    return "EVT-".$kd;
	}

	function deleteKarir($id)
	{
		$this->db->where('id_karir',$id)
				 ->delete('karir');
		redirect('Admin/career','refresh');
	}

	function deleteEvent($id)
	{
		$hasil = $this->db->select('*')
    						  ->where('id_event', $id)
    						  ->from('event')
    						  ->limit(1)
    						  ->get();
    	foreach ($hasil->result() as $key ) {
    			$images = $key->images;
    	}

    	if ($images  != "default.jpg") {
    		$this->db->where('id_event',$id)
				    ->delete('event');
           $filename = explode(".", $images)[0];
	       return array_map('unlink', glob(FCPATH."upload/event/$filename.*"));
	     }
	}

	private function uploadImageEvent()
	{
		$dateString 					= date('Y-m-d');
		$kode                           = $this->input->post('kd_event');
		$name 							= 'event_'.$kode.'_';
		$folder 						= './upload/event';
		$myDate 						= new DateTime($dateString);
		$formattedDate 					= $myDate->format('Y m d');
	    $config['upload_path']          = $folder;
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']			= $name.$formattedDate;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('images')) {
	        return $this->upload->data('file_name');   
	    }
	    print_r($this->upload->display_errors());
	    return "default.jpg";
	}

	function getKodeUser()
	{
		$q = $this->db->query("select MAX(RIGHT(id_user,3)) as kd_max from user");
	    $kd = "";
	    if ($q->num_rows() > 0) {
	    	foreach($q->result() as $k)
	                {
	                    $tmp = ((int)$k->kd_max)+1;
	                    $kd  = sprintf("%03s", $tmp);
	                }
	    }else{
	    	$kd = "001";
	    }
	    
	    return "USR-".$kd;
	}

	function deleteUser($id)
	{
		$this->db->where('id_user',$id)
				 ->delete('user');
		redirect('Admin/manage_user','refresh');
	}

	function update_messages($trigger,$id)
	{
		if($trigger == "messages") {
			$sql="UPDATE messages SET status = 1 WHERE id = ? ";
			$query=$this->db->query($sql, array($id));
			redirect('Admin/messages');
		}
	}



}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */