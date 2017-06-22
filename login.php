<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css" media="all">
        <title>SCWDesigns - Admin Login</title>
    </head>

    <body class="admin-login">
        <div class="opacity-layer"></div>

        <div class="login-container fadeIn card">
            <div class="header">
                <img src="images/logo.png" />
            </div>

            <div class="login-group">
                <div class="input-field">
                    <input type="text" id="user-email" />
                    <label for="user-email">Email Address</label>
                </div>
                <div class="input-field">
                    <input type="password" id="user-password" />
                    <label for="user-password">Password...</label>
                </div>
            </div>

            <div class="footer right-align">
                <a href="#!" class="btn waves-effect waves-light pink lighten-2">Login</a>
            </div>
        </div>


        <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="bower_components/materialize/bin/materialize.js"></script>
        <script type="text/javascript">
            $('input').focus(function() {
                $('.opacity-layer').addClass('darken');
            }).blur(function() {
                $('.opacity-layer').removeClass('darken');
            });
        </script>
    </body>
</html>