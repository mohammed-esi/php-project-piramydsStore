
<?php
// Message Variables
$msg = '';
$msgClass = '';
// Check Submited
if (filter_has_var(INPUT_POST, 'submit')) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($first_name) && !empty($last_name) && !empty($phone) && !empty($email) && !empty($message)) {
        // passed
        //check email 
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            //failed
            $msg = 'Please enter a valid email';
            $msgClass = 'alert-danger';
        } else {
            //passed
            $toEmail = 'zighed.mohammed.alamine@gmail.com';
            $subject = 'Contact request from ' . $first_name;
            $body = '<h2>Contact Request</h2>
                       <h4>Name : </h4><p>' . $first_name . '</p>
                       <h4>Name : </h4><p>' . $last_name . '</p>
                       <h4>Name : </h4><p>' . $phone . '</p>
                       <h4>Email : </h4><p>' . $email . '</p>
                       <h4>Message</h4><p>' . $message . '</p>';
            // Email Headers
            $headers = 'MINE-Version: 1.0' . '\r\n';
            $headers .= 'Content-Type: text/html;charset=UTF-8' . '\r\n';


            // Additional Headers
            $headers .= 'From: ' . $first_name . '<' . $email . '>' . '\r\n';


            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // failds
        $msg = 'Please write something';
        $msgClass = 'alert-danger';
    }
}
?>