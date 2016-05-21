<?php
/**
 * LetterAvatarServiceProvider.php
 * --
 * @package         LetterAvatar
 * @subpackage      ServiceProvider
 * --
 * User: GentlemanOwl <github@gentlemanowl.fr>
 * Date: 20/06/15
 * Time: 22:21
 */

namespace GentlemanOwl\LetterAvatar;

use GentlemanOwl\LetterAvatar\LetterAvatar;
use Illuminate\Support\ServiceProvider;

class LetterAvatarServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Instantiate the service provider
     *
     * @param mixed $app
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/letter-avatar.php' => config_path('gentlemanowl/letter-avatar.php')]);
        $this->publishes([__DIR__ . '/fonts/DroidSansMono.ttf' => storage_path('gentlemanowl/letter-avatar/fonts/DroidSansMono.ttf')]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/letter-avatar.php', 'gentlemanowl/letter-avatar');
        $this->app['gentlemanowl.letter-avatar'] = $this->app->share(function($app)
        {
            return new LetterAvatar($app['config']->get('gentlemanowl')['letter-avatar']);
        });

        $this->app->bind('GentlemanOwl\LetterAvatar\LetterAvatar', 'gentlemanowl.letter-avatar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gentlemanowl.letter-avatar'];
    }

}