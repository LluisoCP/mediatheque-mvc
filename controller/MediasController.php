<?php

namespace App\Controller;

use App\Model\Media;

class MediasController {

    private $manager;

    public function __construct() {
        
        $this->manager = new Media;
    }

    public function index() {
        echo "Liste des Médias";

        $medias = $this->manager->getMedias();

        dump($medias);

    }

}