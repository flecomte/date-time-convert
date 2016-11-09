<?php

namespace FLE\DateTimeConvert;

class LdlmToMoment
{
    static public $replacements = [
        'y' => 'Y',
        'yy' => 'YY',
        'yyy' => 'YYY',
        'yyyy' => 'YYYY',
        'yyyyy' => 'YYYY',
        'L' => 'M',
        'LL' => 'MM',
        'LLL' => 'MMM',
        'LLLL' => 'MMMM',
        'd' => 'D',
        'dd' => 'DD',
        'D' => 'DDD',
        'DD' => 'DDDD',
        'E' => 'ddd',
        'EE' => 'ddd',
        'EEE' => 'ddd',
        'e' => 'd',
        'ee' => 'd',
        'eee' => 'ddd',
        'a' => 'A',
        'k' => 'H',
        'kk' => 'HH',
        'K' => 'h',
        'KK' => 'hh'
    ];

    static public function convert ($ldlmPattern)
    {
        foreach (array_reverse(self::$replacements) as $ldlm => $moment) {
            $short = substr($ldlm, 0, 1);
            $ldlmPattern = preg_replace("`(?:(?!^$short)|^)($ldlm)(?:(?!^$short)|$)`", $moment, $ldlmPattern);
        }
        return $ldlmPattern;
    }
}