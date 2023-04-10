<!DOCTYPE html>
<html>
<body>
<?php
$numofdays=date("t");//numbers of days in the current month
$first=date("Y-m") ."-". "1";//get the current year and month, join it with firstday of the month
$day=strtotime($first);//get the timestamp value of $first
$firstday= date("w",$day);//get the numeric representation of the firstday in the month
$hasdaystarted=false; //have we reached the first day of the month
$dayscounter=0;
$numofdays=$numofdays+$firstday;
?>
<DOCTYPE html>
<html lang=eng>
<head>
<title>Today's Calendar</title>
<style>
 
    html, body{
    width:100%;
    height:100%;
    margin:0%;
    font-family:"helvetica","verdana","calibri", "san serif";
    padding:0%;
    border:0%;
    font-weight:bold;
    }
.date:hover{
    background-color:#ededed;
    cursor:pointer;
    }
.col2{
    height:1950px;
    background-image:url(../images/live137244_goldensparks.jpg);
    background-repeat:no-repeat;
    padding-top:30px;
    }
 
.container_comp{
    width:880px;
    height:700px;
    margin:0 auto;
    padding:40px;
    background-color:#f7f7f7;
    border-radius:20px;
    border:1px solid #999999;
    margin-bottom:25px;
    }
 
 
div.wrapper{
    display:block;
    width:100%;
    margin:0;
    text-align:left;
    background-color:#f3e6c3;
}
.day{
    width:109px;
    height:25px;
    color:#330000;
    float:left;
    padding:5px;
    text-align:center;
    font:bold 16px arial;
    border-bottom:1px solid #999999;
    border-right:1px solid #999999;
    background-color:#cccccc;
    }
     
     .container_calendar{
    width:840px;
    height:541px;
    margin:0 auto;
    background-color:#f7f7f7;
    border-radius:20px;
    border:2px solid #999999;
    margin-bottom:25px;
    }
     
     
     .date{
    width:119px;
    height:100px;
    float:left;
    border-bottom:1px solid #999999;
    border-right:1px solid #999999;
    background-color:#ffffff;
    }
     
</style>
</head>
    <div class="wrapper">
     
     <div class="col2" style="height:850px">
            <div class="container_comp">
     
     
<?php
echo "<div align=center><h1>" . date("F Y")   . "<h1></div>";
?>
 
 
<div class=container_calendar>
<div>
 <div class="day" style="border-top-left-radius:18px;">Sunday</div>
 
 
<div class=day>Monday</div> <div class=day>Tuesday</div> <div class=day>Wednesday</div> <div class=day>Thursday</div> <div class=day>Friday</div>
<div class="day" style="border-top-right-radius:18px;">Saturday</div>
<div class="clear"></div>
</div>
<?php
for($I=0; $I<$numofdays; $I++){
if($I==$firstday)
$hasdaystarted= true;
if($hasdaystarted){
$dayscounter++;
echo "<div class=date>$dayscounter </div>";
 
}
 
else
echo "<div class=date>  </div>";
 
}
?>
</div>
</div>
</div>
</html>

</body>
</html>