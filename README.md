0. never touch the _site directory; that's the outbut of the build process and is what gets deployed
1. run the server with "bundle exec jekyll serve -R" for live reload
2. sass files need the front matter bars

All PHP form processing is in /_site/forms

In order for the form processing to work, there needs to be a file called /_site/forms/config.php,
which must define the php variable $path_to_submissions, the absolute path to the directory in which
form csvs should be stored. This directory should be above the webroot.  /_site/forms/config.php is 
gitignored. If this directory is in the project root, it needs to be added to the "exclude" list in 
_config.yml so that jekyll doesn't compile the submissions into _site.  It should also be added to .gitignore.

# RESOURCES

- [declare arrays in templates][https://heliumdev.com/blog/create-an-array-in-shopifys-liquid]
- [jekyll reload][https://github.com/RobertDeRose/jekyll-livereload]

