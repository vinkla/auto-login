# Local Login

> Enable automatic login within a local WordPress environment.

The plugin facilitates automatic login upon visiting an admin page in your local WordPress environment, allowing you to be logged in as a super admin. However, the login page remains accessible for logging in as another WordPress user if needed.

[![Build Status](https://badgen.net/github/checks/vinkla/local-login?label=build&icon=github)](https://github.com/vinkla/local-login/actions)
[![Monthly Downloads](https://badgen.net/packagist/dm/vinkla/local-login)](https://packagist.org/packages/vinkla/local-login/stats)
[![Latest Version](https://badgen.net/packagist/v/vinkla/local-login)](https://packagist.org/packages/vinkla/local-login)

## Installation

Require the package, with Composer, in the root directory of your project.

```sh
composer require vinkla/local-login --dev
```

The plugin will be installed as a [must-use plugin](https://github.com/vinkla/wordplate#must-use-plugins).

## Usage

Visit an admin page in the browser to automatically login.

http://localhost/wp-admin 

Visit the login page in the browser to login as another WordPress user if needed.

http://localhost/wp-login.php
