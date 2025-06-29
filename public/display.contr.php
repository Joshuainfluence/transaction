<?php

class DisplayContr extends Display
{
    private $tracking_number;
    // private $limit;
    public function __construct($tracking_number)
    {
        $this->tracking_number = $tracking_number;
        // $this->limit = $limit;
    }

    public function detailsDisplay()
    {
        $data = $this->displayDetails($this->tracking_number);
        return $data;
    }
}
