<?php
/**
 *
 * This is an example of how you can write a custom
 * authorization class, so that you can bridge your
 * own systems with the Prism web ui.
 *
 * Essentially, make sure your custom auth file is
 * included from the config, extend the primary auth
 * file, and override the authenticator.
 *
 * This example will pretend we're loading users from
 * an existing database, like forum software.
 */
class CustomAuth extends Auth {


    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function authUser( $username, $password ){

        // Just check if the config says we should even auth people
        if(!REQUIRE_AUTH) return true;

        // Here you'd run a query to your private system
        // authenticating the username/password

        //if(  user is found in your system  ){

            // If this page returns true, the login system will auto set
            // a hash and the username entered to the form, so that we
            // remember the session for the user.

            return true;

        //}
        return false;
    }
}
