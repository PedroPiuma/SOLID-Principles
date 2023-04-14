<?php
// Falta de coesão — uma classe não deve assumir responsabilidades que não são suas;
// Alto acoplamento — Mais responsabilidades geram um maior nível de dependências, deixando o sistema engessado e frágil para alterações;
// Dificuldades na implementação de testes automatizados — É difícil de “mockar” esse tipo de classe;
// Dificuldades para reaproveitar o código;
class Order
{
    public function calculateTotalSum()
    {/*...*/
    }
    public function getItems()
    {/*...*/
    }
    public function getItemCount()
    {/*...*/
    }
    public function addItem($item)
    {/*...*/
    }
    public function deleteItem($item)
    {/*...*/
    }

    public function printOrder()
    {/*...*/
    }
    public function showOrder()
    {/*...*/
    }

    public function load()
    {/*...*/
    }
    public function save()
    {/*...*/
    }
    public function update()
    {/*...*/
    }
    public function delete()
    {/*...*/
    }
}

// Reference: https://www.apphp.com/tutorials/index.php?page=solid-principles-in-php-examples