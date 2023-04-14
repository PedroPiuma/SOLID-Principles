<?php

const GRUPO_ADMINISTRADOR = 10;

private function deveExecutar()
{
    $gruposAcesso = explode(',',$_SESSION['GRUPOSACESSO']);

    if (in_array(self::GRUPO_ADMINISTRADOR, $gruposAcesso)) {
        return true;
    }

    return false;
}