<?php

class Paginas extends Controller {

    public function index(){
        $dados = [
            'tituloPagina' => 'Desafio DIO',
            'descricao' => 'Projeto Git/ GitHob e atualizações em repositórios'
        ];
        $this->view('Paginas/principal', $dados);
    }
    
    public function sobre(){
         $dados = [
            'tituloPagina' => 'Página Sobre nós',
            'descricao' => 'Curso de PHP7'
        ];
        $this->view('Paginas/sobre', $dados);
    }

}