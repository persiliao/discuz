<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\AdminCp;

use PersiLiao\Discuz\Controller as AbstractController;

use function PersiLiao\Eventy\addAction;

abstract class Controller extends AbstractController{

    const FOOTER_SCRIPT = 'footer_script';

    final public static function addScript(callable $callback)
    {
        addAction(self::FOOTER_SCRIPT, $callback);
    }

}
