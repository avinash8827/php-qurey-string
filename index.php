<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP QueryString</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <?php  
           

            if(isset($_GET['name'])){ 
                


                echo $_GET['name'];
                echo $_GET['course'];

                $name = $_GET['name'];
                $course = $_GET['course'];
                $contact = $_GET['contact'];

                
                $conn = mysqli_connect('localhost','root','','mydatabase_db');

                $sql = "INSERT INTO students(student_nam,student_cours,student_contact)VALUES('$name','$course','$contact')";



                mysqli_query($conn,$sql);


                echo 'Data Inserted Successfully';




              

                mysqli_close($conn);



            }else{
                
                echo 'No Parameter';
            }

         
        ?>
              <form action="">
            <fieldset>
                <legend>Persanol information</legend>
                <div>
                    <label for="sn">student Name :</label>
                    <input type="text" id="sn" name="name" required>
                </div>
                <div>
                    <label for="sc">student coure :</label>
                    <input type="text" id="sc" name="coure" required>
                </div>
                <div>
                    <label for="scn">student contact:</label>
                    <input type="text" id="scn" name="contact" required>
                </div>

            </fieldset>
            <div >
            <input type="submit" value="submit"class="bt">
        </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
    
        </script>
    </body>
</html>