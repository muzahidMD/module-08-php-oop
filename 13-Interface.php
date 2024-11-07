<?php

interface bankAccount
{
    function credit(int $amount, int $time, int $acc);
    function debit(int $amount, int $time, int $acc, int $balance);
}


class ManageBankAccount implements bankAccount
{
    function credit(int $amount, int $time, int $acc)
    {

    }

    function debit(int $amount, int $time, int $acc, int $balance)
    {

    }
}