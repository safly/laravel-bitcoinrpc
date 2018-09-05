<?php

if (! function_exists('bitcoind')) {
    /**
     * Get bitcoind client instance by name.
     *
	 * @param  string  $name
	 *
     * @return \Denpa\Bitcoin\Client
     */
    function bitcoind($name = 'default')
    {
        return app('bitcoindFactory')->get($name);
    }

    /**
     * Get client factory.
	 *
     * @return \Denpa\Bitcoin\ClientFactory
     */
    function bitcoindFactory()
    {
        return app('bitcoindFactory');
    }
}
