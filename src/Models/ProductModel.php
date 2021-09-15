<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    protected $table = "products";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `products`( `name`, `sector`, `price`, `quantity`, `create_at`, `description`) 
        VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['sector']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['create_at']);
        $stmt->bindParam(6, $data['desc']);
        $stmt->execute();
    }


    public function update($id, $data)
    {
        $sql = "UPDATE `products` SET `name`=?, `sector`=?, `price`=?, `quantity`=? , `create_at`=? ,`description`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['sector']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['create_at']);
        $stmt->bindParam(6, $data['desc']);
        $stmt->execute();;
    }
}
