<?php
//interface é um contrado de implementação de metódos. 
interface Eletrodomestico{
    function ligar();
    function desligar();
}
class Liquidificador implements Eletrodomestico{
    
    function ligar(){
        return 'Ligando'; 
}

function desligar(){
    return 'Desligado';

}
function triturar(){
    return 'triturado';
}
}
class Televisao implements Eletrodomestico{
    function ligar(){
        return 'ligado';

    }

    function desligar(){
        return 'desligado';
    }

    function trocarCanal(){
        return 'trocando';

    }

   }




?>