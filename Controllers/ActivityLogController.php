<?php

namespace App\Controllers;

use App\Models\ActivityLogModel;
use CodeIgniter\Controller;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activityLogModel = new ActivityLogModel();
        $data['activityLogs'] = $activityLogModel->findAll();
        
        return view('Dashboard/activityLog', $data);
    }

    public function deleteLog($id)
{
    $model = new ActivityLogModel();
    var_dump($id); // Check if $id is correctly received
    $deleted = $model->delete($id);

    var_dump($deleted); // Check if delete operation is successful

    if ($deleted) {
        return redirect()->to('activity-log')->with('status', 'Deleted Successfully');
    } else {
        return redirect()->to('activity-log')->with('error', 'Failed to Delete'); // Add error handling
    }
}
}
