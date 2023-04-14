<?php

/********** Ruim **********/
$nomeUsuarios = [];

foreach ($usuarios as $usuario) {
    $nomeUsuarios[] = $usuario->nome;
}

return $nomeUsuarios;

/********** Bom **********/
$nomeUsuarios = array_map(function ($usuario) {
    return $usuario->nome;
}, $usuarios);

return $nomeUsuarios;



/********** Ruim **********/
$usuariosAtivos = [];

foreach ($usuarios as $usuario) {
    if ($usuario->status == 'A') {
        $usuariosAtivos[] = $usuario;
    }
}

return $usuariosAtivos;

/********** Bom **********/
$usuariosAtivos = array_filter($usuarios, function ($usuario) {
    return $usuario->status == 'A';
});

return $usuariosAtivos;
