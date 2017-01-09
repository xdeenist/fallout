<?php
//Входящие данные: массив из 7 случайных цифр
//Создаем массив
$incomingArray=array(1,2,3,4,5,6,7);
/*Функция ran генерирует случайное число 
в каждый элемент массива и получаем мыссив 
случайных чисел $incomingArray*/
$incomingArray=array_map(ran, $incomingArray);

function ran($num) { 
	return  rand(1,10);
}

$skills=skills($incomingArray);
print_r($skills);
/* Функция skills возвращает массив  атрибутов и навыков
 в зависимости от величина S.P.E.C.I.A.L. */

function skills($arr) {
	$value = $arr[6];
 		$SkillModifiers = ceil($value / 2);

foreach($arr as $key => $value) { 
    switch ($key) {
		case '0':		$Strength['CarryWeigh'] = 150 + (10 * $value);
					$Strength['DamageBonus'] = 0.5 * $value;
					$Strength['SkillModifiers'] = (2 * $value) + $SkillModifiers;
					break;
		case '1':		$Perception['EnergyWeapons'] = $value * 2 + $SkillModifiers;
					$Perception['Explosives'] = $value * 2 + $SkillModifiers;
					$Perception['Lockpick'] = $value * 2 + $SkillModifiers;
					break;
		case '2':		$Endurance['StartingHealth'] = $value * 20 + 100;
					$Endurance['Survival'] = $value * 2 + $SkillModifiers;
					$Endurance['Unarmed'] = $value * 2 + $SkillModifiers;
					$Endurance['RadResist'] = 0.02 * ($value - 1) ;
					$Endurance['Poison'] = 0.05*($value - 1);				
					break;
		case '3':		$Charisma['$barter'] = $value * 2 + $SkillModifiers;
					$Charisma['$Speech'] = $value * 2 + $SkillModifiers;
					break;
		case '4':		$Intelligence['SkillPoints'] = $value + 10;
					$Intelligence['Medicine'] = $value * 2 + $SkillModifiers;
					$Intelligence['Repair'] = $value * 2 + $SkillModifiers;
					$Intelligence['Science'] = $value *2 + $SkillModifiers;
					break;
		case '5':		$Agility['ActionPoints'] = $value * 2 + 65;
					$Agility['SmallGuns'] = $value * 2 + $SkillModifiers;
					$Agility['Sneak'] = $value * 2 + $SkillModifiers;
					break;
		case '6':  		$Luck['CriticalChance'] = $value * 0.01;
		     		$Luck['$SkillModifiers'] = $SkillModifiers;
					break;
		default:
     				echo "Error in the number of elements in the array. There should be seven.";
					break;
	} 
} return array( 'Strength'=> $Strength,
				'Perception'=> $Perception,
				'Endurance'	=> $Endurance,
				'Charisma'	=> $Charisma, 
				'Intelligence'	=> $Intelligence,
				'Agility'	=> $Agility,
				'Luck'		=> $Luck); 
}



