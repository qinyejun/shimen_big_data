<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\OrderShipped' => [
            'App\Listeners\TotalStatisticsListener',
            'App\Listeners\NewOrderListener',
            'App\Listeners\OrderStatisticsListener',
            'App\Listeners\SaleRankingListener',
            'App\Listeners\ShopStatisticsListener'
        ],
        'App\Events\GoodsShipped' => [
            'App\Listeners\TotalStatisticsListener'
        ],
        'App\Events\LoginShipped' => [
            'App\Listeners\TotalStatisticsListener'
        ],
        'App\Events\MemberShipped' => [
            'App\Listeners\TotalStatisticsListener'
        ],
        'App\Events\ShopShipped' => [
            'App\Listeners\IndustryStatisticsListener',
            'App\Listeners\ShopStatisticsListener'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
