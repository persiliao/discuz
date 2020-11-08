<?php
declare(strict_types=1);

namespace PersiLiao\Discuz;

use function array_filter;
use function explode;
use function http_build_query;
use function sprintf;
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

function adminUrl(string $action = '', string $operation = '', array $params = []): string
{
    if(!empty($action)){
        $params['action'] = $action;
    }
    if(!empty($operation)){
        $params['operation'] = $operation;
    }
    $queryStr = http_build_query($params);

    return sprintf('/admin.php?%s', $queryStr);
}

function theAdminUrl(string $action, string $operation = '', array $params = []): void
{
    echo adminUrl($action, $operation, $params);
}

function getCpLang(string $text): string
{
    return cplang($text);
}

function theCpLang(string $text): void
{
    echo getCpLang($text);
}
