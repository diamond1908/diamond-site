<?php
    require_once("./model/Formulario.php");
    require_once './model/Conexao.php';

    class FormularioDao{
        public static function cadastra($formulario){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO formulario( nomeCompleto, email, escreva )
                            VALUES(?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $formulario->getNome());
            $prepareStatement->bindValue(2, $formulario->getEmail());
            $prepareStatement->bindValue(3, $formulario->getEscreva());

            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function listar(){                        
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idFormulario, nomeCompleto, email, escreva  FROM Formulario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }


    }
?>