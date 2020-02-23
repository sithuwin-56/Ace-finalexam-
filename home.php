<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();
    $uname="";
    if(isset($_SESSION["login"])==false){
        header("location:login.php");
    }else{
        $uid=$_SESSION["user"];
    }?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>(M00001)Top Menu</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/container.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
    <script type="text/javascript" src="JavaScript/accordion-menu.js"></script>
    <script type="text/javascript" src="JavaScript/general.js"></script>
    <script type="text/javascript">
    window.onload = function() {
        menu();
    }
    </script>
</head>

<body class="main_body">

    <div id="header">
        <div id="title">
            <a href="home.php">PHP Web Development Exam</a>
        </div>
        <div id="menuLoginTime">
            <table>
                <tr>
                    <td>User</td>
                    <td>:<?=$uid?></td>
                </tr>
                <tr>
                    <td>Current Date</td>
                    <td>: YYYY/MM/DD hh:mm:ss</td>
                </tr>
            </table>
        </div>
        <input id="btn_logout" class="button" type="button" value="Logout" onclick="location.href='login.php'">
    </div>

    <div id="container">
        <div id="left_menu">
            <!-- menu html code exist the menu function of general.js -->
        </div>
        <div id="main_contents">
            <div id="contents">
                <h4 style="color:brown;">Welcome...!<br /><br />
                    This is the final exam project of the PHP Web Development Course.</h4>

            </div>

        </div>

    </div>

    <div class="footer">
        <span>Copyright &#169; ACE Inspiration 2016</span>
    </div>

</body>

</html>