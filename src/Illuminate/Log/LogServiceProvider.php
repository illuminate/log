<?php namespace Illuminate\Log;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['log'] = $this->app->share(function($app)
		{
			return new Writer(new \Monolog\Logger('log'));
		});
	}

}