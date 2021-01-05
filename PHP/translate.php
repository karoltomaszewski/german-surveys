<?php

function translate($x)
{
    switch ($x) {
        case "Bundestag":
            $y = "do Bundestagu";
            break;
        case "Baden-Württemberg":
            $y = "Badenia-Wirtembergia";
            break;
        case "Bayern":
            $y = "Bawaria";
            break;
        case "Saarland":
            $y = "Saara";
            break;
        case "Rheinland-Pfalz":
            $y = "Nadrenia-Palatynat";
            break;
        case "Hessen":
            $y = "Hesja";
            break;
        case "Thüringen":
            $y = "Turyngia";
            break;
        case "Sachsen":
            $y = "Saksonia";
            break;
        case "Nordrhein-Westfalen (NRW)":
            $y = "Nadrenia Północna-Westfalia";
            break;
        case "Niedersachsen":
            $y = "Dolna Saksonia";
            break;
        case "Bremen":
            $y = "Brema";
            break;
        case "Sachsen-Anhalt":
            $y = "Saksonia-Anhalt";
            break;
        case "Brandenburg":
            $y = "Brandenburgia";
            break;
        case "Schleswig-Holstein":
            $y = "Szlezwik-Holsztyn";
            break;
        case "Mecklenburg-Vorpommern":
            $y = "Meklemburgia-Pomorze Przednie";
            break;
        case "Europäisches Parlament":
            $y = "do Parlamentu Europejskiego";
            break;
        case "Sonstige":
            $y = "Inne";
            break;
        case "sonstige Parteien":
            $y = "";
            break;
        default:
            $y = $x;
            break;
    }
    return $y;
}
