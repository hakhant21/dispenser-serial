<?php

use Serials\Communications\Dispenser;

it('dispensr can be instantiated from app container', function () {
     $dispenser = app('dispenser');

     expect($dispenser)->toBeInstanceOf(Dispenser::class);
});