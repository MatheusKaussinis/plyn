<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_listas extends CI_Controller {

///lista usuarios
	public function lista_usuarios()
	{
		$query = $this->db->get('tb_usuario');

		if ($query->num_rows() >= 1){

			$data['dados']= $query->result();
			$this->load->view('v_list_plyn', $data);
		}else{
		//erro
			$this->load->view('v_list_plyn');
		}
	}

	public function deletar_user($user_id)
	{
		$this->db->delete('tb_usuario', array('cpf'=> $user_id));
		redirect(base_url()."index.php/v_list_plyn");
	}

	public function editar_user($user_id)
	{
	$query = $this->db->get_where('tb_usuario', array('cpf'=>$user_id));

	if ($query->num_rows() == 1){

			$data['editar']= $query->result();

			$this->load->view('v_edit_plyn',$data);
		}else{
		//erro
			$this->load->view('v_edit_plyn');
		}

	}
}
?>