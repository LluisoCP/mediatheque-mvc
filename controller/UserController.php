<?php


namespace App\Controller;

use App\Model\User;

class UserController {

    private $manager;

    public function __construct() {
        $this->manager = new User;
    }
    
    public function index() {
        $users = $this->manager->getUsers();

        echo "Liste d'utilisateurs:";

        dump($users);
    }

    public function show($id) {

        $user = $this->manager->getUser($id);

        echo "Utilisateur #" . $id;

        dump($user);
    }


}