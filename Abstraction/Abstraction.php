<?php


abstract class BankAccounts{

    protected $HolderName;
    protected $HolderAge;
    protected $HOLderSSN;
    public abstract function accountDetail();

    public function __construct($n,$a,$s)
    {
        $this->HolderName = $n;
        $this->HolderAge = $a;
        $this->HOLderSSN = $s;
    }
}
 # CURRENT BANK ACCOUNT
class currentBankAccount extends BankAccounts{

     function accountDetail()
    {
        // TODO: Implement accountDetail() method.
        echo 'Name:'.$this->HolderName.' Age: '.$this->HolderAge.' SSN#:'.$this->HOLderSSN;

    }

}


# SAVING BANK ACCOUNT

class savingBankAccount extends BankAccounts{

    function accountDetail()
    {
        // TODO: Implement accountDetail() method.
        echo 'Name:'.$this->HolderName.' Age: '.$this->HolderAge.' SSN#:'.$this->HOLderSSN;

    }


}


// TRYING TO CREATE OBJECT OF ABSTRACT CLASS

//$newobject  = new BankAccounts;

// & FATAL ERROR :
/*
 * Fatal error: Uncaught Error: Cannot instantiate abstract class BankAccounts
 */



$Person  = new currentBankAccount('Muhammad', '23','2342342423');
$Person2 =  new savingBankAccount('Umair', '21', '234234234234');

// calling by object currentbankaccount;
#$Person->accountDetail();


// calling by object of savingBankaccount

# $Person2->accountDetail();
