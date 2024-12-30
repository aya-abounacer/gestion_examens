<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CompteModel;  // Add this line to import CompteModel

class SignupController extends BaseController
{
    public function index()
    {
        // This will load the signup view
        return view('Signup');
    }

    public function store()
    {
        helper(['form', 'url']);  // Load helpers for validation and URL handling

        // Form validation
        if (!$this->validate([
            'studentName' => 'required',
            'emailAddress' => 'required|valid_email',
            'username' => 'required',
            'password' => 'required|min_length[6]',
            'role' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Insert data into the users table
        $userModel = new UserModel();

        // Get form data
        $fullName = $this->request->getPost('studentName');
        $nameParts = explode(' ', $fullName);
        $nom = $nameParts[0];
        $prenom = isset($nameParts[1]) ? $nameParts[1] : '';
        $dateOfBirth = $this->request->getPost('dateOfBirth');

        // Insert into the users table
        $userModel->insert([
            'nom' => $nom,
            'prenom' => $prenom,
            'date_of_birth' => $dateOfBirth,
            'niveau' => $this->request->getPost('level'),
            'section' => $this->request->getPost('section'),
        ]);

        // Get the user id after insertion to link it to the account
        $userId = $userModel->getInsertID();

        // Check if user was inserted properly
        if (!$userId) {
            return redirect()->back()->with('error', 'User insertion failed!');
        }

        // Insert data into the comptes table (for account)
        $compteModel = new CompteModel();

        // Get form data for account (username, password, etc.)
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT); // Securely hash the password
        $email = $this->request->getPost('emailAddress');
        $role = $this->request->getPost('role');

        // Log the query data for debugging purposes (optional)
        log_message('info', 'User ID: ' . $userId);  // Logs the User ID
        log_message('info', 'Account Data: ' . print_r([
            'username' => $username,
            'email' => $email,
            'role' => $role
        ], true));

        // Insert into the comptes table, linking user_id to the comptes
        $compteModel->insert([
            'user_id' => $userId, // Link the user to the account
            'username' => $username,
            'password_hash' => $password,
            'email' => $email,
            'role_name' => $role,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Check if insertion into comptes was successful
        if ($compteModel->affectedRows() === 0) {
            return redirect()->back()->with('error', 'Account insertion failed!');
        }

        // Redirect to a success page or home page after successful registration
        return redirect()->to('/');  // Redirect back to the home page or wherever you'd like
    }
}
