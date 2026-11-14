<?php

use App\Providers\AppServiceProvider;
use App\Providers\FortifyServiceProvider;
use App\Providers\HorizonServiceProvider;
use App\Providers\SocialstreamServiceProvider;

return [
    \App\Providers\ApiHostServiceProvider::class,
    AppServiceProvider::class,
    FortifyServiceProvider::class,
    HorizonServiceProvider::class,
    SocialstreamServiceProvider::class,
];
