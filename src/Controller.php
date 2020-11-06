<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

abstract class Controller{

    /**
     * @var string
     */
    protected $defaultAction = '';

    /**
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }

}
