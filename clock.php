<?php
echo "Current year :- ".date("Y")."<br>"; // Current year 
echo "Current year (last two digits) :- ".date("y")."<br>"; // Last two digits of the current year 
echo "Current month (numeric) :- ".date("m")."<br>"; // Numeric representation of the month 
echo "Current month name :- ".date("M")."<br>"; // Short textual representation of the month 
echo "Current date :- ".date("d")."<br>"; // Day of the month 
echo "Current day name :- ".date("D")."<br>"; // Short textual representation of the day 
echo "Current Hours (12-hour format) :- " .date("h")."<br>"; // Current hour in 12-hour format 
echo "Current Minute :- " .date("i")."<br>"; // Current minute 
echo "Current Seconds :- " .date("s")."<br>"; // Current seconds
echo "Current Am/Pm :- " .date("a")."<br>"; // am/pm indicator
echo date_default_timezone_get()."<br>"; //default time zone 
date_default_timezone_set("Asia/Kolkata")."<br>";
echo date("H")."<br>";
echo date("d-m-y    h-i-s-a")."<br>";
$a=mktime(4,30,12,12,10,13);
echo date("d-m-y  h-i-s-a",$a)."<br>";
$b=strtotime("10:30am 19 july 2002");
echo date("  h-i-s-a d-m-y",$b)."<br>";
include("include.php");
?>
