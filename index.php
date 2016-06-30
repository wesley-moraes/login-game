<?php require 'connection/connection.php'; ?>
<?php 
    if(isset($_POST['Register'])){
        session_start();
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO user(fname, lname, email, username, password) VALUES('$fname','$lname','$email','$username','$password')";

        $ok = mysql_query($sql, $con);
        if($ok){
//            echo "Usuário cadastrado com sucesso";
        }else{
            echo "Usuário não cadastrado !";
        }

        mysql_close();

        header("index.php");
        
    }
?>

<!DOCTYPE html>
<html lang="en" ng-app="">
<head>
    <meta charset="UTF-8">
    <title>Final War Game!</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href="fonts.css" />
    <script type="text/javascript" src="js/angular.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper-col">
            <header>
                <div class="logo-img">
                    <img src="img/logo-Final-War.png" alt="Final War">
                </div>
                <div class="logo-text">
                    <p>Final War</p>
                </div>
            </header>
            <div class="clearfix"></div>
            <div class="menu w100">
                <nav class="w100">
                    <ul class="w100">
                        <li><a ng-click="tab=1" ng-class="{'active' : tab == 1}" href="#">Login</a></li>
                        <li><a ng-click="tab=2" ng-class="{'active' : tab == 2}" href="#">Register</a></li>
                        <li><a ng-click="tab=3" ng-class="{'active' : tab == 3}" href="#">Forgot Password</a></li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
            <!---->
            <div class="container-content" ng-show="tab == 1">
                <div class="content-title"><p>SIGN into your final war account</p></div>
                <div class="content-text">
                    <p>If you don’t have a Final War Account, please <a href="#" class="link" ng-click="tab=2" ng-class="{'active' : tab == 2}">create one</a> to access key Final War services and resources.</p>
                </div>
                <form action="" method="post">
                    <div class="form-input form-box">
                        <label for="">Email</label>
                        <input type="text">
                    </div>
                    <div class="form-input form-box">
                        <label for="">Password</label>
                        <input type="text">
                    </div>
                    <input type="submit" value="Sign In" class="btn-ghost1">
                </form>
            </div>
            <!---->
            <div class="container-content" ng-show="tab == 2">
                <div class="content-title"><p>Create a final war account</p></div>
                <div class="content-text">
                    <p>You need to create a Final War to shop in the Online and Asset Stores, participate in the Final War Community and manage your license portfolio.</p><br />
                    <p>Already have an account? <a href="#" class="link" ng-click="tab=1" ng-class="{'active' : tab == 1}">Sign in.</a></p>
                </div>
                <form action="" method="post">
                    <div class="form-input half-size-form">
                        <label for="">First Name</label>
                        <input type="text"  name="fname" ng-model="fname">
                    </div>
                    <div class="form-input half-size-form ">
                        <label for="" >Last Name</label>
                        <input type="text" name="lname" class="half-left-margin">
                    </div>
                    <div class="form-input form-box">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="form-input form-box">
                        <label for="">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="form-input form-box">
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-input form-box">
                        <label for="">Confirm Password</label>
                        <input type="password" >
                    </div>
                    <input type="submit" name="Register" value="Create Account" class="btn-ghost1">
                </form>
            </div>
            <!---->
            <div class="container-content" ng-show="tab == 3">
                <div class="content-title"><p>Reset your password</p></div>
                <div class="content-text">
                    <p>You can request instructions for resetting your password by entering the email address associated with your Final War Account below. An email will be sent with a link that will allow you to set a new password.</p>
                </div>
                <form action="" method="post">
                    <div class="form-input form-box">
                        <label for="">Email</label>
                        <input type="text">
                    </div>
                    <input type="submit" value="Email Password" class="btn-ghost1">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>