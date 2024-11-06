<?php


class DailyAccount
{

    public function __construct(public $deposit)
    {
    }
    private $items = [];
    private $total = 0;
    function addItem($name, $cost)
    {
        $this->total += $cost;
        if ($this->total > $this->deposit) {
            echo "You don't have enough balance";
            $this->total -= $cost;
            return;
        }
        $this->items[$name] = $cost;
    }
    function createReport()
    {
        echo "Initial Deposit is {$this->deposit}. \n";
        foreach ($this->items as $name => $cost) {
            echo "{$name} - {$cost}\n";
        }
        echo "-------------------------------------- \n";
        echo "Total : {$this->total} \n";
        echo "Balance :" . ($this->deposit - $this->total) . "\n";
    }
}

$dailyAccount = new DailyAccount(1500);
$dailyAccount->addItem("kacha moris", 100);
$dailyAccount->addItem('alu', 50);
$dailyAccount->addItem('dim', 180);
$dailyAccount->addItem("murgi", 300);
$dailyAccount->addItem("Ghee", 800);

$dailyAccount->createReport();
