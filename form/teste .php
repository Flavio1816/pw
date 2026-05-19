<?php
$usuario = [ 
];

$erros  = [];

foreach ($usuario as $campo => $valor) {
    if ($valor === '') {
        $erros[] = "O campo \"$valor\" não pode ficar vazio.";
        echo "$erros;";
    }    
       
}
