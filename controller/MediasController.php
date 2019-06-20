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

    public function show($id) {

        $media = $this->manager->getMedia($id);
        
        echo "Média #" . $id;

        dump($media);

    }

}