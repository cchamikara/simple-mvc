<?php

class ProductsDAO extends BaseDAO {
    private $name;
    private $email;
    private $tel;
    private $address;
    private $review;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getReview(){
        return $this->review;
    }

    public function setReview($review){
        $this->review = $review;
    }



}