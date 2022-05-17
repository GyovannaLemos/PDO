<?php

    class Caminho{
        public static $usuario = "root"; //static é um status de segurança, essa variavel recebeá um valor mas nao poderá trocar o valor diretamente.
        public static $senha = "";
        private static $connect = null; // Private só poderá ser executada dentro desta classe, "a não ser se for herdada". - Variavel Static precisa de NULL.

        private static function Conectar(){ // Este metodo só executa onde foi criado. Dentro de conexao.
            try{ //if
                if(self::$connect==null){ // Variavel SELF - se eu declarei uma variavel do tipo static preciso usar SELF para chamar/declarar
                    self::$connect = new PDO('mysql:host=localhost:3308;dbname=crud',
                    self::$usuario, 
                    self::$senha
                ); 
                }
            } /* else */ catch (Exception $ex) // Esta variavel recebe o erro.
            {
                echo "Mensagem".$ex->getMessage();
                die; // Fechar tudo do usuario - "Questao de segurança"
            }
            return self::$connect; // Retornar o que está dentro dele mesmo se deu certo ou errado.
        }
        public function getConn(){
            return self::Conectar(); // Rodar a function que é estatica 'Conectar'
        }
    }

