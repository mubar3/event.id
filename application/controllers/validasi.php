<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller {

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

   public function cekemail(){
   $email = $this->input->post('email1');

   $query = $this->db->get_where('user',
              array(
              'email' => $email
          ));

          $row = $query->result();
          $num_rows = $query->num_rows();

   if ($num_rows == 1) {echo '<span style="color:red;">Email sudah dipakai</span>';
			} else {
				echo '<span style="color:green;">Email belum dipakai</span>';
			}}


}
