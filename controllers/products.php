<?php

/**
 * Created by PhpStorm.
 * User: Chamal
 * Date: 2/3/16
 * Time: 10:28 PM
 */
class Products extends Controller
{
    public function __construct($name)
    {
        parent::__construct($name = "products");
    }

    public function home()
    {

        $this->view->render('home_products');
    }

    public function getProductsCollection()
    {
        $_model = new ProductsModel();
        $_products = $_model->getProducts();
        return $_products;
    }

    public function addReview()
    {

        $review = new ProductsDAO();

        $review->setName($_POST['name']);
        $review->setEmail($_POST['email']);
        $review->setAddress($_POST['address']);
        $review->setTel($_POST['tel']);
        $review->setReview($_POST['review']);

        $model = new ProductsModel();

        $result = $model->createReview($review);

        if ($result == 1) {
            header("Location: " . SITE_URL . "/products/?e=1");
        }

    }
}