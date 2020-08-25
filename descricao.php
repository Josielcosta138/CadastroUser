<?php
    $conexao = new PDO('mysql:host=localhost;dbname=modelagem;port=3306','root','1234');

    //Modo de Edição
    if (isset($_GET['id'])){
        $id = $_GET['id'];

         $sql = "SELECT descricao FROM nivelusuario WHERE id = ". $id ." LIMIT 1;";
         $rs = $conexao->query($sql);
        if($linha = $rs->fetch()){
            $descricao = $linha["descricao"];
    }else{
        echo 'Nenhum registro Encontrado';
        exit;
    }

    //Modo de Inserção
    }else{
        $id = 0;
        $descricao = "";
    }
 ?>


<html>  
    <head>  
        <title>Descrição</title>
		<meta charset="UTF-8">
    </head>
    
    <body bgcolor="#A9F5E1"> 
        <a href="listar_nivelusuario.php">Voltar<a/>
    <fieldset style = "width: 50%; margin: 50px auto;">
        <form onsubmit="return validar();" action ="salvar_nivelusuario.php" method="POST">
            
            <input type="hidden" id="id" name="id" value="<?=$id?>" />    
            <legend><b><font face="Courier">Nivel de Usuário</font></b></legend>
            <label for="descricao"><font face="Times">Descricao</font></label>
            <input type="text" id="descricao" placeholder="digite descricao" name="descricao" value="<?=$descricao?>" />
            <input type="submit" id="salvar" value="Salvar" />
            </fieldset>
 
        </form>
        <script type="text/javascript">
        
            //alert("Atençao - CADASTRE-SE!")
            //document.getElementById("descricao").value= "Digite sua descrição!";
            document.getElementById("salvar").value= "Salvar.";
            
            function validar(){
                //alert("Entrou na funcao");
                
                var descricao = document.getElementById("descricao");
                if (descricao.value ==""){
                    alert("O campo descricao é obrigatório.");
                    descricao.style.backgroundColor = "#B40431";
                    descricao.style.color= "#FFFFFF";
                    descricao.focus();
                    return false;
                }
                
                if (descricao.value.length < 3){
                    alert("ATENÇÃO! Campo descrição ter que ter no minimo 3 letras!");
                    return false;
                    }
                     return true;
            }
            
        </script>
    </body>
 
</html>
