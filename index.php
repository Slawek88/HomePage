<?php
// Message Vars
$msg = '';
$msgClass = '';
    // Check For Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST["message"]);

        // Check required Fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //Passed
            // echo 'PASSED';
            // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //Failed
                $msg = 'Please use a valid Email';
                $msgClass = 'alert-danger';
            } else {
                // Passed 
                echo 'PASSED';
                // Recipient Email

                $toEmail = 'slawek.sips@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';


                //  Email headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers-Dodatkowe nagłówki  
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent 
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // Failed
                    $msg = 'Your Email was not sent';
                    $msgClass = 'alert-danger';
                }

            }
        }else {
            //Faild
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }

    }
?>

    <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>

<?php endif; ?> -->
        <div class="navbar-header">
        <a class="navbar-brand" href="index.php">My Website</a></div>
    </div>
</div>
</nav>
<div class="container">
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    </div>
    <div class="form-group">
    <label>Message</label>
    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
</div>
<br>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
<!-- </div>
    
</body>
</html> --> -->