<?php
$input_date="2017-07-29 14:03:55";
$datetime2=new DateTime('now');
function time_str($input_date){
    $datetime1=new DateTime($input_date);
    $datetime2=new DateTime('now');

    $date=$datetime2->diff($datetime1);

    $year=$date->format('%Y');
    $month=$date->format('%m');
    $day=$date->format('%d');
    $hour=$date->format('%h');
    $minute=$date->format('%i');
    $second=$date->format('%s');

    $hour_nam=[

        '0'=>'',
        '1'=>'One',
        '2'=>'Two',
        '3'=>'Three',
        '4'=>'Four',
        '5'=>'Five',
        '6'=>'Six',
        '7'=>'Seven',
        '8'=>'Eight',
        '9'=>'Nine',
        '10'=>'Ten',
        '11'=>'Eleven'

    ];
    if($day==0){
        if($hour==0){
            $hours=$hour;
            $days=$day==0?'':$day;
            $time=$minute." minutes ago";
        }elseif ($hour<=11){
            $hours=$hour;
            $time=$hour_nam[$hour]." hours ago";
        }elseif ($hour>11){
            $time="Today at ".date('h:i A',strtotime($input_date));
        }
    }elseif($day==1){
        $time="Yesterday at ".date('h:i A',strtotime($input_date));
    }else{
        $time=date('d-m-y h:i A',strtotime($input_date));
    }
    return $time;
}


var_dump($datetime2);//time_str($input_date);
?>