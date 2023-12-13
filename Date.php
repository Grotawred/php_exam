<?php

class Date{
    private $timestamp;

    public function __construct($date = null)
    {
        if ($date === null) {
            $this->timestamp = time();
        } else {
            $this->timestamp = strtotime($date);
        }
    }

    public function getDay()
    {
        return date('d', $this->timestamp);
    }

    public function getMonth($lang = null)
    {
        $format = ($lang === 'ua') ? 'F' : 'M';
        $month = date($format, $this->timestamp);

        if ($lang === 'ua') {
            $translations = array(
                'January'   => 'січень',
                'February'  => 'лютий',
                'March'     => 'березень',
                'April'     => 'квітень',
                'May'       => 'травень',
                'June'      => 'червень',
                'July'      => 'липень',
                'August'    => 'серпень',
                'September' => 'вересень',
                'October'   => 'жовтень',
                'November'  => 'листопад',
                'December'  => 'грудень'
            );

            $month = strtr($month, $translations);
        }

        return $month;
    }

    public function getYear()
    {
        return date('Y', $this->timestamp);
    }

    public function getWeekDay($lang = null)
    {
        $format = ($lang === 'ua') ? 'l' : 'D';
        $weekday = date($format, $this->timestamp);

        if ($lang === 'ua') {
            $translations = array(
                'Monday' => 'понеділок',
                'Tuesday' => 'вівторок',
                'Wednesday' => 'середа',
                'Thursday' => 'четвер',
                'Friday' => "п'ятниця",
                'Saturday' => 'суббота',
                'Sunday' => 'неділя'
            );

            $weekday = strtr($weekday, $translations);
        }

        return $weekday;
    }

    public function addDay($value)
    {
        $this->timestamp = strtotime("+{$value} day", $this->timestamp);
    }

    public function subDay($value)
    {
        $this->timestamp = strtotime("-{$value} day", $this->timestamp);
    }

    public function addMonth($value)
    {
        $this->timestamp = strtotime("+{$value} month", $this->timestamp);
    }

    public function subMonth($value)
    {
        $this->timestamp = strtotime("-{$value} month", $this->timestamp);
    }

    public function addYear($value)
    {
        $this->timestamp = strtotime("+{$value} year", $this->timestamp);
    }

    public function subYear($value)
    {
        $this->timestamp = strtotime("-{$value} year", $this->timestamp);
    }

    public function format($format)
    {
        return date($format, $this->timestamp);
    }

    public function __toString()
    {
        return date('Y-m-d', $this->timestamp);
    }
}