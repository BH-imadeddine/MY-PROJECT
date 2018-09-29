<?php


$username=  isset($_POST['username']) ? $_POST['username']:'';

$password=isset($_POST['password']) ? $_POST['password']:'';
     

if($username&&$password)
{
      
   
    $connect =  mysql_connect("localhost","root","") ;
    mysql_select_db("parcauto") or die("not conecte");
    $query =  mysql_query("select * from admin where login='$username'");
    $query1 =  mysql_query("select * from gerant where login_G='$username'");
 
    
    $numrows=  mysql_num_rows($query);
     $numrows1=  mysql_num_rows($query1);
    
    if($numrows!=0)
    {
        while ($row= mysql_fetch_assoc($query) )
        {
            
            $dbusername =$row['login'];
              $dbpassword =$row['modpasse'];
              $fonctio=$row['etat'];
        }
        
        if($username==$dbusername&&$password==$dbpassword)
        {
            session_start();
           header("location:../Formulaire/Main_Principale.php");
            $_SESSION['username']=$dbusername;
             $_SESSION['etat']=$fonctio;
              $_SESSION['nom']=$no;
               $_SESSION['prenom']=$pr;
            
        }else
        {
          header('location:../index.php?error=2');
        }
        
    }
    else if ($numrows1!=0)
    {
        
         while ($row= mysql_fetch_assoc($query1) )
        {
            
            $dbusername =$row['login_G'];
              $dbpassword =$row['modpass_G'];
              $fonctio=$row['etat_G'];
        }
        
        if($username==$dbusername&&$password==$dbpassword)
        {
              session_start();
            header("location:../Formulaire/Main_Principale.php");
            $_SESSION['username']=$dbusername;
             $_SESSION['etat']=$fonctio;
             $_SESSION['nom']=$no;
               $_SESSION['prenom']=$pr;
        }else
        {
        
           header('location:../index.php?error=2 ');
        }
    }else
        { 
  header('location:../index.php?error=1 ');
    }
}

?>

