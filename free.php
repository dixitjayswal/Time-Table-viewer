<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Whole Week Free Slots</title>
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Hello <?php echo $_SESSION['loggedin_id']; ?>
                 (<?php echo $_SESSION['loggedin_name']; ?>)</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>

<br>


<div>
    <br>
    <style>
        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 2px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
    <div id="TT" style="background-color: #FFFFFF">
        <table border="2" cellspacing="3" align="center" id="timetable">
            <caption><strong><br><br>
                    <?php
                    if (isset($_SESSION['loggedin_name'])) {
                        echo $_SESSION['loggedin_name'];

                    }
                    ?>
                </strong></caption>
            <tr>
                <td style="text-align:center">WEEKDAYS</td>
                <td style="text-align:center">9:10-<br>10:00</td>
                <td style="text-align:center">10:10-<br>11:00</td>
                <td style="text-align:center">11:00-<br>12:10</td>
                <td style="text-align:center">12:10-<br>01:00</td>
                <td style="text-align:center">01:10-<br>2:00</td>
                <td style="text-align:center">02:00-<br>2:20</td>
                <td style="text-align:center">02:20-<br>03:10</td>
                <td style="text-align:center">03:20-<br>04:10</td>            </tr>
            <tr>
                <?php
                $table = " " . $_SESSION['loggedin_id'] . " ";
                $tid=$_SESSION['loggedin_id'];
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM" . $table);
                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                    $i = -1;
                
                    while ($row = mysqli_fetch_assoc($q)) {
                        $i++;
                        echo"<tr><td style=\"text-align:center\">$days[$i]</td>";
                        if($row['PERIOD1']==NULL or $row['PERIOD1']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }
                        if($row['PERIOD2']==NULL or $row['PERIOD2']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }
                        echo"<td style=\"text-align:center\">LUNCH</td>";
                        if($row['PERIOD3']==NULL or $row['PERIOD3']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }
                        if($row['PERIOD4']==NULL or $row['PERIOD4']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }
                        echo"<td style=\"text-align:center\">BREAK<br> <br></td>";
                        if($row['PERIOD5']==NULL or $row['PERIOD5']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }
                        
                        if($row['PERIOD6']==NULL or $row['PERIOD6']=="-<br>-"){
                            echo"<td style=\"text-align:center\">FREE</td>";
                        }
                        else
                        {
                            echo"<td style=\"text-align:center\"></td>";
                        }   
                    }
                ?>
    </div>

</div>
  

</body>
</html>
