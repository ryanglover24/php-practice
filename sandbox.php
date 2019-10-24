<?php 

//sessions
    if(isset($_POST['submit'])) {

        //adding cookie for gender using setcookie method with the name of the cookie The value and time it exists on users PC so here current time plus seconds in day
        setcookie('gender', $_POST['gender'], time() + 86400);


        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: index.php');
    }


?>

<!DOCTYPE html>

<html>

    <head>
        <title>php tuts</title>
    </head>
    <body>
        
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="submit">
       </form> 
      


    </body>
</html>