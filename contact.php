<?php 

    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['name'];
        $Email = $_POST['email'];
        $Subject = $_POST['Subject'];
        $Companyname = $_POST['company'];

        if(empty($UserName) || empty($Email) || empty($Subject) || empty($Companyname))
        {
            header('location:index.php?error');
        }
        else
        {
            $to = "joyjames.work@gmail.com";

            if(mail($to,$Subject,$Msg,$Email))
            {
                header("location:index.php?success");
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>