<?php
declare(strict_types=1);

namespace PersiLiao\Discuz;

use function array_filter;
use function explode;
use function strpos;
use function unserialize;

function simpleStringToArray(string $str): array
{
    if(empty($str)){
        return [];
    }
    if(strpos($str, "\t") !== false){
        $arr = explode("\t", $str);
    }elseif(strpos($str, ',') !== false){
        $arr = explode(',', $str);
    }else{
        $arr = [ $str ];
    }

    return array_filter($arr);
}

function unserializes(string $str): array
{
    return unserialize($str, [ 'allowed_classes' => '' ]);
}