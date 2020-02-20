<?php

class QueryBuilder 
{   
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $model = null)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        if($model) 
        {
            return $statement->fetchAll(PDO::FETCH_CLASS, "{$model}");
        }

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) 
    {
        // insert into %s (%s) values (%s)
        // insert into brands (brand_id, brand_name) values (:brand_id, :brand_name)

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
}
