<?php
include_once 'model/db.php';
login_page_session_check();
?>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Admin</title>
            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
            <!-- <link rel="stylesheet" href="css/animate1.css"> -->
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <!-- Custom Stylesheet -->
            <link rel="stylesheet" href="css/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        </head>
        <body>
            <div class="container">
                <div class="top">
                    <h1 id="title" class="hidden"><span id="logo"></span></h1>
                </div>
                <?php
            		if (isset($_GET['status'])) {
            			   if ($_GET['status'] == "nouser") {
            			    echo "<div class='error fadeOut animated' ><strong>Username/Password</strong> Incorrect.</div>";
            			}elseif ($_GET['status'] == "forget") {
            			    echo "<div class='error fadeOut animated' ><strong>Mail id Incorrect</strong> Something went wrong.</div>";
            			}elseif ($_GET['status'] == "forget_success") {
            			    echo "<div class='error fadeOut animated' ><strong>Reset password</strong> has been sended.</div>";
            			}
            		}
	            ?>
                    <div class="login-box animated fadeInUp">
                        <form id="login_form" method="post" action="controller/login_controller.php">
                            <div class="box-header">
                                <h2>Log In</h2>
                            </div>
                            <!-- <div class="error"></div> -->
                            <label for="username">Username</label>
                            <br/>
                            <input type="email" id="username" name="email">
                            <br/>
                            <label for="password">Password</label>
                            <br/>
                            <input type="password" id="password" name="upassword">
                            <br/>
                            <button type="submit">Log In</button>
                            <br/>
                        </form>
                        <a href="view/signup.php">Sign up</a>
                    </div>
            </div>
        </body>
        <script>
        </script>

        </html>