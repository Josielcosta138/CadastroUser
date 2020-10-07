<?php 

class Autenticacao {

    public function isSenhaForte ($senha) {
        if (strlen($senha) >= 8){
            return true;
        }
        return false;
    }
    
}

