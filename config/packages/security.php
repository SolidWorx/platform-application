<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use SolidWorx\Platform\PlatformBundle\DependencyInjection\Extension\LoginExtension;

return App::config(LoginExtension::defaultFormLoginConfig([
    'access_control' => [
        ['path' => '^/(_(profiler|wdt)|static)/', 'roles' => ['PUBLIC_ACCESS']],
        ['path' => '^/login', 'roles' => ['PUBLIC_ACCESS']],
        ['path' => '^/', 'roles' => ['ROLE_USER']],
    ],
]));
