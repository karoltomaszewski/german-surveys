<?php


$chart_date = strtotime(date("Y-m", mktime(0, 0, 0, 1, 1, 2017)));
$curr_date = strtotime(date("Y-m"));

$chart_labels = [];
$chart_values = [];
$chart_parties = [];

while ($chart_date <= $curr_date) {
    $next_date = strtotime("+1 month", $chart_date);
    $chart_counter = 0; //how many surveys in the month (between $chart_date and $next_date)

    foreach ($PHP_Array['Surveys'] as  $Surveys) {
        $date_condition = (strtotime($Surveys["Date"]) >= $chart_date && strtotime($Surveys["Date"]) < $next_date);

        if ($Surveys["Parliament_ID"] == $_GET["region"] && $date_condition && ($_GET["tasker"] == "all" || $Surveys["Tasker_ID"] == $_GET["tasker"])) {
            foreach ($Surveys["Results"] as $key => $result) {
                $index_of_party = array_search($parties[$key][0], $chart_parties);
                if ($index_of_party !== false) {
                    if (isset($chart_values[$index_of_party][count($chart_labels)])) {
                        $chart_values[$index_of_party][count($chart_labels)] += $result;
                    } else {
                        $chart_values[$index_of_party][count($chart_labels)] = $result;
                    }
                } else {
                    array_push($chart_parties, $parties[$key][0]);
                    array_push($chart_values, []);
                    // w miesiącach w których tej partii nie było (wcześniej) wstawiamy 0
                    $chart_values[count($chart_values) - 1] = array_fill(0, count($chart_labels), null);
                    $chart_values[count($chart_values) - 1][count($chart_values[count($chart_values) - 1])] = $result;
                }
            }
            $chart_counter++;
        }
    }

    // jeśli nie było sondaży w tym miesiącu
    if ($chart_counter == 0) {
        // jeśli były natomiast wcześniej
        if (count($chart_labels) != 0) {
            array_push($chart_labels, date("Y-m-d", $chart_date));
            for ($i = 0; $i < count($chart_parties); $i++) {

                $chart_values[$i][count($chart_values[$i])] = $chart_values[$i][count($chart_values[$i]) - 1];
            }
        }
    } else {
        array_push($chart_labels, date("Y-m-d", $chart_date));
        // mapowanie wartości (liczenie średniej)

        for ($i = 0; $i < count($chart_parties); $i++) {
            if (isset($chart_values[$i][count($chart_labels) - 1])) {
                $chart_values[$i][count($chart_labels) - 1] /= $chart_counter;
                $chart_values[$i][count($chart_labels) - 1] = round($chart_values[$i][count($chart_labels) - 1], 2);
            } else {
                $chart_values[$i][count($chart_labels) - 1] = null;
            }
        }
    }








    $chart_date = $next_date;
}
