<?php

require 'vendor/autoload.php';
use App\Src\Pessoa;
use App\Src\Aluno;
use App\Src\IHumano;
use App\Src\ITerraqueo;

$alunos = new Aluno();
$alunos->logar();
$alunos->respira();