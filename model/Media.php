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
}

