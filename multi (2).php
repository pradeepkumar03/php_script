<?php
$cars=array(
    array("volvo",24,45),
    array("benz",78,89),
    array("benz",67,76),
);
for($row= 0; $row< 4; $row++){
    echo"<p><b>Row Number $row</b></p>";
    echo"<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo"</ul>";
}