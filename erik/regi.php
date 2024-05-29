<html>
<head>
<link rel="stylesheet" href="regi.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

  
            <form action="regi.php" id="box" class="margin" method="post">
                <h1 style="color: white;">Ini Form Register</h1>
                <label for="name">Username: </label><br>
                <input type="name" id="name" name="username" class="inputbox" placeholder="Input your username"><br>
        
                <label for="password">Password:</label><br>
                <input type="password" id="pass" name="password" class="inputbox" placeholder="Input your password"><br>
        
                <label for="email">Email: </label><br>
                <input type="email" id="email" name="email" class="inputbox" placeholder="Input your e-mail"><br>
        
                <label for="name">Hobi: </label><br>
                <input type="text" id="hobi" name="hobi" class="inputbox" placeholder="Input your hobi"><br>
        
                
        
                <label for="name">Gender: </label><br>
                <input type="radio" id="jk" name="gender" value="Pria">
                <label for="pria">Pria</label><br>
                <input type="radio" id="jk" name="gender" value="Wanita">
                <label for="pria">Wanita</label><br>
        
                <label for="name">Role:</label><br>
                <select name="role" id="role">
                <option value="Admin">Admin</option>
                <option value="Maintance">Maintance</option>
                <option value="User">User</option>
                <option value="Worker">Worker</option>
                </select><br><br>

        
        
        
        
        
        
                <input style="margin-left:40%" type="submit" value="Submit" class="button">
                </form>
                <a href="login.php"><button>LOGIN</button></a>
                
                <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['submit'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $hobi = $_POST['hobi'];
      $gender = $_POST['gender'];
      $role = $_POST['role'];

      // Membuat Query
      $query = "INSERT INTO userlogin (username, password, email, hobi, gender, role) VALUES('".$username."', '".$password."', '".$email."', '".$hobi."', '".$gender."' , '".$role."')";

      $result = mysqli_query($conn, $query);

      if($result){
        header("location: regi.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>