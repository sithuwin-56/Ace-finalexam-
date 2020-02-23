<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>(BUD001)Student Search</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/container.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
    <script type="text/javascript" src="JavaScript/general.js"></script>
    <script type="text/javascript" src="JavaScript/accordion-menu.js"></script>
    <script type="text/javascript">
    window.onload = function() {
        menu();
        var param = getPara('flag');
        if (param == 1) {
            document.getElementById('list').style.display = "none";
        } else if (param == 2) {
            document.getElementById('list').style.display = "block";
        }

    }

    function changeName() {
        var ascName = document.getElementById('ascName').style.display;
        var dscName = document.getElementById('dscName').style.display;
        if (ascName == 'none') {
            document.getElementById('ascName').style.display = 'inline';
            document.getElementById('dscName').style.display = 'none';
        } else if (ascName == 'inline') {
            document.getElementById('ascName').style.display = 'none';
            document.getElementById('dscName').style.display = 'inline';
        }
    }

    function searchList() {
        document.getElementById('list').style.display = "block";
    }

    function resetForm() {
        document.getElementById('message').innerHTML = "Message";
        document.getElementById('list').style.display = "none";
    }
    </script>
</head>

<body class="main_body">


    <div id="header">
        <div id="title">
            <a href="M00001.html">Java Web Development Exam</a>
        </div>
        <div id="menuLoginTime">
            <table>
                <tr>
                    <td>User</td>
                    <td>: U999999 Kyaw Kyaw</td>
                </tr>
                <tr>
                    <td>Current Date</td>
                    <td>: YYYY/MM/DD hh:mm:ss</td>
                </tr>
            </table>
        </div>
        <input id="btn_logout" class="button" type="button" value="Logout" onclick="location.href='LGN001.html'">
    </div>

    <div id="container">
        <div id="left_menu">
            <!-- menu html code exist the menu function of general.js -->
        </div>
        <div id="main_contents">
            <div id="contents">
                <div class="search_form">
                    <h3>Student Search Page</h3>
                    <form>
                        <table class="tableForm">
                            <tr>
                                <td class="tblLabel">Student No.</td>
                                <td class="tblInputShort"><input type="text" name="roleUserGroupCode" value="STU0001"
                                        class="txt" /> </td>
                                <td class="tblLabel">Student Name</td>
                                <td class="tblInputShort">
                                    <input type="text" name="roleUserGroupName" value="Kyaw Kyaw" class="txt" /></td>
                                <tr />
                            <tr>
                                <td class="tblLabel">Class Name</td>
                                <td class="tblInputNormal" colspan="3"><input type="text" id="companyName"
                                        value="Java Web Development" class="txtlong" /></td>
                            </tr>
                        </table>
                        <br />
                        <a href="show.php"><input type="button" value="Search" onClick="searchList()" class="button" />
                        </a>
                        <input type="reset" value="Clear" onClick="resetForm()" class="button" />
                        <br /><br />
                        <div id="errormsg">
                            <label id="message">Message</label>
                        </div>
                    </form>
                    <div id="list">
                        <form name="listForm">
                            <Br /><Br />
                            <br />
                            <table class="resultTable">
                                <tr class="tblHeader">
                                    <th width="5%">No</th>
                                    <th width="10%">Student No</th>
                                    <th width="25%">Student Name</th>
                                    <th width="40%">Class Name</th>
                                    <th width="10%">Registered Date</th>
                                    <th width="10%">Status</th>
                                </tr>
                                <tr>
                                    <td>01 </td>
                                    <td>STU0001 </td>
                                    <td><a href="BUD002-01.html">Kyaw Kyaw </a></td>
                                    <td>Java Web Development</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>


                                <tr>
                                    <td>02 </td>
                                    <td>STU0002 </td>
                                    <td><a href="BUD002-01.html">Aung Aung </a></td>
                                    <td>Programming Fundamental 1</td>
                                    <td>2016/09/16 </td>
                                    <td>Passed</td>
                                </tr>

                                <tr>
                                    <td>03 </td>
                                    <td>STU0003 </td>
                                    <td><a href="BUD002-01.html">Zaw Zaw </a></td>
                                    <td>PHP Basic</td>
                                    <td>2016/09/16 </td>
                                    <td>Failed</td>
                                </tr>

                                <tr>
                                    <td>04 </td>
                                    <td>STU0004 </td>
                                    <td><a href="BUD002-01.html">Mya Mya </a></td>
                                    <td>Programming Fundamental 2</td>
                                    <td>2016/09/16 </td>
                                    <td>Passed</td>
                                </tr>

                                <tr>
                                    <td>05 </td>
                                    <td>STU0005</td>
                                    <td><a href="BUD002-01.html">Hla Hla </a></td>
                                    <td>Software Engineering 1</td>
                                    <td>2016/09/16 </td>
                                    <td>Passed</td>
                                </tr>

                                <tr>
                                    <td>06 </td>
                                    <td>STU0006</a> </td>
                                    <td><a href="BUD002-01.html">Toe Toe </a></td>
                                    <td>Software Engineering 2</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>

                                <tr>
                                    <td>07 </td>
                                    <td>STU0007</td>
                                    <td><a href="BUD002-01.html">Aung Kyaw </a></td>
                                    <td>Software Engineering 2</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>
                                <tr>
                                    <td>08 </td>
                                    <td>STU0008</td>
                                    <td><a href="BUD002-01.html">Win Aung </a></td>
                                    <td>Android Development</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>
                                <tr>
                                    <td>09 </td>
                                    <td>STU0009</td>
                                    <td><a href="BUD002-01.html">Kyawt Kyawt </a></td>
                                    <td>Microsoft .Net Development</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>
                                <tr>
                                    <td>10 </td>
                                    <td>STU0010</td>
                                    <td><a href="BUD002-01.html">Nay Chi </a></td>
                                    <td>PHP Basic</td>
                                    <td>2016/09/16 </td>
                                    <td>Attending</td>
                                </tr>
                            </table>
                            <br />

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <span>Copyright &#169; ACE Inspiration 2016</span>
    </div>
</body>

</html>