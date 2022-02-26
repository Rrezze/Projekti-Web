<?php
    class Produktet{
        public $produktetId;
        public $fotoProduktit;
        public $emriProduktit;
        public $qmimiProduktit;

        public function __construct($produktetId,$fotoProduktit,$emriProduktit,$qmimiProduktit){
            $this->produktetId=$produktetId;
            $this->fotoProduktit=$fotoProduktit;
            $this->emriProduktit=$emriProduktit;
            $this->qmimiProduktit=$qmimiProduktit;
        }
        public function __toString(){
            return "<div class=\"teams1-brand\">
			<img src=".$this->fotoProduktit.">
			<p class=\"p1\">$this->emriProduktit</p>
			<p style=\"font-size: 15pt;\" class=\"p2\">$this->qmimiProduktit$</p>
		</div>";
        }
    }
?>