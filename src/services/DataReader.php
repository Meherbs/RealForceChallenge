<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 01/09/2021
 * Time: 12:12
 */

class DataReader
{
    public function getDataFromFile($search){
        $drivers = json_decode(file_get_contents('src/ressources/f1.json'), true);

        $result = array_filter($drivers["drivers"], function($v) use ($search) {
            return (strpos(strtolower($v["name"]), strtolower($search)) !== false);
        }, ARRAY_FILTER_USE_BOTH);
        return $result;
    }

}