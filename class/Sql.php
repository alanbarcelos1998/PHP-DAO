<?php 

class Sql extends PDO{
    
    private $conn;

        public function __construct()
        {
        
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
            
        } // MÉTODO CONSTRUTOR QUE FAZ A CONEXÃO COM O BANCO DE DADOS.
        
        private function setParams($statment, $parameters = array())
        {
            foreach ($parameters as $key => $value) {
                
                $this->setParam($key, $value);
            }
        } // MÉTODO PARA SETAR OS PARÂMETROS

        private function setParam($statment, $key, $value)
        {
            $statment->bindParam($key, $value);
        } // MÉTODO PARA TRAZER AS CHAVES E VALORES DO MÉTODO setParams() E MOSTRAR COMO STATMENT 

        public function query($rawQuery, $params = array())
        {
            $stmt = $this->conn->prepare($rawQuery);
            
            $this->setParams($stmt, $params);
            
            $stmt->execute();
            
            return $stmt;
        }

        public function select($rawQuery, $params = array()):array
        {
                $stmt = $this->query($rawQuery, $params);

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


} //FIM CLASSE

?>