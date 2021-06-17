<?php
    class Datas{
        private $dias = 0;
        private $dtinicial='';
        private $dtfinal='';
        
        public function __construct($di,$df){
            $this->dtinicial=$di;
            $this->dtfinal=$df;
        }
        //calcula os anos
        public function calculaAnos(){
            $anos=substr($this->dtfinal,6,4)-substr($this->dtinicial,6,4);
            $this->dias=$anos*365;
        }

        //calcula os meses
        public function calculaMeses(){
            if(substr($this->dtfinal,3,2)>substr($this->dtinicial,3,2)){
                $meses=substr($this->dtfinal,3,2)-substr($this->dtinicial,3,2);
                $this->dias+=($meses*30);
            }else{
                $meses=substr($this->dtinicial,3,2)-substr($this->dtfinal,3,2);
                $this->dias-=($meses*30);
            }
        }

        //calcula os dias
        public function calculaDias(){
            $this->calculaAnos();
            $this->calculaMeses();
            if(substr($this->dtfinal,0,2)>substr($this->dtinicial,0,2)){
                $this->dias+=substr($this->dtfinal,0,2)-substr($this->dtinicial,0,2);
            }else{
                $this->dias-=substr($this->dtinicial,0,2)-substr($this->dtfinal,0,2);
            }
            return $this->dias;
        }
    }

if(isset($_GET['d1'])and(isset($_GET['d2']))){
    $d1=$_GET['d1'];
    $d2=$_GET['d2'];
    
    $minhaData = new Datas($d1,$d2);
    echo $minhaData->calculaDias().' dias';
}
?>
<hr><br>
<form action="exerc3.php" method="get">
<label for="">Informe a primeira data no formato dd/mm/aaaa.:</label>
<input type="text" name="d1" id="d1"><br>
<label for="">Informe a segunda data no formato dd/mm/aaaa.:</label>
<input type="text" name="d2" id="d2"><br>
<button type="submit">Enviar e calcular diferença de dias</button>
</form>