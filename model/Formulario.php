<?php
    class Formulario{
        private $id;
        private $nome;
        private $email;
        private $escreva;
        

        
        public function getId(){
            return $this->id;
        }
        ////
        public function getNome(){
            return $this->nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        public function getEscreva(){
            return $this->escreva;
        }
//////////////////////////////////////////////////////
        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function setEmail($email){
            $this->email= $email;
        }
        public function setEscreva($escreva){
            $this->escreva= $escreva;
        }       
      
    }
?>