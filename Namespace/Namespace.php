<?php

/*
 * TOPIC: Namespace
 * AUTHOR: Muhammad Umair
 * LANGUAGE: PHP
 */

namespace def;

class  ACCOUNTS
{
    # DELETE ACCOUNT
        private function deleteAccount($NAME, $ID)
        {
            echo 'YOUR ACCOUNT HAS BEEN DELETED' . $NAME . $ID;
        }

    # CREATE ACCOUNT

        private function createAccount($NAME, $ID)
        {
            echo 'YOUR ACCOUNT HAS BEEN CREATED' . $NAME . $ID;
        }

    # UPDATE ACCOUNT

    public function UpdateAccount($NAME){

            echo $NAME.' YOUR ACCOUNT HAS BEEN UPDATED';

    }

}


