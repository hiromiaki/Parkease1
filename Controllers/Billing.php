<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Billing extends BaseController
{
    public function print()
    {
        $email = $this->request->getPost('Email');
        

        // Generate PDF
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
            $mail->Body    = 'Please find your billing address attached as a PDF. Pay before Due Date.';

            $mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}