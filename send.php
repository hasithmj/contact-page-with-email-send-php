<?php
include ($_SERVER['DOCUMENT_ROOT'].'/../config.php');
header('Content-Type: application/json; charset=utf-8');
$response = [
    'success' => true,
    'msg' => 'Email has been sent successfully..'
];

try {

    // validate fields
    if (!isset($_POST['nature_of_enquiry']) || test_input($_POST['nature_of_enquiry']) == "") {
        throw new Exception("nature_of_enquiry required");
    }
    if (!isset($_POST['name']) || test_input($_POST['name']) == "") {
        throw new Exception("name required");
    }
    if (!isset($_POST['phone']) || test_input($_POST['phone']) == "") {
        throw new Exception("phone required");
    }
    if (!isset($_POST['company_name']) || test_input($_POST['company_name']) == "") {
        throw new Exception("company_name required");
    }


    // Email body html
    $mail_html = '<table border="1">';
    $mail_html .= '<tr><td style="padding:10px"><strong>Nature of enquiry</strong></td><td style="padding:10px">'.$_POST['nature_of_enquiry'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>Name</strong></td><td style="padding:10px">'.$_POST['name'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>Email</strong></td><td style="padding:10px">'.$_POST['email'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>phone</strong></td><td style="padding:10px">'.$_POST['phone'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>Country of Origin</strong></td><td style="padding:10px">'.$_POST['country_of_origin'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>Company Name</strong></td><td style="padding:10px">'.$_POST['company_name'].'</td></tr>';
    $mail_html .= '<tr><td style="padding:10px"><strong>Enquiry</strong></td><td style="padding:10px">'.$_POST['enquiry'].'</td></tr>';
    $mail_html .= '</table>';

    // Send mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($contact_email_send_to, "Contact message from website", $mail_html, $headers);

} catch (Exception $e) {
    $response = [
        'success' => false,
        'msg' => $e->getMessage()
    ];
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo json_encode($response);
