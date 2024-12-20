<?php
function match_value( $day ){
    return match(true){
        $day > 0 && $day < 6 => "Это рабочий день",
        $day == 6 || $day == 7 => "Это выходной день",
        default => "Неизвестный день",
    };
};