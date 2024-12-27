<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Affiche la vue du formulaire
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->checkUser($email, $password);

        if ($user) {
            $session->set('user_id', $user['id']);
            $session->set('email', $user['email']);
            return redirect()->to('/dashboard'); // Redirection après connexion
        } else {
            $session->setFlashdata('error', 'Email ou mot de passe incorrect.');
            return redirect()->to('/login'); // Retour à la page de connexion
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
