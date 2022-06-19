<?php
/*
 * Controlador base
 * Carrega os modelos e as views
 * */
class Controller
{
    //carrega os modelos
    public function model($model)
    {
        //requere o arquivo de modelo
        $arquivo = ('../App/Models/' .$model.'.php');
        if(file_exists($arquivo)):
            require_once $arquivo;
            //instacia o modelo
            return new $model;
        else:
            //a função die() termina a execução do script
            die('O arquivo de model não existe!');
        endif;
    }
    //carrega as views
    public function view($view, $dados = [])
    {
        $arquivo = ('../App/Views/'.$view.'.php');
        if (file_exists($arquivo)):
            //requere o arquivo de view
            require_once $arquivo;
        else:
            //a função die() termina a execução do script
            die('O arquivo de view não existe!');
        endif;
    }
}