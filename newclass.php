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
    <title>(BUD003)Class Register</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/container.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
    <script type="text/javascript" src="JavaScript/general.js"></script>
    <script type="text/javascript" src="JavaScript/accordion-menu.js"></script>
    <script type="text/javascript">
    window.onload = function() {
        menu();

    }

    function insert() {
        var con = confirm("Are you sure to register?");
        if (con) {
            document.getElementById('errormsg').innerHTML = "Successfully Saved!";
        }

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
                <h3>Class Register</h3>
                <label id="errormsg"> Message </label><br /><br /><br />
                <?php
                        $msg="";
                        if(isset($_POST["cid"])&&isset($_POST["cname"])){
                            $cid=$_POST["cid"];
                            $cname=$_POST["cname"];
                            $con=mysqli_connect("localhost","root","","finalexam");
                            if($con){
                                $result=mysqli_query($con,"INSERT INTO `class` VALUES('$cid','$cname')");
                                if($result){
                                    $msg="Successfully Saved!";
                                }else{
                                    $msg=mysqli_error($con);
                                }
                                mysqli_close($con);
                            }
                        }
                    ?>
                <form name="registerForm" method="post" id="form1">
                    <table class="tableForm">
                        <tr>
                            <td class="tblSingleLabel"> Class ID *</td>
                            <td class="tblSingleInput"><input type="text" id="txtUserId" class="txt_popup" name="cid"
                                    require="required" value="CL001" /></td>
                            <td><span id="cid-err"></td>
                        </tr>
                        <tr>
                            <td class="tblSingleLabel">Class Name *</td>
                            <td class="tblSingleInput"><input type="text" class="txtlong_popup" id="txtUserName"
                                    name="cname" value="Java Web Development" /></td>

                        </tr>
                        <tr>
                            <td colspan="2"><?=$msg?></td>
                        </tr>

                    </table>
                    <br />

                    <input type="submit" value="Register" class="button" onClick="javascript:insert()" />
                </form>

                <br /><br /><br />
            </div>
        </div>

    </div>

    <div class="footer">
        <span>Copyright &#169; ACE Inspiration 2016</span>
    </div>
</body>

</html>