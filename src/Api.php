<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

use Error;
use Exception;

use function json_encode;
use function PersiLiao\Eventy\applyFilters;
use function PersiLiao\Eventy\doAction;

use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

class Api extends Application{

    const API_BEFORE = 'api_before';

    const API_AFTER = 'api_after';

    public static function doAction(string $className)
    {
        try{
            doAction(self::API_BEFORE);
            $data = self::execute($className);
            doAction(self::API_AFTER, applyFilters(self::API_AFTER, $data));
        }catch(Exception|Error $e){
            exit(static::serialize([
                'code' => -1,
                'message' => $e->getMessage()
            ]));
        }finally{
            exit(static::serialize($data));
        }
    }

    public static function serialize($data): string
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public static function getAction(): string
    {
        return $_REQUEST['operation'] ?: '';
    }

}
