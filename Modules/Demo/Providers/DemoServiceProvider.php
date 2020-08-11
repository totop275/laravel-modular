<?php

namespace Modules\Demo\Providers;

use App\Providers\ModuleServiceProvider as ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Demo';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'demo';

}
