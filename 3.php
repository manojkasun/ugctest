<?php $months = array("3"=>"March", "12"=>"December", "10"=>"October", "11"=>"November", "4"=>"April", "May"=>"5","6"=>"June");

echo "<br>" , $months[10];
echo "<br>", $months[3];

echo  "<br>", $months['May'];

foreach ($months as $month){
    echo "<br>", $month;
}
