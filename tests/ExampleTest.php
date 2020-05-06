<?php

namespace CarlKlein\LaravelPasswordValidationRules\Tests;

use Orchestra\Testbench\TestCase;
use CarlKlein\LaravelPasswordValidationRules\LaravelPasswordValidationRulesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPasswordValidationRulesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
