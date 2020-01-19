<?php

if(isset($_POST["btncalcular"])) {

     require_once 'moneda.php';
     
     $objmoneda = new Moneda();
    
     $valor = $_POST["txtvalorpesos"];
     $objmoneda->setValorpesos($valor);
      
   //echo "lo que hay en el atributo de valorPesos es : " . $objmoneda->getValorpesos();
    
    echo "la conversión de " . $valor . " es " . $objmoneda->calcularConversion();
    
} else {
    echo "Eres un hacker,he capturado tu ip";
}

?>