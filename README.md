# Local Login

> Login automagically as WordPress super admin in local environment.

The plugin automagically login when you visit an admin page in your local environment. The login page is still accessible to login as another WordPress user.

[![Build Status](https://badgen.net/github/checks/vinkla/local-login?label=build&icon=github)](https://github.com/vinkla/local-login/actions)
[![Monthly Downloads](https://badgen.net/packagist/dm/vinkla/local-login)](https://packagist.org/packages/vinkla/local-login/stats)
[![Latest Version](https://badgen.net/packagist/v/vinkla/local-login)](https://packagist.org/packages/vinkla/local-login)

## Installation

Require the package, with Composer, in the root directory of your project.

```sh
composer require vinkla/local-login --dev
```

The plugin will be installed as a [must use plugin](https://github.com/vinkla/wordplate#must-use-plugins).

## Usage

Visit an admin page in the browser to automagically login.

http://127.0.0.1:8000/wordpress/wp-admin 

Visit the login page in the browser to login as another WordPress user.

http://127.0.0.1:8000/wordpress/wp-login.php
