<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	

	public function index()
	{
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];

		/*aqui vc coloca os dados em um array */
		$dados = array('nome' => $nome,'senha'=> $senha );
		
		if($senha == "admin" ){

		$this->load->view('administrador',$dados);

		}else{
		$this->load->view('visitante',$dados);


		}
		
	}
	public function login(){
		//var_dump($_POST);
		$this->load->model("Cadastro_model");
		$result = $this->Cadastro_model->validar($_POST["nome"],md5($_POST["senha"]));
		if (empty($result)){
			//$this->load->view("menu");
			$this->load->view("login");
		}else {

			$this->load->view("login");
			echo "Bem vindo";	
		}
	}
	public function receber(){
		$nome = $_POST["nome"];
		$senha = $_POST["senha"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->salvar($_POST);
		$this->load->view('login');
		// $dados = array(
		// 	'nome' => $nome,
		// 	'email' =>  $email, 
		//);
	 	//$this->load->view('bemvindo'$dados);

		//}
	}
	

}