<?php
class Csv
{
    private $csvFileContent;

    public function saveFile($csvFileContent)
    {
        if (isset($_GET['csv'])) {
            touch("donorKayitlari.csv");
            $file = fopen("donorKayitlari.csv", "wbt");
            foreach ($csvFileContent as $csv) {
                fwrite($file, $csv);
            }
            fclose($file);
        }
        $GLOBALS['file'] = "donorKayitlari.csv";

        return $GLOBALS['file'];
    }
}
