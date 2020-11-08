<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\AdminCp;

use AdminCp;
use Error;
use Exception;
use PersiLiao\Discuz\Application;

use function cpheader;
use function cpmsg_error;
use function PersiLiao\Eventy\doAction;

class App extends Application{

    public static function doAction(string $className)
    {
        try{
            cpheader();
            doAction(Controller::HEADER_STYLE, self::getAction());
            self::execute($className);
            doAction(Controller::FOOTER_SCRIPT, self::getAction());
        }catch(Exception|Error $e){
            cpmsg_error($e->getMessage());
        }
    }

    public static function getAction(): string
    {
        return $_REQUEST['operation'] ?: '';
    }

}
