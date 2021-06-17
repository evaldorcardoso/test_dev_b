<?php
if(isset($_GET['r1a'])){
    $ret1=array($_GET['r1a'],$_GET['r1l']);
    $ret2=array($_GET['r2a'],$_GET['r2l']);
    $sobrep=array(0,0);

    for ($i=0; $i <2 ; $i++) { 
        if(($ret1[$i]>0)and($ret2[$i]>0)){
            $sobrep[$i]=$ret1[$i];
            if($ret2[$i]<$ret1[$i])
                $sobrep[$i]=$ret2[$i];
        }
        if(($ret1[$i]<0)and($ret2[$i]<0)){
            $sobrep[$i]=$ret1[$i];
            if($ret2[$i]>$ret1[$i])
                $sobrep[$i]=$ret2[$i];
        }
    }
    echo 'Valores informados:<br>Retângulo 1 (AxL):'.$_GET['r1a'].'x'.$_GET['r1l'];
    echo '<br>Retângulo 2 (AxL):'.$_GET['r2a'].'x'.$_GET['r2l'];
    echo '<br>A área calculada do retângulo sobreposto é de '.$sobrep[0]*$sobrep[1].'!';
}

?>

<hr><br>
<form action="exerc6.php" method="get">
    <label for="">Retângulo 1 (AxL):</label>
    <input type="text" name="r1a" id="r1a">
    <input type="text" name="r1l" id="r1l"><br>
    <label for="">Retângulo 2 (AxL):</label>
    <input type="text" name="r2a" id="r2a">
    <input type="text" name="r2l" id="r2l"><br>
    <button type="submit">Enviar</button>
</form>