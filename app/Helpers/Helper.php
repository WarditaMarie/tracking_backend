<?php
    namespace App\Helpers;

    class Helper{

        public static function IDGenerator($model, $trow, $prefix, $length = 6)
        {
                $last_number = '';
                $data = $model::orderBy('id', 'desc')->first();
                if (!$data) {
                    $og_length = $length;
                } else {
                    $code = substr($data->$trow, strlen($prefix) + 1);
                    $actual_last_number = ($code / 1) * 1;
                    $increment_last_number = $actual_last_number + 1;
                    $last_number = strlen($increment_last_number);
                    $og_length = $length - $last_number;
                    $last_number = $increment_last_number;
                }
                $zeros = "";
                for ($i = 0; $i < $og_length; $i++) {
                    $zeros .= "0";
                }
                return $prefix . '-' . $zeros . $last_number;
        }
    }
?>