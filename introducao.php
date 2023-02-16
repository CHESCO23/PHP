<?php
// $ serve para  criar uma variavel.

//modelo
class veiculo{
    //atributos
    private $marca;
    private $modelo;
    private $ano;
    private $placa;
    
   
    //metódos e funções
    function getMarca(){
        return $this->marca;
    }

    function setMarca($marca){
        $this->marca = $marca;
    }
    function passarmarcha(){
        return 'presionar com o pé, trocar a marcha com a mão.';

    }

   
}
   class car extends veiculo{
 
} 
   class Moto extends veiculo{
    function passarmarcha(){
        return'presionar com a mão, trocar de marcha com o pé.';
    
        
    }
    
}

   $c = new car(); 
   // echo serve para mostrar no navegador.
   
   //-> para chamar atributos e metodos.
   $c -> setMarca('honda');
   echo '<br>';
   echo $c -> getMarca();
   echo'<br>';
   echo $c -> passarmarcha();
   //<br> para pular linha.
    echo '<br>';

    $m = new Moto;
    $m -> setMarca('kawasaki');
   echo '<br>';
   echo $m -> getMarca();
   echo '<br>';
   echo $m -> passarmarcha();
   echo'<br>';

?>