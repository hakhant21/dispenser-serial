<?php

namespace Serials\Communications\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Serials\Communications\Providers\DispenserServiceProvider;

class TestCase extends OrchestraTestCase 
{
     public function getPackageProviders($app) 
     {
         return [
            DispenserServiceProvider::class,
         ];
     }
}