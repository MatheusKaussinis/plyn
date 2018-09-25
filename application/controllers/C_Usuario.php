<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_usuarios');
	}

	public function incluir_usuario2()
	{
		if($this->input->post())
		{
				$cpfv= $this->input->post('cpf');

				$query = $this->db->get_where('tb_usuario',
				array('cpf'=>$cpfv));
			//ALTERAR USUARIO
			if($query->num_rows() == 1){
				$dados=array(
				'nome'=>$this->input->post('nome'),
				'sobrenome'=>$this->input->post('sobrenome'),
				'nascimento'=>$this->input->post('nascimento'),
				'email'=>$this->input->post('email'),
				'cpf'=>$this->input->post('cpf'),
				'senha'=>$this->input->post('senha')
				);

				$query=$this->db->replace('tb_usuario',$dados);
				
				if(!$query)
				{
					$mensagem="Não alterado";
				}else{
					$mensagem="alterado";
				}

				
				$this->session->set_flashdata('mensagem',$mensagem);
				redirect(base_url()."index.php/list");
			//////////////////////////////////////////////////////////////////////////////
			}else{
				//CADASTRAR USUARIO
				$dados=array(
				'nome'=>$this->input->post('nome'),
				'sobrenome'=>$this->input->post('sobrenome'),
				'nascimento'=>$this->input->post('nascimento'),
				'email'=>$this->input->post('email'),
				'cpf'=>$this->input->post('cpf'),
				'senha'=>$this->input->post('senha'),
				);

				$query=$this->db->insert('tb_usuario',$dados);

				if(!$query)
				{
					$mensagem="Não cadastrado";
				}else{
					$mensagem="Cadastrado";
				}
				
				$this->session->set_flashdata('mensagem',$mensagem);
				redirect(base_url()."index.php/list");
			}
			///////////////////////////////////////////////////////////////////
		}
	}

	public function logar(){

		$email= $this->input->post('usuario');
		$pass = $this->input->post('senha');

		$query = $this->db->get_where('tb_usuario',
				array('email'=>$email, 'senha'=>$pass));

	
		if ($query->num_rows() == 1){
			foreach ($query->result() as $row){
					
				//$this->session->userdata('cpf')=$cpf;
			redirect(base_url()."index.php/list");
			}

		//REDIRECT
		}else{

		$query = $this->db->get_where('tb_usuario',
				array('email'=>$email, 'senha'=>$pass));
		
	
		if ($query->num_rows() == 1){
			foreach ($query->result() as $row){
			$this->session->id_adm=$row->id_adm;
			$this->session->adm=true;
			redirect(base_url()."index.php/list");
		}
		}else{
			$mensagem="Senha ou Email incorreto!";

			$this->session->set_flashdata('mensagem',$mensagem);
				redirect(base_url()."index.php/login");
		}
	}
}


	public function incluir_usuario()
	{
		if($this->input->post())
		{
			$dados=array(
				'nome'=>$this->input->post('nome'),
				'sobrenome'=>$this->input->post('sobrenome'),
				'nascimento'=>$this->input->post('nascimento'),
				'email'=>$this->input->post('email'),
				'cpf'=>$this->input->post('cpf'),
				'senha'=>$this->input->post('senha'),
			);

			$query=$this->db->insert('tb_usuario', $dados);

			if(!$query)
			{
				$mensagem="Não cadastrado";
			}else{
				$mensagem="Cadastrado";
			}
			
			$this->session->set_flashdata('mensagem',$mensagem);
			redirect(base_url()."index.php/add");
		}
	}

	
}
?>