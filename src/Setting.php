<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

class Setting{

    public static function get(string $key)
    {
        global $_G;

        return $_G['setting'][$key] ?: '';
    }

}
