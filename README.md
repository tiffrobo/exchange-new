# Digital Security Exchange

> The DSX works to strengthen the digital resilience of U.S. civil society
> groups by improving their understanding and mitigation of online threats.

Learn more at https://digitalsecurityexchange.org

## Project Team

The Digital Security Exchange, in partnership with [Guardian
Project](https://guardianproject.info/), is a
maintainer of the CDR platform and is actively developing new features and
making them freely available to like-minded projects around the world. If you
are interested in setting up your own DSX-like project, please contact us at
info@digitalsecurityexchange.org.

![DSX](https://github.com/digital-security-exchange/exchange-new/raw/develop/android-chrome-512x512.png)
![Guardian
Project](https://raw.githubusercontent.com/guardianproject/haven/master/art/logos/gplogo.png)

## Development

1. install ruby deps

   On debian you can do:
   `apt install ruby ruby-dev build-essential`

2. install bundle

   `gem install bundle`

3. install dev dependencies

   `make deps`

4. boot the site for development with live reload

   `make`

### Dev Notes

1. never touch the `_site/` directory; that's the outbut of the build process and is what gets deployed
2. unless you're editing the PHP scripts. all PHP form processing is in `_site/forms/`
2. sass files need the front matter bars (_ prefix)


### Configuration

The application is configured via environment variables.

* `DSX_HOME` - the absolute path to the directory where the system can store
  its data. This directory should be above the webroot.  It must have a
  trailing slash.
* `DSX_KEY_FINGERPRINT` - the PGP key fingerprint that all form submissions
  should be encrypted for.


Inside `DSX_HOME` there must be two sub folders:

* `submissions/` - the directory in which form csvs should be stored.
* `gnupg/` - the gnupg home directory that stores the public key. This
  directory should also be configured with a gnupg keyring containing the
  public DSX key.

If this directory is in the project root, it needs to be added to the "exclude"
list in _config.yml so that jekyll doesn't compile the submissions into
`_site`.  It should also be added to `.gitignore`.

#### Example Configuration

If you are using php-fpm to execute the PHP scripts, then you should ensure
the conf (`/etc/php/7.0/fpm/pool.d/www.conf`) has lines like:

```
clear_env = no
env[DSX_HOME] = /var/lib/dsx/
env[DSX_KEY_FINGERPRINT] = 556EE3FF01581B9FB16FB8540CD6D25C98935397
```

### Resources

- [declare arrays in templates][https://heliumdev.com/blog/create-an-array-in-shopifys-liquid]
- [jekyll reload][https://github.com/RobertDeRose/jekyll-livereload]

