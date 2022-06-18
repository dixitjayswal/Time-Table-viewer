<?php
if (isset($_GET['generated']) && $_GET['generated'] == "false") {
    unset($_GET['generated']);
    echo '<script>alert("Timetable not generated yet!!");</script>';
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable Viewer</title>
    <link href="sem4ele.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
     <link rel="stylesheet" href="sem4ele.css">
 
</head>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.1/animate.min.css"
/>
<body>
<header class="header" >
    <h1>timetable viewer</h1>
    <a class="logo">
        <img src="assets/img/charusat_logo (1) (1).jpg" alt="">

    </a>
    <a class="logo2">

        <img src="assets/img/Depstar-final-logo%20(1).jpg" alt="">
    </a>
</header>

<section class="menu" id="menu">

    <br>
     <br>
    <br>


    <div class="box-container" >

        <div class="box" >
            <img src="assets/img/full%20timetable.jpg" alt="">
            <h3>Whole Week</h3>
            <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="WholeWeekbtn" class="btn btn-info btn-lg">Whole Week Time<br> Table(Particular Faculty)
    </button>
        </div>
        <div class="box">
            <img src="assets/img/busy%20slots%20icon.jpg" alt="">
            <h3>busy slots</h3>
            <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="Busybtn" class="btn btn-info btn-lg">Selected Day's<br> Busy Slots(All Faculty)</button>
            
        </div>
        <div class="box">
            <img src="assets/img/free%20slots%20icon.jpg" alt="">
            <h3>free slots</h3>

            <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="ALLSDFSbtn" class="btn btn-info btn-lg">Selected Day<br>Free Slots (All Faculty)</button>
        </div>
        
        <div class="box">
            <img src="assets/img/whole%20week%20free%20slots%20icon.jpg" alt="">
            <h3>whole week's free slots</h3>
            <button data-scroll-reveal="enter from the bottom after 0.2s"
                    id="WFreeSlotbtn" class="btn btn-info btn-lg">Whole Week's Free<br>Slot(Particular Faculty)
            </button>
        </div>
        
        
        

    </div>
    <div class="box-container"  style="padding:2%">
        <div align="center" class="box" style="width: 50% ,padding 10%" >
            <img src="assets/img/master%20timetable1.jpg" alt="">

            <h3>master</h3>
            <a href="Master.php" class="btn btn-info btn-lg">See master timetable</a>
        
        </div>
    </div>
    <div id="footer">
        | All Rights Reserved |  <a  style="color: #fff" target="_blank">Design & Created by : ID-20DCS028 TRUSHIT JAISWAL<br>ID-20DCS029 DIXIT JAYSWAL  <br>ID-20DCS030 ASHRUTI JETANI</a>
    </div>
    

<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
        <div style="display:none" id="WWFForm">
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Faculty No.</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ...">
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
         <div style="display:none" id="WFreeSlot">
            <form action="WFSlot.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Faculty No.</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ...">
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
        <div style="display:none" id="ALLSDFS">
            <form action="Day_selection.php" method="POST" style="overflow: hidden">
            <div class="form-group">
                <select name="DAYS"  class="btn btn-default" >
                <option value="0">Choose Day</option>
                <option value="MON">MONDAY</option>
                <option value="TUE">TUESDAY</option>
                <option value="WED">WEDNESDAY</option>
                <option value="THU">THURSDAY</option>
                <option value="FRI">FRIDAY</option>
                <option value="SAT">SATURDAY</option>
                </select>
                </div>
            <input type="SUBMIT" class="btn btn-default" name="day" vlaue="Choose options">
            </form>
        </div>
        <div style="display:none" id="Busy">
            <form action="Day_S_B.php" method="POST" style="overflow: hidden">
            <div class="form-group">
                <select name="B_DAYS"  class="btn btn-default" >
                <option value="0">Choose Day</option>
                <option value="MON">MONDAY</option>
                <option value="TUE">TUESDAY</option>
                <option value="WED">WEDNESDAY</option>
                <option value="THU">THURSDAY</option>
                <option value="FRI">FRIDAY</option>
                <option value="SAT">SATURDAY</option>
                </select>
                </div>
            <input type="SUBMIT" class="btn btn-default" name="B_day" vlaue="Choose options">
            </form>
        </div>
    </div>
</div>
</section>
<script>
    var modal = document.getElementById('myModal');
    var WholeWeekbtn = document.getElementById("WholeWeekbtn");
    var WFreeSlotbtn = document.getElementById("WFreeSlotbtn");
    var heading = document.getElementById("popupHead");
    var WWFForm = document.getElementById("WWFForm");
    var WFreeSlot = document.getElementById("WFreeSlot");
    var ALLSDFSbtn=document.getElementById("ALLSDFSbtn");
    var ALLSDFS=document.getElementById("ALLSDFS");
    var Busybtn=document.getElementById("Busybtn");
    var Busy=document.getElementById("Busy");
    var span = document.getElementsByClassName("close")[0];
    
    WholeWeekbtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        WWFForm.style.display = "block";
    }

    WFreeSlotbtn.onclick=function(){
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        WFreeSlot.style.display = "block";
        
    }
    ALLSDFSbtn.onclick=function(){
        modal.style.display = "block";
        heading.innerHTML = "Select Day";
        ALLSDFS.style.display = "block";
    }
    Busybtn.onclick=function(){
        modal.style.display = "block";
        heading.innerHTML = "Select Day";
        Busy.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
        WWFForm.style.display = "none";
        WFreeSlot.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
</script>
    
</body>
</html>

