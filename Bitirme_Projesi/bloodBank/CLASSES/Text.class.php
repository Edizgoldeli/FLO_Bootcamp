<?php
class Text
{
    private $text;

    public function decimal($number)
    {
        $number = number_format($number, 2, ',', '');
        return $number;
    }
    public function upper($text)
    {
        $search = array("ç", "i", "ı", "ğ", "ö", "ş", "ü");
        $replace = array("Ç", "İ", "I", "Ğ", "Ö", "Ş", "Ü");
        $text = str_replace($search, $replace, $text);
        $text = strtoupper($text);
        return $text;
    }
}
