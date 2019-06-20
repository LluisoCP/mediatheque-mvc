<?php

namespace App\Model;

use \PDO;

class Type {
    
    public function getTypes() {
        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM type";

        $response = $bdd->query($request);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getType($id) {
        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM type WHERE id = :id";

        $response = $bdd->prepare($request);

        $response->execute(['id' => $id]);

        return $response->fetch(PDO::FETCH_ASSOC);
    }


}