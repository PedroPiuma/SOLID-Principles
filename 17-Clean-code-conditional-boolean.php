<?php

//Ruim
if (in_array(self::GRUPO_ADMINISTRADOR, $gruposAcesso)) {
    return true;
}

return false;

//Bom
return in_array(self::GRUPO_ADMINISTRADOR, $gruposAcesso));