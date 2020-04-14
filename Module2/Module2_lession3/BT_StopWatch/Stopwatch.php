<?php


class Stopwatch
{
    private $startTime;
    private $endTime;

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    function __construct()
    {
        $this->startTime = time();
    }

    public function start()
    {
        $this->startTime = time();
    }

    public function stop()
    {
        $this->endTime = time();
    }

    public function getElapsedTime()
    {
        return (1000 * ($this->endTime - $this->startTime));
    }

}