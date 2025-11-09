<?php

interface MyDate
{
    public function set_year(int $year): void;
    public function set_month(int $month): void;
    public function set_day(int $day): void;

    public function get_year(): string;
    public function get_month(): string;
    public function get_day(): string;

    public function format(): string;
}

class AmericanDate implements MyDate
{
    private int $year;
    private int $month;
    private int $day;

    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    private function formatValue(int $n): string
    {
        return $n < 10 ? "0" . $n : (string) $n;
    }

    public function set_year(int $year): void
    {
        $this->year = $year;
    }

    public function set_month(int $month): void
    {
        $this->month = $month;
    }

    public function set_day(int $day): void
    {
        $this->day = $day;
    }

    public function get_year(): string
    {
        return (string) $this->year;
    }

    public function get_month(): string
    {
        return $this->formatValue($this->month);
    }

    public function get_day(): string
    {
        return $this->formatValue($this->day);
    }

    public function format(): string
    {
        return $this->get_month() . "." . $this->get_day() . "." . $this->get_year();
    }
}

class EuropeanDate implements MyDate
{
    private int $year;
    private int $month;
    private int $day;

    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    private function formatValue(int $n): string
    {
        return $n < 10 ? "0" . $n : (string) $n;
    }

    public function set_year(int $year): void
    {
        $this->year = $year;
    }

    public function set_month(int $month): void
    {
        $this->month = $month;
    }

    public function set_day(int $day): void
    {
        $this->day = $day;
    }

    public function get_year(): string
    {
        return (string) $this->year;
    }

    public function get_month(): string
    {
        return $this->formatValue($this->month);
    }

    public function get_day(): string
    {
        return $this->formatValue($this->day);
    }

    public function format(): string
    {
        return $this->get_day() . "." . $this->get_month() . "." . $this->get_year();
    }
}