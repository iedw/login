<?php

namespace Classes;

    class Usuario{
        private $nComp;
        private $nUsuar;
        private $email;
        private $senha;

        public function __construct($email, $senha, $nComp = null, $nUsuar = null){
            $this->email = $email;
            $this->senha = md5($senha);
            $this->nComp = $nComp;
            $this->nUsuar = $nUsuar;
        }

        public function getNComp(){
            return $this->nComp;
        }

        public function setNComp($nComp){
            $this->nComp = $nComp;
        }

        public function getNUsuar(){
            return $this->nUsuar;
        }

        public function setNUsuar($nUsuar){
            $this->nUsuar = $nUsuar;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
    }