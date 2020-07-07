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

	 public function Daftarevent()
 	{
							$id=$this->session->userdata['id'];
 											 $data = array(
 											'id_event'					=>$this->input->post('id_event'),
 											'id_user'			=>$id
 										);


 										$result=$this->db->insert('peserta', $data);
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
											'email'					=>$this->input->post('email'),
											'wa'						=>$this->input->post('WA')
										);


										$result=$this->db->insert('user', $data);

										redirect('welcome');
	}}

	public function Daftarkanevent()
	{
						 $config["upload_path"] = "gambar";
						 $config['allowed_types'] = 'img|gif|png|jpg'; //type yang dapat diakses bisa anda sesuaikan

						 //$config['max_width']            = 1024;
						 //$config['max_height']           = 768;
						 $config['max_size']             = 5500;

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
											'pamflet'				=>$foto['file']['file_name'],
											'deskripsi' 		=>$this->input->post('deskripsi'),
											'email'					=>$this->input->post('email'),
											'wa'						=>$this->input->post('WA'),
											'jenis'					=>$this->input->post('jenis'),
											'tanggal'					=>$this->input->post('tanggal'),
											'waktu'					=>$this->input->post('waktu'),
											'tempat'					=>$this->input->post('tempat'),
											'harga'					=>$this->input->post('harga'),
											'diskon'					=>$this->input->post('diskon')
										);


										$result=$this->db->insert('event', $data);

										redirect('welcome');
	}}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$query = $this->db->get_where('user',
               array(
               'email' => $email,
               'password' => $password
           ));

           $row = $query->result();

					 		if( ! empty($row)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
					 		foreach($row as $data){
								$id=$data->id_user;
							}}

           $num_rows = $query->num_rows();

		          if( $num_rows == 1 ){
		                  $session_data = array(
		                        'id'     =>     $id,
														'jenis'		=> 		"user"
		                   );
		                   $this->session->set_userdata($session_data);
		                       redirect('user');

		           }else{
		                  redirect('welcome');


			}
	}

}
