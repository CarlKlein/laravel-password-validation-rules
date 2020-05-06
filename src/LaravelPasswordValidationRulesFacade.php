<?php

namespace CarlKlein\LaravelPasswordValidationRules;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CarlKlein\LaravelPasswordValidationRules\Skeleton\SkeletonClass
 */
class LaravelPasswordValidationRulesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-password-validation-rules';
    }
}
