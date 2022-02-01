$ echo '{}' > composer.json
$ git add composer.json
$ git commit -m "add composer.json for PHP app detection"

$ heroku buildpacks:set heroku/php

$ heroku buildpacks:set https://github.com/heroku/heroku-buildpack-php

$ heroku config:set HEROKU_PHP_PLATFORM_REPOSITORIES="https://mybucket.s3.amazonaws.com/heroku-18/packages.json"

heroku create --buildpack https://github.com/heroku/heroku-buildpack-php.git

heroku buildpacks:set heroku/php
