
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro_model extends CI_model{


	public function salvar ($registro){
	
		$array = array (
			'nome' => $registro['nome'],
			'senha' => $registro['senha'],
			

		);
			$this->db->insert('cadastro',$array);

	}
	//esse limit 1 ele pega o primeiro resultado, mesmo que tiver mais de um cadastro com o mesmo usuario e senha, pois vc só quer q ele ache.
	public function validar($nome,$senha){
		return $this->db->query("SELECT * FROM cadastro WHERE nome = '{$nome}' AND senha = '{$senha}' LIMIT 1")->
		result_array();

	}

		
}