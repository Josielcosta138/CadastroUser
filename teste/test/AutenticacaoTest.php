<?php
require '../../../core/model/autenticacao.class.php';
use PHPUnit\Framework\TestCase;

class AutenticacaoTest extends TestCase {

    public function testSoma (){
        $this->assertEquals(4, (2+2));

    }
    public function testIsSenhaForte (){
        $autenticacao = new Autenticacao();
        $this->assertTrue($autenticacao->isSenhaForte("123"));

    }
    
} 
