<?php

class ShowContr extends Show
{
    private $status;
    public function __construct($status)
    {
        $this->status = $status;
    }

    public function transactionShow()
    {
        $data = $this->showTransactions($this->status);
        return $data;
    }

    public function balanceShow()
    {
        $data = $this->showBalance($this->status);
        return $data;
    }
}
