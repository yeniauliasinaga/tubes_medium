<?php
	require '../koneksi.php';
    include 'fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
    <style>

        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header img{
            margin-left: 40%;
            height: 30px;
       }
        .signup{
           
            margin: auto;
            width: 500px;
            
            text-align: center;
        }
        input{
            border:  0.1px solid black;
            margin-top: 20px;
            width: 80%;
            height: 30px;
            border-radius: 10px;
            padding: 10px;
            font-size: medium;
        }
        button{
            border:  0.1px solid black;
            color: white;
            font-size: large;
            background-color: #a9c4e6;
            width: 80%;
            height: 40px;
            border-radius: 10px;  
           
        }
        button:hover{
            cursor: pointer;
            background-color: #0d5ab9;
        }
        input:hover{
            cursor: text;
        }
        a{
            color: blueviolet;
        }
        a:hover{
            text-decoration: underline;
            cursor: pointer;
            
        }
        .logos{
            display: flex;
            justify-content: center;
        }
        .img1{
            width: 18px;
            height: 18px;
        }
        .img2{
            width: 18px;
            height: 18px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="icon">
                <a href="index.html">
                    <img src="../Logo/logo.png" alt="logo"/>
                </a> 
            </div>
            <hr>
        </nav>
      </header>
    <div class="signup">

     <form action="" method="POST">
         <h1><b>Create an account</b></h1>

         <input type="text" name="nama" id="fname" placeholder="Name" required><br>
         <input type="email" name="email" id="email" placeholder="Email address" required><br>
         <input type="password" name="password" id="pass" placeholder="Password" required><br>
         <p>By creating an account, I agree to the Medium <a>Terms and Conditions</a> and <a>Privacy Statement</a>.</p>
         <button name="btn_daftar" type="submit">Continue</button>
        
     </form>
     <p>Already have an account? <a href="">Sign in</a></p>
    </div>
</body>
</html>
