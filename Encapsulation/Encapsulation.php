<?php


/*
 *  Topic  : Encapsulation
 *  Language : PHP
 *  Author:  Muhammad Umair
 */


require('../Namespace/Namespace.php');

use def as Accounts;
class  BankAccount{

    private $currentbalance = '$1,2323';

    # CURRENT BALANCE IN ACCOUNT
    public function checkcurrentBalance(){

        echo 'YOUR CURRENT BALANCE IS: '.$this->currentbalance;
    }

}

$AccountHolder  = new BankAccount();

 # OUTPUT  - CHECKING CURRENT BALANCE
$AccountHolder->checkcurrentBalance();


/*
$Admin =  new def\Accounts;
$Admin->UpdateAccount('muhammad');

*/
