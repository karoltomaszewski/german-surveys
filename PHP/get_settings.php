<?php

if (!isset($_GET["region"]) || intval($_GET["region"]) < 0 || intval($_GET["region"]) > 17 || intval($_GET["region"]) != $_GET["region"]) {
    $_GET["region"] = 0;
}

if (!isset($_GET["date"])) {
    $_GET["date"] = date("Y-m-d", strtotime("-30 days"));
}

if (!isset($_GET["tasker"])) {
    $_GET["tasker"] = "all";
}
