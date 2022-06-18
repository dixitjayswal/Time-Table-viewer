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
    <title>Selected Free Slots</title>
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
                <li>Master Time Table</li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Homepage</a></li>
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
            border: 1px solid black;
            text-align: center;
            /*padding: 8px;*/
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
    <div id="TT" style="background-color: #FFFFFF">
        <table border="5"  cellspacing="1" align="center" id="timetable">
        
            <tr>
                <th>Days</th>
                <th>Time</th>
                <?php

                $q1 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * FROM teachers ORDER BY `faculty_number` ASC");

                while($row=mysqli_fetch_assoc($q1)){
                    echo"<th style=\"text-align:center\">{$row['NAME']}<br>"."{$row['faculty_number']} </th>";
                }?>
                <?php
                $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                $day =$_SESSION['DAY'];
                $days2 = array('MON','TUE','WED','THU','FRI','SAT');
                for($x=0;$x<count($days);$x++)
                {
                    if($day==$days2[$x]){
                    echo"<tr>";
                        echo"<td>";
                            echo $days[$x];
                        echo"</td>";
                        echo"<td>";
                            echo"<table>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">9:10-<br>10:00</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">10:10-<br>11:00</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">11:00-<br>12:10</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">12:10-<br>01:00</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">01:10-<br>2:00</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">02:00-<br>2:20</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">02:20-<br>03:10</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td style=\"text-align:center\">03:20-<br>04:10</td>";
                                echo"</tr>";
                            echo"</table>";
                        echo"</td>";
                        $q1 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * FROM teachers ORDER BY `faculty_number` ASC");
                while($row1=mysqli_fetch_assoc($q1)){
                    $table=$row1['faculty_number'];
                            echo"<td>";
                            $q3= mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * FROM ".$table);
                            
                            while($row2=mysqli_fetch_assoc($q3)){
                                
                                if($days2[$x]==$row2['DAY']){
                                    echo"<table>";
                                if($row2['PERIOD1']!=NULL)
                                {echo"<tr>";
                                    echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td  style=\"text-align:center\" >FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                                if($row2['PERIOD2']!=NULL)
                                {echo"<tr>";
                                    echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td>FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                                echo"<tr>";
                                    echo"<td>Lunch<br> <br></td>";
                                echo"</tr>";
                                if($row2['PERIOD3']!=NULL)
                                {echo"<tr>";
                                    echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td>FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                                if($row2['PERIOD4']!=NULL)
                                {echo"<tr>";
                                    echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td>FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                                echo"<tr>";
                                    echo"<td>BREAK<br> <br></td>";
                                echo"</tr>";
                                if($row2['PERIOD5']!=NULL)
                                {echo"<tr>";
                                    echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td>FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                                
                                if($row2['PERIOD6']!=NULL)
                                {echo"<tr>";
                                     echo"<td><br><br></td>";
                                echo"</tr>";}
                                else{
                                    echo"<tr>";
                                    echo"<td>FREE<br>  <br></td>";
                                echo"</tr>";  
                                }
                            echo"</table>";
                                }
                            }
                            echo"</td>";
                        }
                    echo"<tr>";

                    }
                    
                }
                ?>
            <tr>

    </div>

</div>



</body>
</html>
