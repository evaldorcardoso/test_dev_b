<?php
class Mapa{    
    private $matrizitens = array();
    private $letraInicial='';
    private $letraFinal;

    //busca uma a posição de uma determinada letra
    public function buscaPosicaoLetra($letra){
        foreach ($this->matrizitens as $k => $v) {
            if($v[0]==$letra){        
                return $k;
            }
        }
    }
    
    //adiciona um item no array
    public function adicionaItem($item){
        $this->matrizitens[count($this->matrizitens)] = $item;
    }

    //encontra um caminho para a letra final informada
    public function encontraCaminho($letraInicio,$letraFinal){            
        $posicaoInicial=$this->buscaPosicaoLetra($letraInicio);
        $posicaoFinal=$this->buscaPosicaoLetra($letraFinal);
        //tem ligação direta com o ponto final?
        if($this->matrizitens[$posicaoFinal][$posicaoInicial+1]==0){
            for ($i=1; $i < 8; $i++) { 
                if($this->matrizitens[$posicaoInicial][$i]<>0){
                    echo($this->matrizitens[$i-1][0].'-');
                    $this->encontraCaminho($this->matrizitens[$i-1][0],$letraFinal);
                }    
            }
        }else{
            echo $letraFinal.'<br>';
        }        
    }

    //inicia a busca pelos caminhos da letra inicial até a final
    public function buscaCaminho($letraInicio,$letraFinal){
        $this->letraInicial=$letraInicio;
        $this->letraFinal=$letraFinal;
        echo 'Partindo de "'.$letraInicio.'", os caminhos possíveis até "'.$letraFinal.'" são:<br>';
        $this->encontraCaminho($letraInicio,$letraFinal);        
    }

}

if(isset($_GET['letraa'])){
    
    $matriz = new Mapa();
    $matriz->adicionaItem(array($_GET['letraa'],$_GET['aa'],$_GET['ab'],$_GET['ac'],$_GET['ad'],$_GET['ae'],$_GET['af'],$_GET['ag']));
    $matriz->adicionaItem(array($_GET['letrab'],$_GET['ba'],$_GET['bb'],$_GET['bc'],$_GET['bd'],$_GET['be'],$_GET['bf'],$_GET['bg']));
    $matriz->adicionaItem(array($_GET['letrac'],$_GET['ca'],$_GET['cb'],$_GET['cc'],$_GET['cd'],$_GET['ce'],$_GET['cf'],$_GET['cg']));
    $matriz->adicionaItem(array($_GET['letrad'],$_GET['da'],$_GET['db'],$_GET['dc'],$_GET['dd'],$_GET['de'],$_GET['df'],$_GET['dg']));
    $matriz->adicionaItem(array($_GET['letrae'],$_GET['ea'],$_GET['eb'],$_GET['ec'],$_GET['ed'],$_GET['ee'],$_GET['ef'],$_GET['eg']));
    $matriz->adicionaItem(array($_GET['letraf'],$_GET['fa'],$_GET['fb'],$_GET['fc'],$_GET['fd'],$_GET['fe'],$_GET['ff'],$_GET['fg']));
    $matriz->adicionaItem(array($_GET['letrag'],$_GET['ga'],$_GET['gb'],$_GET['gc'],$_GET['gd'],$_GET['ge'],$_GET['gf'],$_GET['gg']));

    $matriz->buscaCaminho($_GET['buscaInicio'],$_GET['buscaFinal'],false);

}

?>
<hr><br>
<form action="exerc7.php" method="get">
    <label for="">Letra</label>
    <input type="text" name="letraa" value='a'><br>
    <label for="">A,A</label>    
    <input type="number" name="aa" value="0"><br>
    <label for="">A,B</label>    
    <input type="number" name="ab" value="7"><br>
    <label for="">A,C</label>    
    <input type="number" name="ac" value="0"><br>
    <label for="">A,D</label>    
    <input type="number" name="ad" value="5"><br>
    <label for="">A,E</label>    
    <input type="number" name="ae" value="0"><br>
    <label for="">A,F</label>    
    <input type="number" name="af" value="0"><br>
    <label for="">A,G</label>    
    <input type="number" name="ag" value="0"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letrab" value="b"><br>
    <label for="">B,A</label>    
    <input type="number" name="ba" value="7"><br>
    <label for="">B,B</label>    
    <input type="number" name="bb" value="0"><br>
    <label for="">B,C</label>    
    <input type="number" name="bc" value="8"><br>
    <label for="">B,D</label>    
    <input type="number" name="bd" value="9"><br>
    <label for="">B,E</label>    
    <input type="number" name="be" value="7"><br>
    <label for="">B,F</label>    
    <input type="number" name="bf" value="0"><br>
    <label for="">B,G</label>    
    <input type="number" name="bg" value="0"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letrac" value="c"><br>
    <label for="">C,A</label>    
    <input type="number" name="ca" value="0"><br>
    <label for="">C,B</label>    
    <input type="number" name="cb" value="8"><br>
    <label for="">C,C</label>    
    <input type="number" name="cc" value="0"><br>
    <label for="">C,D</label>    
    <input type="number" name="cd" value="0"><br>
    <label for="">C,E</label>    
    <input type="number" name="ce" value="5"><br>
    <label for="">C,F</label>    
    <input type="number" name="cf" value="0"><br>
    <label for="">C,G</label>    
    <input type="number" name="cg" value="0"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letrad" value="d"><br>
    <label for="">D,A</label>    
    <input type="number" name="da" value="5"><br>
    <label for="">D,B</label>    
    <input type="number" name="db" value="9"><br>
    <label for="">D,C</label>    
    <input type="number" name="dc" value="0"><br>
    <label for="">D,D</label>    
    <input type="number" name="dd" value="0"><br>
    <label for="">D,E</label>    
    <input type="number" name="de" value="15"><br>
    <label for="">D,F</label>    
    <input type="number" name="df" value="6"><br>
    <label for="">D,G</label>    
    <input type="number" name="dg" value="0"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letrae" value="e"><br>
    <label for="">E,A</label>    
    <input type="number" name="ea" value="0"><br>
    <label for="">E,B</label>    
    <input type="number" name="eb" value="7"><br>
    <label for="">E,C</label>    
    <input type="number" name="ec" value="5"><br>
    <label for="">E,D</label>    
    <input type="number" name="ed" value="15"><br>
    <label for="">E,E</label>    
    <input type="number" name="ee" value="0"><br>
    <label for="">E,F</label>    
    <input type="number" name="ef" value="8"><br>
    <label for="">E,G</label>    
    <input type="number" name="eg" value="9"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letraf" value="f"><br>
    <label for="">F,A</label>    
    <input type="number" name="fa" value="0"><br>
    <label for="">F,B</label>    
    <input type="number" name="fb" value="0"><br>
    <label for="">F,C</label>    
    <input type="number" name="fc" value="0"><br>
    <label for="">F,D</label>    
    <input type="number" name="fd" value="6"><br>
    <label for="">F,E</label>    
    <input type="number" name="fe" value="8"><br>
    <label for="">F,F</label>    
    <input type="number" name="ff" value="0"><br>
    <label for="">F,G</label>    
    <input type="number" name="fg" value="11"><br><br>

    <label for="">Letra</label>
    <input type="text" name="letrag" value="g"><br>
    <label for="">G,A</label>    
    <input type="number" name="ga" value="0"><br>
    <label for="">G,B</label>    
    <input type="number" name="gb" value="0"><br>
    <label for="">G,C</label>    
    <input type="number" name="gc" value="0"><br>
    <label for="">G,D</label>    
    <input type="number" name="gd" value="0"><br>
    <label for="">G,E</label>    
    <input type="number" name="ge" value="9"><br>
    <label for="">G,F</label>    
    <input type="number" name="gf" value="11"><br>
    <label for="">G,G</label>    
    <input type="number" name="gg" value="0"><br><br>
    <br><br>
    <label for="">Letra Inicio</label>    
    <input type="text" name="buscaInicio" value="a"><br>
    <label for="">Letra Final</label>    
    <input type="text" name="buscaFinal" value="e">

    <button type="submit">Enviar</button>
</form>

