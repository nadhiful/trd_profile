<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_admin');
	}

//==================================Modul Validasi Input ========================//
	function validation($trigger)
	{
		if ($trigger == "visi") {
			$config = array(
                array(
                        'field' => 'judul',
                        'label' => 'Judul',
                        'rules' => 'required|trim',
                        'errors' => array( 'required' => 'Judul harus diisi',),
                ),
                array(
                        'field' => 'isi',
                        'label' => 'Isi',
                        'rules' => 'required|trim',
                        'errors' => array( 'required' => 'Isi harus diisi',)
                ),
             );
	   	}
       $this->form_validation->set_rules($config);
        
        if ($this->form_validation->run() == FALSE)
        {
            return false;
        }else{
            return true;
        }
	}
//==================================Modul Profile ========================//
    function update_vision()
    {
      $this->Model_admin->update_data("visi");  
    }

    function update_mission()
    {
      $this->Model_admin->update_data("misi");  
    }

    function add_profile()
    {
        $this->Model_admin->update_data("profile_a");
    }

    function update_profile()
    {
        $this->Model_admin->update_data("profile_u");
    }
//==================================Modul Unit ========================//
    function add_diesel_profile()
    {
        $this->Model_admin->update_data("diesel_a");

    }
       function update_diesel_profile()
    {
        $this->Model_admin->update_data("diesel_u");

    }
        function add_marine_profile()
    {
        $this->Model_admin->update_data("marine_a");

    }
       function update_marine_profile()
    {
        $this->Model_admin->update_data("marine_u");

    }
        function add_machine_profile()
    {
        $this->Model_admin->update_data("machine_a");

    }
       function update_machine_profile()
    {
        $this->Model_admin->update_data("machine_u");

    } function add_product_diesel()

    {
        $this->Model_admin->insert_data("product_diesel_a");
    }
      function delete_product_diesel($id)
    {
        $this->Model_admin->delete_data("product_diesel_d",$id);

    } function add_product_marine()

    {
        $this->Model_admin->insert_data("product_marine_a");

    } function delete_product_marine($id)

    {
        $this->Model_admin->delete_data("product_marine_d",$id);

    }function add_product_machine()

    {
        $this->Model_admin->insert_data("product_machine_a");

    } function delete_product_machine($id)

    {
        $this->Model_admin->delete_data("product_machine_d",$id);
    }

    function add_career()

    {
        $this->Model_admin->insert_data("product_karir_a");

    }

    function update_career()
    {
        $this->Model_admin->update_data("karir_u");

    } 
    function delete_career($id)

    {
        $this->Model_admin->deleteKarir($id);
    }

    function add_event()
    {
        $this->Model_admin->insert_data("product_event_a");
    }

    function delete_event($id)
    {
        $this->Model_admin->deleteEvent($id);
    }

    function update_event()
    {
        $this->Model_admin->update_data("event_u");
    }

    function add_user()
    {
        $this->Model_admin->insert_data("product_user_a");
    }

    function update_user()
    {
        $this->Model_admin->update_data("user_u");
    }

    function delete_user($id)
    {
        $this->Model_admin->deleteUser($id);
    }

}

/* End of file Data_control */
/* Location: ./application/controllers/Data_control */