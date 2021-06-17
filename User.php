<?php 


    class User{

        public $nome;
        public $cognome;
        public $anni;
        static $utenti = 0;
        private $prezzo = 0;

        public function __construct($_nome, $_cognome, $_anni = 0)
        {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->anni = $_anni;
            self::$utenti++;
            $this->setPrezzo();
        }

        public function setAnni($_anni){
            $this->anni = $_anni;
            //mi richiama la funzione setprezzo, così mi assegna il nuovo valore
            $this->setPrezzo();
        }


        static function getUtenti(){
            return self::$utenti;
        }

        
        private function setPrezzo(){
            if($this->anni < 18){
                $this->prezzo = 8;
            }elseif($this->anni > 70){
                $this->prezzo = 10;
            }else{
                $this->prezzo = 15;
            }
        }

        public function getPrezzo(){
            return $this->prezzo;
        }

    }

?>

