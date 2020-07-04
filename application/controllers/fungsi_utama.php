<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fungsi_utama extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
 		 parent:: __construct();
 		 $this->load->library('upload');
 	 $this->load->helper('download');
         $this->load->helper('url', 'form');
 	 }

	public function Daftar()
	{
						 $config["upload_path"] = "gambar";
						 $config['allowed_types'] = 'img|gif|png|jpg'; //type yang dapat diakses bisa anda sesuaikan

						 //$config['max_width']            = 1024;
						 //$config['max_height']           = 768;
						 $config['max_size']             = 1250;

						 $this->upload->initialize($config);
					if ( ! $this->upload->do_upload('foto'))
						 {
										 $error = array('error' => $this->upload->display_errors());

										 alert("size Foto maksimal 1 mb");
						 }
					else
						 {
										 $foto = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

										 date_default_timezone_set('Asia/Jakarta');
										$tgl=date('y-m-d');
												 $data = array(
											'nama'					=>$this->input->post('nama'),
											'password'			=>$this->input->post('password'),
											'foto'					=>$foto['file']['file_name'],
											'nim' 					=>$this->input->post('NIM'),
											'email'					=>$this->input->post('email'),
											'wa'						=>$this->input->post('WA')
										);


										$result=$this->db->insert('user', $data);

										redirect('welcome');
	}}

	public function login()
	{
		$nim = $this->input->post('NIM');
		$password = $this->input->post('password');

		$query = $this->db->get_where('user',
               array(
               'nim' => $nim,
               'password' => $password
           ));

           $row = $query->result();
           $num_rows = $query->num_rows();

		          if( $num_rows == 1 ){
		                  $session_data = array(
		                        'nim'     =>     $nim,
														'jenis'		=> 		"user"
		                   );
		                   $this->session->set_userdata($session_data);
		                       redirect('welcome');

		           }else{
		                  redirect('detail');


			}
	}

}
