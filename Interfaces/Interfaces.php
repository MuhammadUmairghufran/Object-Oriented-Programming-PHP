<?php

/*
 * TOPIC: Interfaces
 * Language: PHP
 * Author: Muhammad umair
 */

interface books{

     function getPrice();
}

interface shoes {

    function getsize();
}


class Store implements books, shoes {

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    public function getsize()
    {
        // TODO: Implement getsize() method.
    }


}