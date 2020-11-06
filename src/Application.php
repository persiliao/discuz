<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

use PersiLiao\Discuz\Exception\ActionInvalidArgumentException;
use PersiLiao\Discuz\Exception\ControllerInvalidArgumentException;

use function call_user_func;
use function method_exists;
use function sprintf;

abstract class Application{

    final public static function execute(string $className)
    {
        $controller = new $className;
        if(!$controller instanceof Controller){
            throw new ControllerInvalidArgumentException(sprintf('%s must instanceof %s', $className, Controller::class));
        }
        $action = static::getAction();
        if(empty($action)){
            $action = $controller->getDefaultAction();
        }
        if(!empty($action) && method_exists($controller, $action)){
            return call_user_func([
                $controller,
                $action,
            ]);
        }
        throw new ActionInvalidArgumentException(sprintf('%s not exists in %s', $action, $className));
    }

    abstract public static function getAction(): string;

}
