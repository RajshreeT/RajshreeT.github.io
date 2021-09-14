<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form | Submission </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">            
        <h2> <?php echo ' Thank you ' .($_POST["title"])." ".$_POST['fname']." ".$_POST['lname']; ?><br> </h2>
        You have submitted the following details:<br>
        Date of Birth:<?php echo $_POST['bdate'];?><br>
        Telephone: <?php echo $_POST['phone'];?><br>
        File Uploaded:<?php 
                    if (!empty($_POST["file"])) {
                    echo  $_POST['file'];  
                } else {    
                    echo " No File Uploaded";
                }?><br>
                    Message:<?php 
                    if (!empty($_POST["message"])) {
                    echo  $_POST['message'];  
                } else {    
                    echo " No message";
                }?>   
    </div>
</body>
</html>
