
<?php

$name= ['man'=>['Lucas','Owyn','Alphonse','Colin','Jericho','Augustus','Jesus','Lucifer','Mefistofel','Ieuda'],'female'=>['Amata','Clover','Moira','Jeniffer','Stefany','Marry','Jane','Kitana','Shiva','Morgana']];

$surname=['Autumn','Madison Li','Moriarty','Almodovar','Christmas','Tenpenny','Lyons','Eden','Simms','Diesel'];
$age = rand(16,40);
$res= rand(0,9);
$unisex = array_rand($name);
$rand_sur = $surname[$res];

// for($i=0;$i<=20;$i++){


	$result= rand(0,9);
	$arr_man = $name[$unisex][$result];
	

// }
	?>
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		img{
			width: 250px;
			height: 250px;
			border:2px solid black;
		}
		span{
			font-size: 48px;
			font-weight: bold;
			color: green;
			font-family: 'New Time Roman';
			text-shadow: 1px 1px 2px black, 0 0 1em black;
		}
	</style>
</head>
<body>
	<span><?= $arr_man ." " . $rand_sur . " " . "age: ". $age . "</br>" . "<img src=\"img\\$arr_man.jpg\">";?></span>
</body>
</html>
