<?php
function render_calendar($month, $year) {
    $monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfWeek = date('w', strtotime("$year-$month-01"));

    echo "<table class='calendar-table' border='1'>";
    echo "<tr>";
    $days = ["日", "月", "火", "水", "木", "金", "土"];
    foreach ($days as $day) {
        echo "<th>$day</th>";
    }
    echo "</tr>";

    echo "<tr>";
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }

    for ($day = 1; $day <= $monthDays; $day++) {
        echo "<td>$day</td>";
        if (($day + $firstDayOfWeek) % 7 == 0) {
            echo "</tr><tr>";
        }
    }
    echo "</tr></table>";
}
?>

