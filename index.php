<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        if (isset($_GET['name'])) {
           // echo 'yes';
            echo $_GET['name'];
            echo $_GET['frisurname'];
            echo $_GET['fricontact'];
            echo $_GET['friaddr'];
            $name = $_GET['name'];
            $frisurename = $_GET['frisurname'];
            $fricontact = $_GET['fricontact'];
            $friaddr = $_GET['friaddr'];

          $conn = mysqli_connect('localhost','root','','mydatabase_db')

          $sql = "INSERT INTO friends(  friend_name,surname,contact,addr)VALUES('$name','$surename','$contact','$addr')";


          mysqli_query($conn,$sql);

          mysqli_close($conn);


          echo 'Data Sucees';
        }else {
            echo 'no' ;
            
        }
        
        ?>
     
    </body>
</html>