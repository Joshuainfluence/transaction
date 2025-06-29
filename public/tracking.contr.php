<?php

class TrackingContr extends Tracking
{
    private $tracking_number;
    public function __construct($tracking_number)
    {
        $this->tracking_number = $tracking_number;
    }

    public function trackingValidate()
    {
        $data = $this->validateTracking($this->tracking_number);
        return $data;
    }
}
