<?php

private function deveExecutar()
{
    $gruposAcesso = explode(',',$_SESSION['GRUPOSACESSO']);

    if (in_array(10, $gruposAcesso)) {
        return true;
    }

    return false;
}