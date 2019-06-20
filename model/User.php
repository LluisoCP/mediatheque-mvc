<?php

namespace App\Model;

use \PDO;

class User {
    
    public function getUsers() {
        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM user";

        $response = $bdd->query($request);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($id) {
        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM user WHERE id = :id";

        $response = $bdd->prepare($request);

        $response->execute(['id' => $id]);

        return $response->fetch(PDO::FETCH_ASSOC);
    }


}