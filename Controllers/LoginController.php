<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\loginStaffModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('index'); // Display the login form view
    }

    public function authenticate()
    {
        $session = session();

        // Check if the request method is POST
        if ($this->request->getMethod() === 'post') {
            // Retrieve username and password from POST data
            $username = $this->request->getPost('Username');
            $password = $this->request->getPost('Password');

            // Validate username and password
            if (empty($username) || empty($password)) {
                // Set flash message for incomplete credentials
                $session->setFlashdata('msg', 'Please enter both username and password.');
                return redirect()->to('/');
            }

            // Load the LoginModel
            $model = new LoginModel();
            
            // Retrieve the user record based on username and password (plain text comparison)
            $admin = $model->where('Username', $username)
                           ->where('Password', $password)
                           ->first();

            // Check if user exists
            if ($admin) {
                // Set session variables
                $session->set([
                    'Username' => $admin['Username'],
                    'isLoggedIn' => true,
                ]);
                return redirect()->to('/dashboard'); // Redirect to dashboard upon successful login
            } else {
                // Incorrect credentials
                $session->setFlashdata('msg', 'Incorrect username or password.');
            }
        }

        // Redirect back to the login page
        return redirect()->to('/');
    }


}
