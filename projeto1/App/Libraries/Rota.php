<?php
class Rota {
    //atributos da classe
    private $controlador = 'Paginas',
        $metodo = 'index',
        $parametros = [];

    public function __construct()
    {
        //se a url existir jogar a função url na variavel $url
        $url=$this->url() ? $this->url() : [0];
        //checar se o controlador existe
        //ucwords - Converte para maiúsculo o primeiro caractere de cada palavra
        if(file_exists('../App/Controllers/'.ucwords($url[0]).'.php')):
            //se existir sta como controlador
            $this->controlador=ucwords($url[0]);
            //unset - Destrói a variavel especificada
            unset($url[0]);
        endif;
        //requere o controlador
        require_once '../App/Controllers/'. $this->controlador.'.php';
        //instacia o controlador
        $this->controlador = new $this->controlador;
        //checar se o método existe, segunda parte da url
        if(isset($url[1])):
            //method_exists - checar se o método da classe existe
            if(method_exists($this->controlador, $url[1])):
                $this->metodo = $url[1];
                unset($url[1]);
            endif;
        endif;
        //Se existir retorna um array com os valores se não retorna um array vazio
        //array_values - Retorna todos os valores de um array
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
        //var_dump($this);
    }
    //retorna a url em um array
    private function url(){
        //o filtro FILTER_SANITIZE_URL remove todos os carracteres ilegais de uma URL
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        //verrificar se a url existe
        if(isset($url)):
            //trim - Retira espaço no inicio e final de uma string
            //rtrim - Retira espaço em Branco (ou outros caracteres) do final da string
            $url=trim(rtrim($url,'/'));
            //explode - Devide uma string em strings, retorna um array
            $url=explode('/',$url);
            return $url;
        endif;
    }
}