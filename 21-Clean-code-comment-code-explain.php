<?php

/*Ruim*/
//Nome não pode ser vazio nem nulo
if (!is_empty($nome) && !is_null($nome)) {

}


/*Bom*/
function NomeNaoPodeSerVazioNemNulo($nome) {
    return !is_empty($nome) && !is_null($nome)
}

if (NomeNaoPodeSerVazioNemNulo($nome)) {

}