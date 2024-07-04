<?php

namespace App\Controllers;

use App\Models\staffModel;
use App\Models\ActivityLogModel;

use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\vendorModel;
use App\Models\ticketModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('Dashboard/index');
    }

    public function staffVendors(): string
    {
        $staff = new staffModel();
        $data['Dashboard'] = $staff->findAll();

        $vendors = new vendorModel();
        $data['vendors'] = $vendors->findAll();
        return view('Dashboard/staffVendors', $data);
    }

    public function activityLog()
    {
        return view('Dashboard/activityLog');
    }
    
    public function store()
    {
        $staff = new staffModel();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Gender' => $this->request->getPost('Gender'),
            'ContactNo' => $this->request->getPost('ContactNo'),
            'Position' => $this->request->getPost('Position'),
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password')
        ];

        $existingUser = $staff->where('Username', $data['Username'])->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'Username already taken.');
        }

        $staff->save($data);
        return redirect('staff')->with("status", "Inserted Successfully");
    }

    public function addVendor()
    {
        $vendor = new vendorModel();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'StoreName' => $this->request->getPost('StoreName'),
            'MonthlyRent' => $this->request->getPost('MonthlyRent'),
            'Email' => $this->request->getPost('Email')
        ];

        $vendor->save($data);
        return redirect('staff')->with("status", "Inserted Successfully");
    }


    public function edit($staff_ID)
    {
        $staff = new staffModel();
        $data['staff'] = $staff->find($staff_ID);
        return view('LoginForm/editStaff', $data);
    }

    public function editVendor($StoreID)
    {
        $vendor = new vendorModel();
        $data['vendor'] = $vendor->find($StoreID);
        return view('LoginForm/editVendors', $data);
    }

    public function billingVendor($StoreID)
    {
        $vendor = new vendorModel();
        $data['vendor'] = $vendor->find($StoreID);
        return view('Dashboard/billing', $data);
    }

      public function print($StoreID)
    {
        $email = $this->request->getPost('Email');
        
        // Fetch vendor details
        $vendorModel = new VendorModel();
        $vendor = $vendorModel->find($StoreID);

        // Generate the HTML content for the PDF
        $html = view('Dashboard/billing_pdf', ['vendor' => $vendor]);

        // Generate PDF using Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfOutput = $dompdf->output();
        $pdfFilePath = WRITEPATH . 'uploads/billing_address.pdf';
        file_put_contents($pdfFilePath, $pdfOutput);

        // Send email with attachment
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Set your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'joannah.sanagustin@gmail.com'; // SMTP username
            $mail->Password   = 'aleu bgkn utkj pgwy'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('joannah.sanagustin@gmail.com', 'ParkEase');
            $mail->addAddress($email);

            // Attachments
            $mail->addAttachment($pdfFilePath);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Billing Address';
            $mail->Body    = 'Please find your billing address attached as a PDF.';

            $mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function updateVendor($StoreID)
    {
        $vendor = new vendorModel();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'StoreName' => $this->request->getPost('StoreName'),
            'MonthlyRent' => $this->request->getPost('MonthlyRent'),
            'Email' => $this->request->getPost('Email')
        ];

        $vendor->update($StoreID, $data);
        return redirect()->to(base_url('staff'))->with('status', 'Vendor Updated Successfully');
    }

    public function update($staff_ID)
    {
        $staff = new staffModel();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Gender' => $this->request->getPost('Gender'),
            'ContactNo' => $this->request->getPost('ContactNo'),
            'Position' => $this->request->getPost('Position'),
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password')
        ];
        $staff->update($staff_ID, $data);
        return redirect()->to(base_url('staff'))->with('status', 'Staff Updated Successfully');
    }

    public function ticket($id)
    {
        $ticket = new ticketModel();
        $data['ticket'] = $ticket->find($id);
        return view('LoginForm/editTicket', $data);
    }

    public function editTicket($id)
    {
        $ticket = new ticketModel();
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Description' => $this->request->getPost('Description'),
            'Quantity' => $this->request->getPost('Quantity'),
            'Price' => $this->request->getPost('Price')
        ];

        $ticket->update($id, $data);
        return redirect()->to(base_url('tickets'))->with('status', 'tickets Updated Successfully');
    }

    public function delete($staff_ID)
    {
        $model = new staffModel(); // Use the appropriate model name
        $model->delete($staff_ID);
        return redirect()->to('/staff')->with('status', 'Deleted Successfully');
    }

    public function deleteLog($id)
    {
        $model = new ActivityLogModel(); // Use the appropriate model name
        $model->delete($id);
        return redirect()->to('activity-log')->with('status', 'Deleted Successfully');
    }

    public function deleteVendor($StoreID)
    {
        $model = new vendorModel(); // Use the appropriate model name
        $model->delete($StoreID);
        return redirect()->to('/staff')->with('status', 'Deleted Successfully');
    }

    public function tickets(): string
    {
        $model = new ticketModel();

        $data['ticket_info'] = $model->findAll();
        return view('Dashboard/tickets', $data);
    }

    public function events(): string
    {
        return view('Dashboard/events');
    }

    public function dashboardStaff(): string
    {
        return view('Dashboard/dashboardStaff');
    }

    public function billing(): string
    {
        return view('Dashboard/billing');
    }
}
