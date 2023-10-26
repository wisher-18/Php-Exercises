<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username && $password){
                $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
                if($connection){
                    echo "We are connected";
                }
                else{
                    die("Database connection failed");
                }
                $query = "INSERT INTO users(username,password) ";
                $query .= "VALUES ('$username','$password')";
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die('Query Failed');
                }

            }
        }    
    ?>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" class="btn btn-primary" value="submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>