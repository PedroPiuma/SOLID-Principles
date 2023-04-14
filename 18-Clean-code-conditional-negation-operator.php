<?php

//Ruim
function shouldNotProccess()
{ //Não devo processar
    // ...
}

if (!shouldNotProccess()) { // Devo processar?
    // …
}


//Bom
function shouldProccess()
{ // Devo processar
    // ...
}

if (!shouldProccess()) { //Não devo processar?
    // …
}
