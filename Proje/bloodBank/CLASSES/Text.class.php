<?php
class Text
{
    private $text;

    public function decimal($number)
    {
        $number = number_format($number, 2, ',', '');
        return $number;
    }
}
