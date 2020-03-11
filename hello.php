<?php
$jsonString = '{"name":"小明",
"age":16,
"gender":false,
"height":1.72,
"grade":null,
"skills":[
"JavaScript",
"PHP",
"JAVA"]
}'; //
$dataArr = json_decode($jsonString);//
var_dump($dataArr);
?>