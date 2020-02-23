<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
    session_start();
    $uid="";
    $pass="";
    $errormsg="";
    if(isset($_POST["id"])&& isset($_POST["pass"])){
        $uid=$_POST["id"];
        $pass=$_POST["pass"];
        // if($uid=="php9" and $pass=="123"){
        //     $_SESSION["login"]="true";
        //     header("location:home.php");
        // }
        // else{
        //     $errormsg="Incorrect UserId and/or Password";
        // }
        // function userisinvalid($uid,$pass){
        //     if($uid=="sithuwin" and $pass=="123") return true;
        //     if($uid=="win" and $pass=="123") return true;
        //     return false;
        // }
        if( userisinvalid($uid,$pass) )//true==true
        {
            $_SESSION["login"]="true";
            $_SESSION["user"]=$uid;
            header("location:home.php");
        }
        else{
            $errormsg="Incorrect UserID and/or Password";
        }
       
    }
    function userisinvalid($uid,$pass){
           //sql injection lok lo ma ya ag yay nee
           $sql="SELECT * FROM `user` WHERE `id`=? AND `password`=?";
           $con=mysqli_connect("localhost","root","","finalexam");
           $stmt=mysqli_stmt_init($con);
           mysqli_stmt_prepare($stmt,$sql);
           mysqli_stmt_bind_param($stmt,"ss",$uid,$pass);//ss mean ? yk data type
           mysqli_stmt_execute($stmt);
           $result=mysqli_stmt_get_result($stmt);
           $row=mysqli_fetch_array($result);
           if($row) return true;
           return false;
    }
 ?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>(LGN001)login </title>
    <link rel="stylesheet" type="text/css" href="stylesheets/container.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/base.css" />


    <SCRIPT type="text/javascript">
    window.history.forward();

    function noBack() {
        window.history.forward();
    }
    </SCRIPT>

</head>

<body class="main_body" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
    <div id="header">
        <div id="title">
            <u>PHP Web Development Exam</u>
        </div>
    </div>

    <div id="container">
        <div id="main_contents">
            <div style="margin-left:35%">
                <form action="" method="post" name="confirm">
                    <br />
                    <table class="sortName">
                        <tr>
                            <td colspan="2" align="center">
                                <h3>Login</h3>
                            </td>
                        </tr>
                        <tr align="left">
                            <td id="errormsg">
                                <?=$errormsg?>
                            </td>
                        </tr>

                        <tr align="left">
                            <td>
                                User ID
                            </td>

                            <td>
                                <input type="text" class="normal_width1" name="id" />
                            </td>
                        </tr>

                        <tr align="left">
                            <td><br />
                                Password
                            </td>

                            <td>
                                <input type="password" class="normal_width1" name="pass" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><br />
                                <table align="center">
                                    <tr>
                                        <td>
                                            <input name="Submit" type="submit" value="Login" class="button" />
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div> <!-- end of main contents -->
    </div><!-- end of container -->

    <div class="footer">
        <span>Copyright &#169; ACE Inspiration 2016</span>
    </div>

</body>

</html>