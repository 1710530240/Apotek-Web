<?php
$data = array(
    array("rino", "galuh"),
    array("rno", "galuh")
);

for ($i = 0; $i < count($data); $i++) {
    for ($j = 0; $j < count($data); $j++) {

        echo $data[$i][$j];
        echo "<br>";
    }
}
