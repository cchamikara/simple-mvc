<?php

/**
 * Created by PhpStorm.
 * User: Chamal
 * Date: 2/3/16
 * Time: 10:51 PM
 */
class ProductsModel extends Model
{
    public function getProducts()
    {
        $query = "SELECT * FROM products";

        try {
            $conn = $this->database->load();
            $sth = $conn->prepare($query);
            $sth->execute();

            return $sth->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function createReview($review){

        $query = "INSERT INTO reviews(name,email,address,review, tel) VALUES(:name, :email, :address, :review, :tel)";
        try{
            $conn = $this->database->load();
            $stmt = $conn->prepare($query);

            $name = $review->getName();
            $email = $review->getEmail();
            $address = $review->getAddress();
            $reviewtext = $review->getReview();
            $tel = $review->getTel();

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':review', $reviewtext);
            $stmt->bindParam(':tel', $tel);

            $result = $stmt->execute();

            $conn = "";

            return $result;
        } catch(PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
}