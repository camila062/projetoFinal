<?php
class Conexao
{
    //Dados do banco
    private $db_server = 'localhost';
    private $db_name = 'projetofinal';
    private $db_charset = 'utf8';
    private $db_username = 'root';
    private $db_password = '';

    //==================================================================
    public function consultarBanco($query, $parametros = null, $debug = true, $close_connection = true)
    {
        // Faz uma consulta no banco de dados (SELECT)
        $results = null;

        //Fazendo a conexão com o banco
        $connection = new PDO(
            'mysql:host=' . $this->db_server .
                ';dbname=' . $this->db_name .
                ';charset=' . $this->db_charset,
            $this->db_username,
            $this->db_password,
            array(PDO::ATTR_PERSISTENT => true)
        );

        if ($debug) {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //execution
        try {
            if ($parametros != null) {
                $gestor = $connection->prepare($query);
                $gestor->execute($parametros);
                $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $gestor = $connection->prepare($query);
                $gestor->execute();
                $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            return false;
        }

        //Desligando a conexão
        if ($close_connection) {
            $connection = null;
        }

        //Retornando os Resultados
        return $results;
    }

    //==================================================================
    public function intervencaoNoBanco($query, $parameters = null, $debug = true, $close_connection = true)
    {
        //Faz uma intervenção no banco de dado (INSERT, UPDATE, DELETE)

        //Fazendo a conexão
        $connection = new PDO(
            'mysql:host=' . $this->db_server .
                ';dbname=' . $this->db_name .
                ';charset=' . $this->db_charset,
            $this->db_username,
            $this->db_password,
            array(PDO::ATTR_PERSISTENT => true)
        );

        if ($debug) {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //executando
        $connection->beginTransaction();
        try {
            if ($parameters != null) {
                $gestor = $connection->prepare($query);
                $gestor->execute($parameters);
            } else {
                $gestor = $connection->prepare($query);
                $gestor->execute();
            }
            $connection->commit();
        } catch (PDOException $e) {
            $connection->rollBack();
            return false;
        }

        //Desligando a conexão
        if ($close_connection) {
            $connection = null;
        }

        return true;
    }
}
