<?php

//partie 

$parties = [];

foreach ($PHP_Array["Parties"] as $key => $Party) {
    $parties[$key] = [translate($Party["Shortcut"]), translate($Party["Name"])];
}




$results = []; // 0 => suma wyników, 1 => skrót nazwy partii, 2 => nazwa partii, 3 => liczba występowań w sondażach
$all_surveys = "";
$counter = 0;
$active_taskers = []; //sondażownie których sondaże się wyświetlą


foreach ($PHP_Array['Surveys'] as  $Surveys) {
    $date_condition = (strtotime($Surveys["Date"]) >= strtotime($_GET["date"]));

    //uzupełnianie taskerów
    if ($Surveys["Parliament_ID"] == $_GET["region"] && $date_condition) {
        if (!in_array($Surveys["Tasker_ID"], $active_taskers)) {
            array_push($active_taskers, $Surveys["Tasker_ID"]);
        }
    }

    // parlament, europarlament lub wybrany Land. Szczegółowe informacje.
    if ($Surveys["Parliament_ID"] == $_GET["region"] && $date_condition && ($_GET["tasker"] == "all" || $Surveys["Tasker_ID"] == $_GET["tasker"])) {
        $all_surveys .= "<b>" . $PHP_Array['Taskers'][$Surveys["Tasker_ID"]]["Name"] . "</b>, " . $Surveys["Date"] . "<br><div class='progress'>";
        foreach ($Surveys["Results"] as $key => $result) {
            $all_surveys .= "<div class='progress-bar' name='" . $parties[$key][0] . "' style='width: " . $result . "%'  title='" . $parties[$key][0] . " " . $result . "%'>$result</div>";
            if (!isset($results[$key])) {
                $results[$key] = [0, $parties[$key][0], $parties[$key][1], 0];
            }
            $results[$key][0] += $result;
            $results[$key][3]++;
        }
        $counter++;
        $all_surveys .= "</div>";
    }
}

function avg($r)
{
    global $counter;
    return [round(($r[0] / $counter), 1), $r[1], $r[2], $r[3]];
}



$results = array_map('avg', $results);
usort($results, function ($a, $b) {
    return ($a[0] <=> $b[0]) * -1;
});
