<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // policy
        Gate::policy('App\Models\PermintaanKoneksi','App\Policies\PermintaanKoneksiPolicy');
        Gate::policy('App\Models\Rekomendasi','App\Policies\RekomendasiPolicy');
        Gate::policy('App\Models\Feed','App\Policies\FeedPolicy');
        Gate::policy('App\Models\Comment', 'App\Policies\CommentPolicy');
        Gate::policy('App\Models\Artikel', 'App\Policies\ArtikelPolicy');
        Gate::policy('App\Models\Ebook', 'App\Policies\EbookPolicy');
        Gate::policy('App\Models\Pengalaman', 'App\Policies\PengalamanPolicy');
        Gate::policy('App\Models\Forum', 'App\Policies\ForumPolicy');
        Gate::policy('App\Models\Survey', 'App\Policies\SurveyPolicy');
        Gate::policy('App\Models\CommentForum', 'App\Policies\CommentForumPolicy');

        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {
            if ($request->input('api_token')) {
                return User::where('api_token', $request->input('api_token'))->first();
            }
        });
    }
}
