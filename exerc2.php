<?php

    class MeuArray {
        private $items = array();
        private $position = 0;

        //retorna a posicao do primeiro item
        public function primeiroItem(){
            foreach ($this->items as $k => $v) {
                return $k;                
                break;
            }                
        }

        //retorna a posicao do ultimo item
        public function ultimoItem(){
            $pos=0;
            foreach ($this->items as $k => $v) {
                $pos=$k;
            }
            return $pos;
        }

        //retorna todos os itens
        public function pegarItens(){
            return $this->items;
        }

        //adiciona um item no array
        public function adicionarItem($item){
            $this->items[count($this->items)] = $item;            
        }

        //retorna todos os itens como string
        public function obterItems(){
            $escreve='';
            foreach ($this->items as $k => $v) {
                $escreve.=($v.',');
            }            
            return substr($escreve,0,-1).'<br>';  
        }
        
        //reordena os arrays com os pares(crescente) e impares(decrescente)
        public function reordenar(){
            echo '<p>reordenando...</p>';                        
            //pega os numeros pares/impares
            $pares = array();$impares = array();
            foreach ($this->items as $k => $v) {
                if(($v % 2)==0){
                    $pares[count($pares)]=$v;
                }else{
                    $impares[count($impares)]=$v;
                }
            }
            //ordena os pares
            $this->position=$this->primeiroItem();
            for($i=0;$i<count($pares);$i++){
                for($j=0;$j<count($pares)-1;$j++){
                    if($pares[$j+1]<=$pares[$j]){
                        $a=$pares[$j];
                        $pares[$j]=$pares[$j+1];
                        $pares[$j+1]=$a;
                    }
                }
            }            
            //ordena os impares
            $this->position=$this->primeiroItem();
            for($i=0;$i<count($impares);$i++){
                for($j=0;$j<count($impares)-1;$j++){
                    if($impares[$j+1]>=$impares[$j]){
                        $a=$impares[$j];
                        $impares[$j]=$impares[$j+1];
                        $impares[$j+1]=$a;
                    }
                }
            } 
            //joga os pares e impares de volta no array principal
            foreach ($pares as $k => $v) {
                $this->items[$this->position]=$v;
                $this->position++;
            }
            foreach ($impares as $k => $v) {
                $this->items[$this->position]=$v;
                $this->position++;
            }
        }
        
    }
    $numeros = new MeuArray();
    if(isset($_GET['v1'])) $numeros->adicionarItem($_GET['v1']);
    if(isset($_GET['v2'])) $numeros->adicionarItem($_GET['v2']);
    if(isset($_GET['v3'])) $numeros->adicionarItem($_GET['v3']);
    if(isset($_GET['v4'])) $numeros->adicionarItem($_GET['v4']);
    if(isset($_GET['v5'])) $numeros->adicionarItem($_GET['v5']);
    if(isset($_GET['v6'])) $numeros->adicionarItem($_GET['v6']);

    if(isset($_GET['v1'])){
        echo('Números informados: '.$numeros->obterItems($numeros));     

        $numeros->reordenar();
        echo($numeros->obterItems($numeros)); 
    }
?>
<hr><br>
<form action="exerc2.php" method="get">
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
    <button type="submit">Enviar e Ordenar Itens</button>
</form>

