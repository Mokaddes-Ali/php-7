<?php
class Fund{
    public $fund;

    public function __construct($intialbalance = 0){
        $this-> fund = $intialbalance;
    }

    public function addFund($amount){
        $this-> fund += $amount;
        echo "Added amount: taka" . $this ->fund;
        echo "</br>\n";
    }

    public function withdrawFund($amount){
        $this-> fund -= $amount;
        echo "Withdraw amount: taka". $this ->fund;
        echo "</br>\n";
    }
    
    public function getFund(){
        echo "Fund: taka". $this ->fund;
    }
}
$ourFund = new Fund();
$ourFund->getFund();
$ourFund->addFund(10000);
$ourFund->getFund();
$ourFund->withdrawFund(5000);
$ourFund->getFund();
$ourFund->getFund();