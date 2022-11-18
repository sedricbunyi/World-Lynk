<?php 

    $fistname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $where = $_POST['where'];
    $howlong = $_POST['howlong'];
    $nclex = $_POST['nclex'];

    use PHPMailer\PHPMailer\PHPMailer;
    
    $name = "Valog Bilat";  // Name of your website or yours
    $to = "valogbilat@gmail.com";  // mail of reciever
    $subject = "Application form details";
    $body = "<h3>New Nurse Application</h3> <h4>First Name: </h4><pre>".$fistname."<br> <h4>Middle Name: </h4><pre>".$middlename."<br> <h4>Last Name: </h4><pre>".$lastname.
    "<br> <h4>Email: </h4><pre>".$email."<br> <h4>Phone Number: </h4><pre>".$phone."<br> <h4>Where did they receive Nursing Degree? </h4><pre>".$where."<br> <h4>How long have you been working as a Nurse? </h4><pre>".$howlong.
    "<br> <h4>Do you have NCLEX Certification? </h4><pre>".$nclex;
    $from = "valogbilat@gmail.com";  // you mail
    $password = "ieqqxlijzkkrkqeu";  // your mail password

    // Ignore from here

    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";
    $mail = new PHPMailer();

    // To Here

    //SMTP Settings
    $mail->isSMTP();
    // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->Port = 587;  // port
    $mail->SMTPSecure = "tls";  // tls or ssl
    $mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ]);

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to); // enter email address whom you want to send
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    if ($mail->send()) {
        echo "<script>alert('Thank You for Applying!'); location.href = '../index.html'; </script>";
    } else {
        echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

?>