<?php
class Conexao {
    public function select($query){
        try{
            $PDO = new PDO( 'mysql:host=' . 'localhost:3307' . ';dbname=' . 'hotel', 'root', 'usbw' );
        }catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
        try{
            $result = $PDO->query( $query );
            $rows = $result->fetchAll(PDO::FETCH_NUM);
            return $rows;
        }catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
    public function insert($query){
        try{
            $PDO = new PDO( 'mysql:host=' . 'localhost:3307' . ';dbname=' . 'hotel', 'root', 'usbw' );
        }
        catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
        try{
            $stmt = $PDO->prepare( $query );
            $result = $stmt->execute();
            
            if ( ! $result ){
                var_dump( $stmt->errorInfo() );
                exit;
            }
            echo $stmt->rowCount() . "linhas inseridas";
        }catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
    public function delete($query){
        try{
            $PDO = new PDO( 'mysql:host=' . 'localhost:3307' . ';dbname=' . 'hotel', 'root', 'usbw' );
        }
        catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
        try{
            $sql = $query;
            $stmt = $PDO->prepare( $sql );
            $result = $stmt->execute();
            if ( ! $result ){
                var_dump( $stmt->errorInfo() );
                exit;
            }
            echo $stmt->rowCount() . "linhas removidas";
        }catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
    public function update($query){
        try{
            $PDO = new PDO( 'mysql:host=' . 'localhost:3307' . ';dbname=' . 'hotel', 'root', 'usbw' );
        }
        catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
        try{
            $sql = $query;
            $stmt = $PDO->prepare( $sql );
            $result = $stmt->execute();
            
            if ( ! $result ){
                var_dump( $stmt->errorInfo() );
                exit;
            }
            
            echo $stmt->rowCount() . "linhas alteradas";
        }catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
}
?>