<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>Appoint School </title>
        <!--Login CSS-->
        <link rel="stylesheet" href="login-screen/css/style.css"> 
    </head>

    <body>
            <div class="wrapper">
                <div class="container">
                    <h1>ยินดีต้อนรับ</h1>
                    <h2>โรงเรียนอนุบาลหมีน้อย</h2>
                    <form class="form" method="POST" action="/control/control.login.php">
                        <input name="username" type="text" placeholder="Username">
                        <input name="password" type="password" placeholder="Password">
                        <button type="submit" id="login-button">เข้าสู่ระบบ</button>
                    </form>
                </div>
                <ul class="bg-bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <footer>
                <!--jquery login-->
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src="login-screen/js/index.js"></script>\
            </footer>
    </body>
</html>


