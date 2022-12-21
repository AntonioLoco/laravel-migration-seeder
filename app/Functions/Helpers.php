<?php

namespace App\Functions;

class Helpers
{
    //Qui inseriamo la funzione per leggere i file CSV
    public static function GetCsvData(String $path)
    {
        $data = [];
        $file_stream = fopen($path, 'r');
        if ($file_stream === false) {
            exit("Can not Open File");
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        fclose($file_stream);
        return $data;
    }
}
