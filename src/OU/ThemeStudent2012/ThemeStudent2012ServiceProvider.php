<?php namespace OU\ThemeStudent2012;

use Illuminate\Support\ServiceProvider;
use Event;

class ThemeStudent2012ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		Event::listen( 'asset.pipeline.boot', function( $pipeline )
		{
		    $config = $pipeline->getConfig();
		    $config['paths'][] = 'public/packages/ou/theme-student2012';
		    $pipeline->setConfig( $config );
		} );

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

}
