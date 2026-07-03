<?php

namespace App\Enums;

enum DiplomaType : string
{
    case Licence = 'Licence';
    case Master = 'Master';
    case Doctorat = 'Doctorat';
    case BTS = 'BTS';
public static function values(): array
{
    return array_column(self::cases(), 'value');
}
//['Licence','Master', 'Doctorat']
public static function forSelect(): array
{

    $paires =[];
    foreach(self::cases() as $case){
        $paires[$case->value] = $case->value;
    }
    return $paires;
}

//DiplomaType:forSelect();
//  [
//  'Licence' => 'Licence',
//  'Master' => 'Master',
//  'Doctorat' => 'Doctorat',
//  'BTS' => 'BTS',
//  ]

}

