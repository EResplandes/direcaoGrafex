<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Lista;

class HomeController extends Controller {

    public function index() {

        $dados = Lista::select()->execute();

        $this->render('home', ['dados' => $dados]);

    }

    public function cadastro() {
        $this->render('cadastro');
    }

    public function registrar() {

        $nome_guerra = filter_input(INPUT_POST, 'nome_guerra');
        $assunto = filter_input(INPUT_POST, 'assunto');
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');

        // $existingRecord = Lista::select()->where('nome_guerra', $nome_guerra)->where('assunto', $assunto)->first();


        if ($nome_guerra == '' || $assunto == ''){
            $this->render('cadastro', ['mensagem' => 'O campo nome e assunto são obrigatórios!']);
        // } elseif ($existingRecord){
        //     $this->render('cadastro');
        } 
        
        else {
            
            Lista::insert([
                'nome_guerra' => $nome_guerra,
                'assunto' => $assunto,
                'status' => 'Aguardando',
                'data_abertura' => $data
            ])->execute();
            
            $dados = Lista::select()->execute();

            $this->render('cadastro', ['mensagem' => 'Cadastrado com sucesso!', 'dados' => $dados]);

        }
    }

    public function finalizar(){

        $id = filter_input(INPUT_POST, 'id');
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');


        Lista::update()->set('status', 'Finalizado')->where('id', $id)->execute();

        $dados = Lista::select()->execute();


        $this->render('home', ['mensagem' => 'Cadastrado com sucesso!', 'dados' => $dados]);
        

    }

    public function painel(){

        $dados = Lista::select()->execute();

        $this->render('painel', ['dados' => $dados]);

    }

    public function despachar(){

        $id = filter_input(INPUT_POST, 'id');

        Lista::update()->set('status', 'Despachando')->where('id', $id)->execute();

        $dados = Lista::select()->execute();

        $this->render('home', ['mensagem' => 'Cadastrado com sucesso!', 'dados' => $dados]);



    }

}