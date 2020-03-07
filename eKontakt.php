
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    
    $mailTo = 'janis@pampoukidis.de';
    $headers = "From: ".$mailFrom;
    $txt = "Du hast eine Email von".$name."bekommen.\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: Kontakt.html")
}


?>