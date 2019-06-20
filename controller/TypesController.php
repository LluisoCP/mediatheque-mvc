<?php

namespace App\Controller;

use App\Model\Type;

class TypesController {

    private $manager;

    public function __construct()
    {
        $this->manager = new Type;
    }
    
    public function index() {

        $types = $this->manager->getTypes();

        echo "Liste des Types.";

        dump($types);
    }

    public function show($id) {
        $type = $this->manager->getType($id);
        
        echo "Voici le type #" . $id;

        dump($type);
    }
}