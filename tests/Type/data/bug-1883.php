<?php

use Illuminate\Support\Facades\Facade;

use function PHPStan\Testing\assertType;

/**
 * @mixin OriginalRedis
 */
class RedisFacade extends Facade
{
}


function test(): void
{
    assertType('*ERROR*', RedisFacade::noSuchMethod());
}

