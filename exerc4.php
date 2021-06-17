<?php
if(isset($_GET['v1'])){
    $medidas=array($_GET['v1'],$_GET['v2'],$_GET['v3'],$_GET['v4'],$_GET['v5'],$_GET['v6']);
    $contCombinacoes=0;
    $combinacoes='';
    for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 6; $j++) { 
            for ($k=0; $k < 6; $k++) { 
                $combinacoes.=('<p>'.$medidas[$i].','.$medidas[$j].','.$medidas[$k]);   
                $contCombinacoes++;
            }        
        }
    }
    echo "Foram formadas $contCombinacoes combinações com os dados informados, seguem as combinações:";
    echo $combinacoes;
}

?>
<hr><br>
<form action="exerc4.php" method="get">
    <label for="">Valor1:</label>
    <input type="text" name="v1" id="v1"><br>
    <label for="">Valor2:</label>
    <input type="text" name="v2" id="v2"><br>
    <label for="">Valor3:</label>
    <input type="text" name="v3" id="v3"><br>
    <label for="">Valor4:</label>
    <input type="text" name="v4" id="v4"><br>
    <label for="">Valor5:</label>
    <input type="text" name="v5" id="v5"><br>
    <label for="">Valor6:</label>
    <input type="text" name="v6" id="v6"><br><br>
    <button type="submit">Enviar</button>
</form>


