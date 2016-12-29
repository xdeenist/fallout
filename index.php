<?php

define("SKILL_POINT", 1);
define("MAXIMUM_SCORE_FOR_ABILITIES", 39);
define("MAXIMUM_SCORE_POINT_FOR_ONE_SKILL",9);


function Spectial($ArrayOfSkills)
{
    $specialAbility = [

        'Strength',
        'Perception',
        'Endurance',
        'Charisma',
        'Intelligence',
        'Agility',
        'Luck'

    ];
    $specialPoint = [

        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1'

    ];


//checking for sum of point,  must be under 39
    $resultOfPoint = SKILL_POINT;
    while ($resultOfPoint <= MAXIMUM_SCORE_FOR_ABILITIES) {
        //take array of point and get sum for validate our while
        $resultOfPoint = array_sum($specialPoint);
        //Genereate a number, that ability we will increase
        $randomAbility = rand(0, 6);
        //the point must me under or equal 10 if true add one skill poit for this ability
        if ($specialPoint[$randomAbility] <= MAXIMUM_SCORE_POINT_FOR_ONE_SKILL
            && $resultOfPoint <= MAXIMUM_SCORE_FOR_ABILITIES ) {

            $specialPoint[$randomAbility] += SKILL_POINT;
        }

    }

//merge 2 array on 1
    $ArrayOfSkills = array_combine($specialAbility, $specialPoint);

    return $ArrayOfSkills;

}



print_r(Spectial($ArrayOfSkills));
