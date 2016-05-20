
## How to Install Prism Web UI

**Step 1: Copy all files to a web-server directory that supports PHP.**

For example, if you have the Apache web server installed, determine the directory used to serve sites from and place the `web-ui` folder there. The web-ui doesn't require Apache, so alternate web servers like `nginx` should work fine.

If you're unfamiliar with these web servers, there are package installers like WAMP and MAMP available for Windows/Mac systems.

**Step 2: Re-name `config.sample.php` to `config.php`.**

We provide a sample config, but you must rename it so that future updates to the web ui won't replace what you've done.

**Step 3: Set your MySQL connection information in the config.php file.**

Make sure the connection credentials match what your Prism plugin use - so that the web ui talks to the same database.

**Step 4: If you wish, enable authentication and change the default user, or add more.**

Currently, you may manually add as many user accounts as you wish. If you've disabled authentication though, they'll never be used.

User accounts require anyone who wishes to view the data to login first. Since you can create as many as you need, you can create one for every user, or one for all users. One for every user has the benefit of disabling a specific user account.

## Get Help

IRC: irc.esper.net #prism (recommended) or #dhmc_us  

## Donate

I've invested a lot of time making Prism (and the web ui) what is, along with some contributions and testing help by our server staff. Help me out, even if it's just $1 person.

viveleroi - (PayPal; botsko@gmail.com) 

## Credits

The Prism plugin and web interface were designed by viveleroi.