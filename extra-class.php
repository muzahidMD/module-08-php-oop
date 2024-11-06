<?php

class DailyAccount
{

    public function __construct(public $deposit)
    {
    }
    private $items = [];
    function addItem($name, $cost)
    {
        $this->items[$name] = $cost;
    }
    function createReport()
    {
        echo "Initial Deposit is {$this->deposit}. \n";
        $total = 0;
        foreach ($this->items as $name => $cost) {
            echo "{$name} - {$cost}\n";
            $total += $cost;
        }
        echo "-------------------------------------- \n";
        echo "Total : {$total} \n";
        echo "Balance :" . ($this->deposit - $total) . "\n";
    }
}

$dailyAccount = new DailyAccount(1000);
$dailyAccount->addItem("kacha moris", 100);
$dailyAccount->addItem('alu', 50);
$dailyAccount->addItem('dim', 180);
$dailyAccount->addItem("murgi", 300);

$dailyAccount->createReport();
