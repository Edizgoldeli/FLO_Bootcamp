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
            $fileName = "donorKayitlari.csv";
            if (!file_exists($fileName)) { // file does not exist
                die('file not found');
            } else {
                return $fileName;
            }
        }
        
    }
}
