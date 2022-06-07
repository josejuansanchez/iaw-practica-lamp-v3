<?php
require_once("config/config.php");
require_once("models/product.php");
require_once("views/view.php");

class ProductController {

    public function showAll() {
        $product = new Product();
        $data['products'] = $product->getAll();
        //$data['products'] = Product::getAll();
        View::show("product/showAll", $data);
    }

    public function edit() {
        // TODO
        $id = $_GET['id'];
        $product = new Product();
        $product->setId($id);
        $data = $product->get();
        View::show("product/edit", $data);
    }

    public function update() {
        // TODO
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        
        $product = new Product();
        $product->setName($name);
        $product->setQty($qty);
        $product->setPrice($price);
        $product->setId($id);

        $product->update();

        header("Location: " . URL_BASE);
    }

    public function delete() {
        // TODO
        $id = $_GET['id'];
        $product = new Product();
        $product->setId($id);
        $product->delete();

        header("Location: " . URL_BASE . "/product/");
    }

    public function add() {
        // TODO
        View::show("product/add");
    }

    public function insert() {
        // TODO
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $id = $_POST['id'];

        // $id_login
        $id_login = 1;
        
        $product = new Product();
        $product->setName($name);
        $product->setQty($qty);
        $product->setPrice($price);
        $product->setId($id);
        $product->setIdLogin($id_login);

        $product->insert();

        header("Location: " . URL_BASE);
    }

}
?>