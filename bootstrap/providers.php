<?php

return [
        App\Providers\AppServiceProvider::class,
        \Modules\Permission\Providers\PermissionServiceProvider::class,
        \Modules\Blog\Providers\BlogServiceProvider::class,
        \Modules\Identity\Providers\IdentityServiceProvider::class,
        \Modules\Tenancy\Providers\TenancyServiceProvider::class,
];