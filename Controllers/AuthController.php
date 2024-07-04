<?php

namespace App\Controllers;

use App\Models\ActivityLogModel;

use App\Models\staffModel;
use App\Models\loginStaffModel; // Assuming you have a model for staff
use CodeIgniter\Controller;

class AuthController extends Controller
{ 
    public function login()
   {

    $message = session();

    // Check if the request method is POST
    if ($this->request->getMethod() === 'post') {
        // Retrieve username and password from POST data
        $username = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');

        // Validate username and password
        if (empty($username) || empty($password)) {
            // Set flash message for incomplete credentials
            $message->setFlashdata('msg', 'Please enter both username and password.');
            return redirect()->to('/');
        }

        // Load the LoginModel
        $model = new loginStaffModel();
        
        // Retrieve the user record based on username and password (plain text comparison)
        $staff = $model->where('Username', $username)
                       ->where('Password', $password)
                       ->first();

        // Check if user exists
        if ($staff) {
            // Set session variables
            $message->set([
                'Username' => $staff['Username'],
                'isLoggedIn' => true,
            ]);

            // Log the activity
            $this->logActivity($staff['staff_ID'], 'login');

            return redirect()->to('/dashboardStaff'); // Redirect to dashboard upon successful login
        } else {
            // Incorrect credentials
            $message->setFlashdata('msg', 'Incorrect username or password.');
        }
    }

    // Redirect back to the login page
    return redirect()->to('/');
   }

    public function logout()
    {
        $staffId = session()->get('staff_id');
        
        if ($staffId) {
            $this->logActivity($staffId, 'logout');
        }

        session()->destroy();

        return redirect()->to('/');
    }

    private function logActivity($staffId, $activity)
    {
         // Fetch staff name from the staff table
    $staffModel = new staffModel(); // Assuming StaffModel is the model for the staff table
    $staff = $staffModel->find($staffId);

    if ($staff) {
        $staffName = $staff['Name']; // Adjust this according to your staff table's column name for staff names

        $activityLogModel = new ActivityLogModel();
        $activityLogModel->save([
            'staff_id' => $staffId,
            'Name' => $staffName, // Save the staff name
            'activity' => $activity,
            'timestamp' => date('Y-m-d || H:i:s') // Ensure you have a timestamp field in your database table
        ]);
    }
    }
}
