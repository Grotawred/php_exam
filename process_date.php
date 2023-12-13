<?php

require_once('Date.php');

    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];

    $date = new Date("$year-$month-$day");
    echo "Day: " . $date->getDay().PHP_EOL;
    echo "Month (en): " . $date->getMonth().PHP_EOL;
    echo "Month (ua): " . $date->getMonth('ua').PHP_EOL;
    echo "Year: " . $date->getYear().PHP_EOL;
    echo "Weekday (en): " . $date->getWeekDay().PHP_EOL;
    echo "Weekday (ua): " . $date->getWeekDay('ua').PHP_EOL;


    $date->addDay(5);
    echo "After adding 5 days: " . $date.PHP_EOL;

    $date->subMonth(2);
    echo "After subtracting 2 months: ".$date->format('Y-m-d') . PHP_EOL;

?>
