<?php
/* 
 * Ability to determine whether we are in "office hours", "after hours", or "week-end"
 * This can drive site customizations like 24-hour service, or hiding the phone numbers after hours.
 */

$IsOfficeHours = NULL;
$IsAfterHours  = NULL;
$IsWeekDay     = NULL;
$IsWeekend     = NULL;
$CurrentDayName= NULL;
$CurrentHour   = NULL;

function initOfficeHoursDateTimeCalcs()
{
    global $IsAfterHours,$IsOfficeHours,$IsWeekDay,$IsWeekend,$CurrentDayName,$CurrentHour;

        date_default_timezone_set("Africa/Johannesburg");
        $dateArray = getdate(); /** returns array with keys mday, mon, year */
        $year   = $dateArray['year'];
        $month  = $dateArray['mon']; //numeric 1-12 ... month key is string name
        $day    = $dateArray['mday']; //numeric 1-31
        $wday   = $dateArray['weekday']; //Sunday through Saturday
        $hours  = $dateArray['hours']; //24hour format
        $minutes = $dateArray['minutes'];
        $seconds = $dateArray['seconds'];

        $CurrentDayName = $wday;
        $CurrentHour    = $hours;

        $IsWeekDay = !($wday == 'Sunday' || $wday == 'Saturday');

        //echo $wday;

        $IsWeekend = !$IsWeekDay;


        $IsOfficeHours = ($hours >= 8 && $hours < 17) && $IsWeekDay; //strictly 7am-6pm, weekdays
        $IsAfterHours  = ($hours >= 18 || $hours < 7); //before 7 and from 17h00
        //7-8 o clock is a bit of no man's land.

}

initOfficeHoursDateTimeCalcs();

/* 
echo "hello";
if ($IsWeekDay) echo "weekday";
if ($IsAfterHours) echo "After";
if ($IsOfficeHours) echo "office";
echo "-$IsOfficeHours-";
echo "blah";
 */
?>