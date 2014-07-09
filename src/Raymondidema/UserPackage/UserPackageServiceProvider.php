<?php namespace Raymondidema\UserPackage;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class UserPackageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('raymondidema/user-package');
        include __DIR__.'/../../routes.php';
        include __DIR__.'/../../filters.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->runListeners();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

    protected function runListeners()
    {

        $listeners = [
            'Raymondidema\\UserPackage\\Listeners\\DoUserLogin',
            'Raymondidema\\UserPackage\\Listeners\\SendUserAnEmail',
            'Raymondidema\\UserPackage\\Listeners\\AttachRoleToUser'
        ];
        foreach($listeners as $listener)
        {
            $this->app['events']->listen('Raymondidema.UserPackage.Users.*', $listener);
        }
    }

}
