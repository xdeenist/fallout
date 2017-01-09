<?php

$name= ['man'=>['Lucas','Owyn','Alphonse','Colin','Jericho','Augustus','Jesus','Lucifer','Mefistofel','Ieuda'],'female'=>['Amata','Clover','Moira','Jeniffer','Stefany','Marry','Jane','Kitana','Shiva','Morgana']];

$surname=['Autumn','Madison Li','Moriarty','Almodovar','Christmas','Tenpenny','Lyons','Eden','Simms','Diesel'];
$age = rand(16,40);
$res= rand(0,9);
$unisex = array_rand($name);
$rand_sur = $surname[$res];
	$result= rand(0,9);
	$arr_man = $name[$unisex][$result];

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        body{
            background: url(img/bg.jpg);
        }
		img{
			width: 250px;
			height: 250px;
			border:2px solid black;
            border-radius: 50%;
            box-shadow: 0 3px 10px black;
            cursor: pointer;
            opacity: 0.8;
		}
        img:hover{
            opacity: 1;
        }
		span{
			font-size: 48px;
			font-weight: bold;
			color: green;
			text-shadow: 1px 1px 2px black, 0 0 1em black;
		}
        div{
           
            margin-left: 200px;
            display: inline-block;
            text-align: center;
            
        }
	</style>
</head>
<body>
	<div><span><?= $arr_man ." " . $rand_sur . " " . "age: ". $age . "</br>" . "<img src=\"img\\$arr_man.jpg\">";?></span></div>
</body>
</html>
