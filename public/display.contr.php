<?php

class DisplayContr extends Display
{
    private $status;
    // private $limit;
    public function __construct($status)
    {
        $this->status = $status;
        // $this->limit = $limit;
    }

    public function detailsDisplay()
    {
        $data = $this->displayDetails($this->status);
        return $data;
    }
}
