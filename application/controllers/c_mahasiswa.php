<?php
	
	class C_mahasiswa extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_administrasi_fitness','',TRUE);
			$this->load->library('template_library');
			$this->load->helper(array('form','url','html'));
			$this->load->library('session');
		}
		
		
		
		function display_member()
		{	$data['list_data']=$this->m_administrasi_fitness->get_list_data();
			$this->load->view('display_member.php',$data);
		}
		
		function display_trainer()
		{
			$data['list_data']=$this->m_administrasi_fitness->get_data_trainer();
			$this->load->view('display_trainer.php',$data);
		}
		
		function display_kehadiran()
		{
			$data['list_data']=$this->m_administrasi_fitness->get_data_kehadiran();
			$this->load->view('display_kehadiran.php',$data);
		}
//===========================================================================================================================================
		
		function tambah()
		{	
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata();
				redirect ('c_mahasiswa/display_member');
			}
			
			$this->load->view('insert_member.php');
		}
		
		function tambah_trainer()
		{	
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_trainer();
				redirect ('c_mahasiswa/display_trainer');
			}
			
			$this->load->view('insert_trainer.php');
		}
		
		function tambah_kehadiran()
		{	
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_kehadiran();
				redirect ('c_mahasiswa/display_kehadiran');
			}
			
			$this->load->view('insert_kehadiran.php');
		}
		
		function view_detail()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data($vnim);
			$this->load->view('v_mahasiswa_detail.php',$data);
		}
		
		function update1()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data($vnim);
			$this->load->view('v_mahasiswa_update.php',$data);
			
		}
		
		function update2()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_model_mahasiswa->updatedata();
				redirect ('c_mahasiswa/display');
			}
			
			$this->load->view('v_input.php');
		}
		
		function search()
		{
			$data['search'] = $this->m_administrasi_fitness->keyword();
			$this->load->view('v_search_mahasiswa', $data);
		}
		
		function hapus()
		{	
			
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->hapus_data($vnim);
			redirect ('c_mahasiswa/display_member');
			$this->load->view('display_member.php',$data);
			
		}
		
		function hapus_trainer()
		{	
			
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->hapus_data_trainer($vnim);
			redirect ('c_mahasiswa/display_trainer');
			$this->load->view('display_trainer.php',$data);
			
		}
		
		function user_area()
		{
			if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$this->template_library->display('example04',$data);
			}
		}
		
		function is_logged_in()
		{
			$is_logged_in = $this->session->userdata('logged_in');
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				echo "<script type=\"text/javascript\">alert('You don\'t have permission to access this page.'); location.href='../c_login';</script>";
			}		
		}
	}
	
?>