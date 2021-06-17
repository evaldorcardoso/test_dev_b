<?php
if((isset($_GET['texto']))and(isset($_GET['busca']))){
    $textoPrincipal=$_GET['texto'];
    $busca=$_GET['busca'];
    //echo strlen($textoPrincipal);
    $resultado='';
    for ($j=0; $j < strlen($textoPrincipal); $j++) { 
        if($busca[0]==$textoPrincipal[$j]){
            if(strlen($textoPrincipal)>=($j+strlen($busca))){
                for ($k=0; $k <strlen($busca); $k++) { 
                    $resultado[$k]=$textoPrincipal[$j+$k];
                }
                if($resultado==$busca){
                    break;
                }
            }
        }
    }
    echo 'Texto informado: "'.$textoPrincipal.'"<br>';
    if($resultado==$busca){
        echo 'Foi encontrada a palavra "'.$resultado.'" dentro do texto!';
    }else{
        echo 'Não foi encontrada a palavra "'.$busca.'"';
    }
}
?>
<hr><br>
<form action="exerc5.php" method="get">
<label for="">Informe o texto Principal:</label>
<input type="text" name="texto" id="texto"><br>
<label for="">Informe a busca:</label>
<input type="text" name="busca" id="busca"><br>
<button type="submit">Buscar</button>
</form>