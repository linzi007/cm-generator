<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->morphMap();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * morph 绑定
     */
    public function morphMap()
    {
        Relation::morphMap([
                               /*'order'             => \App\Models\Order::class,
                               'onlinePayRecord'   => \App\Models\OnlinePayRecord::class,
                               'offlinePayRecord'  => \App\Models\OfflinePayRecord::class,
                               'memberBeanRecord'  => \App\Models\MemberBeanRecord::class,
                               'marketMoneyRecord' => \App\Models\MarketMoneyRecord::class,
                               'returnOrder'       => \App\Models\ReturnOrder::class,
                               'refundOrder'       => \App\Models\ReturnOrder::class,
                               'couponTemplate'    => \App\Models\CouponTemplate::class,*/
                           ]);

    }
}
