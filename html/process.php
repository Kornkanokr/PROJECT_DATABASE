<?php include 'connect.php'; ?>

<?php

    $Sname = $_POST['name'];
    $cid = $_POST['cid'];
    $Saddress = $_POST['address'];
    $Sphoneno = $_POST['phoneno'];
    $date = $_POST['date'];
    $Rname = $_POST['Rname'];
    $Raddress = $_POST['Raddress'];
    $Rphoneno = $_POST['Rphoneno'];


    mysqli_query($connect,"INSERT INTO shiping information (Sname,cid,Saddress,Sphoneno,date,Rname,Raddress,Rphoneno)
                            VALUES ('$Sname','$cid','$Saddress','$Sphoneno','$date','$Rname','$Raddress','$Rphoneno')");
    
?>