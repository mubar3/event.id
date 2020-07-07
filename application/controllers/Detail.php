<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
	public function index()
	{
		$id=$this->input->post('id');
		$query = $this->db->get_where('event',
							 array(
							 'id' => $id
					 ));
		$data['detail']=$query->result();

		$this->db->select('*');
    $this->db->from('event');
    $this->db->join('diskon','diskon.id_diskon=event.diskon');
    $query=$this->db->get();
    $data['diskon']=$query->result();

		$this->load->view('depan/template/header');
		$this->load->view('depan/v_detail',$data);
		$this->load->view('depan/register');
		$this->load->view('depan/login');
		$this->load->view('depan/template/footer');
		$this->load->view('depan/javascript');
	}

}
