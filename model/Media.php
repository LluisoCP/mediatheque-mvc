<?php

namespace App\Model;

use \PDO;

class Media {

    public function getMedias() {
        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM media";

        $response = $bdd->query($request);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMedia($id) {

        $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8;port=3306', 'root', '');

        $request = "SELECT * FROM media WHERE id = :id";

        $response = $bdd->prepare($request);

        $response->execute(['id' => $id]);

        return $response->fetch(PDO::FETCH_ASSOC);


    }

}

