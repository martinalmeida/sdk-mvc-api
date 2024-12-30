<?php

namespace App\controllers;

class UserController
{
    public function listUsers()
    {
        echo json_encode(['users' => ['John', 'Jane', 'Doe']]);
    }

    public function createUser()
    {
        echo json_encode(['message' => 'Usuario creado']);
    }
}
