<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;


    public function __construct()
    {
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }


    public function index()
    {
        $products = parent::index();
        include "src/Views/Product/list.php";
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Product/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "sector" => $_POST["sector"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "create_at" => $_POST["create_at"],
                "desc" => $_POST["desc"],

            ];
            $this->model->store($data);
            header("Location:index.php?page=product-list");
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }

    public function update($id)
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/Product/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "sector" => $_POST["sector"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "create_at" => $_POST["create_at"],
                "desc" => $_POST["desc"],

            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }


    public function search($keyword)
    {
        $products = $this->model->search($keyword);
        include "src/Views/Product/list.php";
    }
}
