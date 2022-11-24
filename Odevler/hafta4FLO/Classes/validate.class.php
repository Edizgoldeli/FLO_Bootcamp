<?php
class TcKimlik
{
    public $tc;

    public function validate($tc)
    {
        $this->tc = $tc;
        $checkCounter = 0;
        if (strlen($tc) == 11) {
            echo "Check1<br>";
            $checkCounter++;
        }
        if (substr($tc, 0, 1) != 0) {
            echo "Check2<br>";
            $checkCounter++;
            $one = substr($tc, 0, 1);
            $three = substr($tc, 2, 1);
            $five = substr($tc, 4, 1);
            $seven = substr($tc, 6, 1);
            $nine = substr($tc, 8, 1);

            $two = substr($tc, 1, 1);
            $four = substr($tc, 3, 1);
            $six = substr($tc, 5, 1);
            $eight = substr($tc, 7, 1);

            $ten = substr($tc, 9, 1);

            $half1 = ($one + $three + $five + $seven + $nine) * 7;
            $half2 = $two + $four + $six + $eight;
            $half3 = $half1 - $half2;

            $mod = fmod($half3, 10);
        }
        if ($mod == $ten) {
            echo "Check3<br>";
            $checkCounter++;
            $eleven = substr($tc, 10, 1);
            $half4 = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten;
            $mod2 = fmod($half4, 10);
        }
        if ($mod2 == $eleven) {
            echo "Check4<br>";
            $checkCounter++;
        }
        if($checkCounter == 4){
            $status = 1;
        }else{
            $status = 0;
        }
        echo "passed $checkCounter checks => $status";
    }
}
