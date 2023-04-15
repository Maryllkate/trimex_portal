<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image" href="img/acess_icon.png">

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen">
    
    <link rel="icon" type="image" href="img/acess_icon.png">

    <title>login</title>

</head>
<body>
    <div class="container"> 
        <div class="col-left">
            <img class="front-image" src="img/front.jpg" alt="front-image">
        </div>
        
        <div class="col-right" action="./dashboard.php" method="POST">
            <section class="right-banner">
            <h3>WELCOME</h3>
        </div>

            <div class="login-section">

                <div class="username">
                <label for="username">Username</label>
                <input type="text" class="ant-input text-input error" placeholder="Enter Username" required>
                </div>

                <div class="password">
                <label for="password">Password</label>
                <input type="password" class="ant-input text-input error" placeholder="Enter Password" required>
                </div>
    
                <button type="login" class="btn btn-login">
                    <span>login</span>
                </button>

            </div>

        </div>
    </div>
    

 <!-- script link -->
    <script src="js/script.js"></script>
</body>
</html>
