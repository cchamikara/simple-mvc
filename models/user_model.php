<?php
class UserModel extends Model{
    public function create($user){
        $query = "INSERT INTO user(name, age) VALUES(:name, :age)";

        try{
            $conn = $this->database->load();
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':name', $user_name, PDO::PARAM_STR, 50);
            $stmt->bindParam(':age', $user_age, PDO::PARAM_INT, 3);


            $user_name = $user->getName();
            $user_age = $user->getAge();

            $result = $stmt->execute();

            $conn = "";

            return $result;
        } catch(PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
}