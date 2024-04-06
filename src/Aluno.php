<?php
namespace App\Src;
class Aluno extends Pessoa implements IHumano, ITerraqueo{

    public function respira(){
        echo "o homem respira";
    }

    public function fala(){
        echo "conversa na aula";
    }

    public function logar(){
        echo "método logar implementado";
    }

    public function cadastrar(){
        echo "método cadastrar implementado";
    }
}