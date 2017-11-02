<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aromacology Admin</title>

        <link rel="icon" type="image/png" href="images/favicons/Aromacology-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-96x96.png" sizes="96x96">  

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

        <script type="text/javascript">
            window.onload = function () {

                function GetURLParameter(sParam)
                {
                    var sPageURL = window.location.search.substring(1);
                    var sURLVariables = sPageURL.split('&');
                    for (var i = 0; i < sURLVariables.length; i++)
                    {
                        var sParameterName = sURLVariables[i].split('=');
                        if (sParameterName[0] === sParam)
                        {
                            return sParameterName[1];
                        }
                    }
                }

                var tech = GetURLParameter('error');
                if (tech === "1") {
                    document.getElementById("user_form").className += " has-error has-feedback";
                } else if (tech === "2") {
                    document.getElementById("pass_form").className += " has-error has-feedback";
                }
            };
        </script>

<?php
        session_start();
        require_once 'config.php';
        ?>

    </head>

    <body class="vertical-align">

        <div class="container-fluid margin-container text-center">
            <div class="row logo-row" >
                <div class="container-fluid">
                    <img class="img-responsive" style="margin:0 auto; max-width: 50%;  width: 50%;" src="images/aromacology-logo.png" alt="aromacology">
                </div>
            </div>
            <div class="container-fluid login-form" >

                <form class="login" action="login.php" method="POST"  >

                    <div class="row" >
                        <div id="user_form" class="form-group ">
                            <div class="input-group medium-form">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" name="uname" placeholder="Username"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="pass_form" class="form-group">
                            <div class="input-group medium-form">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input  type="password" class="form-control" name="pword" placeholder="Password"/>      
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col-lg-offset-8">
                            <button type="submit" name="submit" class="btn btn-default btn-block  login-button">SUBMIT</button> 
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </body>

</html>