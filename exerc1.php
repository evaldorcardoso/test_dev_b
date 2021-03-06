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
        
        //gira os itens para a esquerda de acordo com a quantidade de casas definidas
        public function girar($quantidadeCasas){                        
            for ($i=0; $i < $quantidadeCasas; $i++) { 
                echo '<p>girando '.($i+1).'x ..</p>';
                $this->position=$this->primeiroItem();
                $this->items[$this->ultimoItem()+1] = $this->items[$this->position];                                                                                
                unset($this->items[$this->position]);    
            }                    
            return $this->items;          
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
        echo('N??meros informados: '.$numeros->obterItems($numeros));     
        $numeros->girar(2);
        echo($numeros->obterItems($numeros)); 

    }
?>
<hr><br>
<form action="exerc1.php" method="get">
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
    <button type="submit">Enviar e Girar itens</button>
</form>

