<?php


# Static variables and function in php
class  cars{

    public static $car_no = 'IDF-9000';

    public static function Car_detail(){
        echo self::$car_no;
    }

}


cars::Car_detail();
