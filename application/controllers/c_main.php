<?php
	
	class c_main extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_administrasi_fitness','',TRUE);
			$this->load->library('template_library');
			$this->load->helper(array('form','url','html'));
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('pagination');
                          //load mPDF library
                        $this->load->library('m_pdf');
		}
		
		
		function display_laporan()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$this->load->view('display_laporan.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
		
		
		function display_member()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_list_data();
			$config['base_url']=base_url()."index.php/c_main/display_member";
			$config['total_rows']=$this->m_administrasi_fitness->record_count();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_countries($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_member.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_laporan_member()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_list_data();
			$config['base_url']=base_url()."index.php/c_main/display_laporan_member";
			$config['total_rows']=$this->m_administrasi_fitness->record_count();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_countries($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_laporan_member.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_laporan_transaksi()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_transaksi();
			$config['base_url']=base_url()."index.php/c_main/display_laporan_transaksi";
			$config['total_rows']=$this->m_administrasi_fitness->record_transaksi();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_laporan_transaksi.php',$data);
                        
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_laporan_trainer()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_list_data();
			$config['base_url']=base_url()."index.php/c_main/display_laporan_trainer";
			$config['total_rows']=$this->m_administrasi_fitness->record_count();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_countries($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_laporan_trainer.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_laporan_kehadiran()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_kehadiran();
			$config['base_url']=base_url()."index.php/c_main/display_laporan_kehadiran";
			$config['total_rows']=$this->m_administrasi_fitness->record_kehadiran();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                         $data["results"] = $this->m_administrasi_fitness->fetch_kehadiran($config["per_page"], $page);
                         $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_laporan_kehadiran.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_pembayaran_member()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_list_data();
			$config['base_url']=base_url()."index.php/c_main/display_pembayaran_member";
			$config['total_rows']=$this->m_administrasi_fitness->record_count();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_countries($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_pembayaran_member.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                
                function display_jadwal_latihan()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_latihan();
			$config['base_url']=base_url()."index.php/c_main/display_jadwal_latihan";
			$config['total_rows']=$this->m_administrasi_fitness->record_jadwal_latihan();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_jadwal_latihan($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_jadwal_latihan.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_alat_latihan()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_alat_latihan();
			$config['base_url']=base_url()."index.php/c_main/display_alat_latihan";
			$config['total_rows']=$this->m_administrasi_fitness->record_alat_latihan();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_alat_latihan($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_alat_latihan.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_transaksi()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_transaksi();
			$config['base_url']=base_url()."index.php/c_main/display_transaksi";
			$config['total_rows']=$this->m_administrasi_fitness->record_transaksi();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_transaksi.php',$data);
                        
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_jurnal_umum()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_akun();
			$config['base_url']=base_url()."index.php/c_main/display_jurnal_umum";
			$config['total_rows']=$this->m_administrasi_fitness->record_akuntansi();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_akuntansi($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_jurnal_umum.php',$data);
                        
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function display_pilih_akun()
                {
                    $this->load->view('display_pilih_akun.php');
                }
                
                function display_pilih_bulan_profit()
                {
                    $this->load->view('display_pilih_bulan_profit.php');
                }
                
                function display_buku_besar()
		{	
		if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
			$data["tipe_akun"]=$this->input->post('tipe_akun');
			$data['list_data']=$this->m_administrasi_fitness->get_data_akun();
			$config['base_url']=base_url()."index.php/c_main/display_jurnal_umum";
			$config['total_rows']=$this->m_administrasi_fitness->record_akuntansi();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_akuntansi($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_jurnal_umum.php',$data);
                        
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
                
                function convert_pdf()
                {
                $session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_latihan();
			$config['base_url']=base_url()."index.php/c_main/display_jadwal_latihan";
			$config['total_rows']=$this->m_administrasi_fitness->record_jadwal_latihan();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_jadwal_latihan($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();	  
                    
		//load the view and saved it into $html variable
		$html=$this->load->view('example04', $data, true);

         //this the the PDF filename that user will get to download
		$pdfFilePath = "output_pdf_name.pdf";

        //load mPDF library
		$this->load->library('m_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D");	
                }
                
                
		
		function display_trainer()
		{	
		if($this->session->userdata('logged_in'))
		   {
		    $session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$data['list_data']=$this->m_administrasi_fitness->get_data_trainer();
			$this->load->view('display_trainer.php',$data);
			}
		  else
			{
				$this->load->view('page_login.php');
			}
		}
		
		function display_kehadiran()
		{	
		 if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			
					
			$data['list_data']=$this->m_administrasi_fitness->get_data_kehadiran();
			$config['base_url']=base_url()."index.php/c_main/display_kehadiran";
			$config['total_rows']=$this->m_administrasi_fitness->record_kehadiran();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                         $data["results"] = $this->m_administrasi_fitness->fetch_kehadiran($config["per_page"], $page);
                         $data["links"] = $this->pagination->create_links();		
			$this->load->view('display_kehadiran.php',$data);
		   }
			else
			{
				$this->load->view('page_login.php');
			}
		}
//===========================================================================================================================================
		
		function tambah()
		{	
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tanggalpendaftaran', 'Tanggal Pendaftaran', 'required');
			$this->form_validation->set_rules('programlatihan', 'Program Latihan', 'required');
                        

			
			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('insert_member');
			}
			
			else
			{
			
			
			if($this->input->post('submit'))
			{
				
				$this->m_administrasi_fitness->insertdata();
                                echo "<script type=\"text/javascript\">alert('Data telah berhasil diinput'); history.go(-1);</script>";
				//redirect ('c_main/display_member');
			}
			
			$this->load->view('display_member.php');
			
			}
		}
		
		function tambah_trainer()
		{	
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
			$this->form_validation->set_rules('biayalatihan', 'Biaya Latihan', 'required|numeric');
			$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');

			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('insert_trainer');
			}
		
		else
		{
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_trainer();
                                echo "<script type=\"text/javascript\">alert('Data telah berhasil ditambahkan'); history.go(-1);</script>";
				//redirect ('c_main/display_trainer');
			}
			
			$this->load->view('display_trainer.php');
		
		}
		}
		
                function tambah_alat_latihan()
		{	
			$this->form_validation->set_rules('nama', 'Nama_Alat', 'required');
			$this->form_validation->set_rules('tahun_alat', 'Tahun_Alat', 'required|numeric');
                        $this->form_validation->set_rules('status', 'Status', 'required');

			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('insert_alat_latihan');
			}
		
		else
		{
		
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_alatlatihan();
                                $this->session->set_flashdata('something', 'Alat Baru Berhasil Ditambahkan Ke Database');
                                echo "<script type=\"text/javascript\">alert('Alat Baru Berhasil Ditambahkan Ke Database'); location.href='display_alat_latihan';</script>";

				//redirect ('c_main/display_alat_latihan');
			}
			
			$this->load->view('insert_alat_latihan.php');
		}
		}
                
                
                function tambah_jadwal_latihan()
		{	
			
			if($this->input->post('submit'))
			{
                                if($this->input->post(''))
                            
				$this->m_administrasi_fitness->insertdata_jadwallatihan();
                                $this->session->set_flashdata('something', 'Jadwal Baru Berhasil Ditambahkan Ke Database');
                                echo "<script type=\"text/javascript\">alert('Jadwal Baru Berhasil Ditambahkan Ke Database'); location.href='display_alat_latihan';</script>";

				//redirect ('c_main/display_alat_latihan');
			}
			
			$this->load->view('insert_jadwal_latihan.php');
		
		}
                
                
                function tambah_transaksi()
          {       
 		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
               
			
			
			$this->form_validation->set_rules('nama', 'Nama_Alat', 'required');
			$this->form_validation->set_rules('tanggal_transaksi', 'Tanggal Transaksi', 'required|date');
                        $this->form_validation->set_rules('tipe_transaksi', 'Tipe Transaksi', 'required');
                        $this->form_validation->set_rules('jumlah_transaksi', 'Jumlah Transaksi', 'required');
                        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('insert_transaksi',$data);
			}
		
                        else
                    {
		
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_transaksi();
                                $this->session->set_flashdata('something', 'Alat Baru Berhasil Ditambahkan Ke Database');

				redirect ('c_main/display_transaksi');
			}
			
			$this->load->view('insert_alat_latihan.php');
                    }
		
               
            
            
          }   
                
		function tambah_kehadiran()
		{	
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('no_loker', 'No Loker', 'required|numeric');

			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('insert_kehadiran');
			}
		
		else
		{
		
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->insertdata_kehadiran();
				redirect ('c_main/display_kehadiran');
			}
			
			$this->load->view('insert_kehadiran.php');
		}
		}
		
		function view_detail()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data($vnim);
			$this->load->view('display_detail_member.php',$data);
		}
		
		function update1()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data($vnim);
			$this->load->view('update_member.php',$data);
			
		}
		
		function update2()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata();
				redirect ('c_main/display_member');
			}
			
			$this->load->view('insert_member.php');
		}
                
                  function sort_kehadiran_by_date()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vdate=$this->input->post('sort_date');
			$data['list_data'] = $this->m_administrasi_fitness->get_kehadiran_by_date($vdate);
                        $config['base_url']=base_url()."index.php/c_main/sort_kehadiran_by_date";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vdate);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_laporan_kehadiran_by_date($config["per_page"],$page,$vdate);
                        $data['date']=$this->input->post('sort_date');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_kehadiran_by_date.php',$data);
			
		}
                
                function sort_kehadiran_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_kehadiran_by_month($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_kehadiran_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_laporan_kehadiran_by_month($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_kehadiran_by_month.php',$data);
			
		}
                
                function sort_transaksi_by_date()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vdate=$this->input->post('sort_date');
			$data['list_data'] = $this->m_administrasi_fitness->get_transaksi_by_date($vdate);
                        $config['base_url']=base_url()."index.php/c_main/sort_transaksi_by_date";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vdate);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi_by_date($config["per_page"],$page,$vdate);
                        $data['date']=$this->input->post('sort_date');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_transaksi_by_date.php',$data);
			
		}
                
                function sort_transaksi_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_transaksi_by_month($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_transaksi_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi_by_month($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_transaksi_by_month.php',$data);
			
		}
                
                function sort_jurnal_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_jurnal_by_month($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_jurnal_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_akuntansi($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_jurnal_by_month($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_jurnal_by_month.php',$data);
			
		}
                
                function sort_pembayaran_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_member_by_month_paid($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_pembayaran_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_member_by_month_paid($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_month_pembayaran.php',$data);
			
		}
                
                function sort_akun_buku_besar_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
                        $vtipe_akun=$this->input->post('tipe_akun');
			$data['list_data'] = $this->m_administrasi_fitness->get_akun_by_month($vbulan,$vyear,$vtipe_akun);
                        $config['base_url']=base_url()."index.php/c_main/sort_akun_buku_besar_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_akuntansi($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_akun_by_month($config["per_page"],$page,$vbulan,$vyear,$vtipe_akun);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data['tipe_akun']=$this->input->post('tipe_akun');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_akun_by_month.php',$data);
			
		}
                
                function sort_laporan_transaksi_by_date()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vdate=$this->input->post('sort_date');
			$data['list_data'] = $this->m_administrasi_fitness->get_transaksi_by_date($vdate);
                        $config['base_url']=base_url()."index.php/c_main/sort_laporan_transaksi_by_date";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vdate);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi_by_date($config["per_page"],$page,$vdate);
                        $data['date']=$this->input->post('sort_date');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_transaksi_by_date.php',$data);
			
		}
                
                function sort_laporan_transaksi_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_transaksi_by_month($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_laporan_transaksi_by_month";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi_by_month($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_transaksi_by_month.php',$data);
			
		}
                
                function sort_member_by_month_paid()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
			$data['list_data'] = $this->m_administrasi_fitness->get_member_by_month_paid($vbulan,$vyear);
                        $config['base_url']=base_url()."index.php/c_main/sort_member_by_month_paid";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_member_by_month_paid($config["per_page"],$page,$vbulan,$vyear);
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_pembayaran_member.php',$data);
			
		}
                
                 function sort_profit_by_month()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vbulan=$this->input->post('sort_month');
                        $vyear=$this->input->post('sort_year');
                        $data['month']=$this->input->post('sort_month');
                        $data['year']=$this->input->post('sort_year');
                        $data['bulan']=$this->input->post('sort_month');
			$this->load->view('display_profit_by_month.php',$data);
			
		}
                
                function sort_member_by_age()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$batas_umur=$this->input->post('batas_umur');
                        $batas_umur2=$this->input->post('batas_umur2');
			$data['list_data'] = $this->m_administrasi_fitness->get_member_by_age($batas_umur,$batas_umur2);
                        $config['base_url']=base_url()."index.php/c_main/sort_member_by_age";
			$config['total_rows']=$this->m_administrasi_fitness->record_count($vbulan);
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_member_by_age($config["per_page"],$page,$batas_umur,$batas_umur2);
                        $data['batas_umur']=$this->input->post('batas_umur');
                        $data['batas_umur2']=$this->input->post('batas_umur2');
                        $data["links"] = $this->pagination->create_links();
			$this->load->view('display_laporan_umur_member.php',$data);
			
		}
                
                
                function update1_transaksi()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data_transaksi($vnim);
			$this->load->view('update_transaksi.php',$data);
			
		}
                
                function update2_transaksi()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata_transaksi();
				redirect ('c_main/display_transaksi');
			}
			
			$this->load->view('insert_transaksi.php');
		}
                
                
                function update1_pembayaran()
		{	
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data($vnim);
			$this->load->view('update_pembayaranmember.php',$data);
			
		}
		
		function update2_pembayaran()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata_pembayaran();
				redirect ('c_main/display_pembayaran_member');
			}
			
			$this->load->view('insert_member.php');
		}
                
		
		function update1_trainer()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data_trainer($vnim);
			$this->load->view('update_trainer.php',$data);
			
		}
		
		function update2_trainer()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata_trainer();
				redirect ('c_main/display_trainer');
			}
			
			$this->load->view('insert_trainer.php');
		}
                
                function update1_jadwal()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data_jadwal_latihan($vnim);
			$this->load->view('update_jadwal.php',$data);
			
		}
		
		function update2_jadwal()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata_jadwallatihan();
				redirect ('c_main/display_jadwal_latihan');
			}
			
			$this->load->view('insert_jadwal_latihan.php');
		}
                
                function update1_alat_latihan()
		{	
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->get_detail_data_alat_latihan($vnim);
			$this->load->view('update_alatlatihan.php',$data);
			
		}
		
		function update2_alat_latihan()
		{	
			
			if($this->input->post('submit'))
			{
				$this->m_administrasi_fitness->updatedata_alatlatihan();
				redirect ('c_main/display_alat_latihan');
			}
			
			$this->load->view('insert_alat_latihan.php');
		}
                
                    function update_kehadiran()
		{	

                                $vnim = $this->uri->segment(3);
				$this->m_administrasi_fitness->updatedata_kehadiran($vnim);
				redirect ('c_main/display_kehadiran');

			
		}
		
		function search()
		{
			$data['search'] = $this->m_administrasi_fitness->keyword();
			$this->load->view('display_search', $data);
		}
                
                function search_kehadiran_by_name()
		{
			$data['results'] = $this->m_administrasi_fitness->keyword_kehadiran_by_nama();
			$this->load->view('display_laporan_kehadiran_by_nama', $data);
		}
                
                function search_umur_member()
		{
			$data['search'] = $this->m_administrasi_fitness->keyword_umur_member();
			$this->load->view('display_laporan_umur_member', $data);
		}
                
                function search_by_trainer()
		{
			$data['search'] = $this->m_administrasi_fitness->keyword_trainer();
			$this->load->view('display_search_laporan_trainer', $data);
		}
                
                function search_pembayaran()
		{
			$data['search'] = $this->m_administrasi_fitness->keyword_pembayaran();
			$this->load->view('display_search_pembayaran', $data);
		}
                
                 function search_transaksi()
		{
			$data['results'] = $this->m_administrasi_fitness->keyword_transaksi();
			$this->load->view('display_search_transaksi', $data);
		}
                
                 function search_alat()
		{
			$data['results'] = $this->m_administrasi_fitness->keyword_alat();
			$this->load->view('display_search_alat', $data);
		}
                
                 function search_jadwal()
		{
			$data['results'] = $this->m_administrasi_fitness->keyword_jadwal();
			$this->load->view('display_search_jadwal', $data);
		}
		
		function hapus()
		{	
			
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->hapus_data($vnim);
			redirect ('c_main/display_member');
			$this->load->view('display_member.php',$data);
			
		}
		
		function hapus_trainer()
		{	
			
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->hapus_data_trainer($vnim);
			redirect ('c_main/display_trainer');
			$this->load->view('display_trainer.php',$data);
			
		}
		
		function export(){
			include_once ( APPPATH."libraries/write-excel/Worksheet.php");
			include_once ( APPPATH."libraries/write-excel/Workbook.php");
		  
			header("Content-type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename=filename.xls" );
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
			header("Pragma: public");
	
			$workbook = new Workbook("");
			$worksheet1 =& $workbook->add_worksheet('Sheet 1');
	
			$format =& $workbook->add_format();
			$format->set_bold();
	
			$worksheet1->set_row(0, 4);
			
			$worksheet1->set_column(0, 0, 30);
			$worksheet1->write_string(0, 0, 'ID Alat');
			$worksheet1->set_column(0, 1, 60);
			$worksheet1->write_string(0, 1, 'Nama Transaksi');
			$worksheet1->set_column(0, 2, 30);
			$worksheet1->write_string(0, 2, 'Tahun Transaksi');
			$worksheet1->set_column(0, 3, 30);
			$worksheet1->write_string(0, 3, 'Status');


			$pl=$this->m_administrasi_fitness->get_data_alat_latihan();
			$i_a = 1;
			foreach($pl->result() as $m){
				$worksheet1->write_string($i_a, 0, $i_a);
				$worksheet1->write_string($i_a, 1, $m->ID_Alat);
				$worksheet1->write_string($i_a, 2, $m->Nama_Alat);
				$worksheet1->write_string($i_a, 3, $m->Tahun_Produk);
				$worksheet1->write_string($i_a, 4, $m->Status);
			
			
			
				$i_a++;
			}
			$workbook->close();
			}
                
                function hapus_alat_latihan()
		{	
			
			$vnim = $this->uri->segment(3);
			$data['list_data'] = $this->m_administrasi_fitness->hapus_alat_latihan($vnim);
			redirect ('c_main/display_alat_latihan');
			$this->load->view('display_alat_latihan.php',$data);
			
		}
		
		function user_area()
		{
			if ($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$this->template_library->display('example04',$data);
			}
			
			else
			{
				$this->load->view('page_login.php');
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
                
                function helloexcel()
                {
                    
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Users list');
 
                        $data['list_data']=$this->m_administrasi_fitness->get_data_transaksi();
			$config['base_url']=base_url()."index.php/c_main/display_transaksi";
			$config['total_rows']=$this->m_administrasi_fitness->record_transaksi();
			$config['per_page']=10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
 
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["results"] = $this->m_administrasi_fitness->fetch_transaksi($config["per_page"], $page);
                        $data["links"] = $this->pagination->create_links();		
 
        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($data);
 
        $filename='just_some_random_name.xls'; //save our workbook as this file name
 
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); //no cache
                    
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
 
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
 
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
//- See more at: https://arjunphp.com/how-to-use-phpexcel-with-codeigniter/#sthash.Akh0qJH7.dpuf
                }
	}
	
?>