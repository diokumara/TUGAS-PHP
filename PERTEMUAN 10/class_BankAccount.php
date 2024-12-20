<?php 
    require_once 'class_account.php';

    class BankAccount extends Account{
        public $customer;
        static $biaya_admin = 6500;

        function __construct($nomor, $saldo,$customer){
            parent::__construct($nomor, $saldo);
            $this->customer = $customer;
        }
        function cetak(){
            parent::cetak();
            echo '<br/>Customer : ' .$this->customer;
        }

        function transfer($obj_account,$uang){
            $obj_account->deposit($uang);
            $this->witdrawl($uang);
            $this->witdrawl(self::$biaya_admin);
        }

        public function getSaldo(){
            return $this->saldo;
        }
    }
?>