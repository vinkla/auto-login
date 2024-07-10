# Automatic Login

> Enable automatic login within a local WordPress environment.

The plugin facilitates automatic login upon visiting an admin page in your local WordPress environment, allowing you to be logged in as a super admin. However, the login page remains accessible for logging in as another WordPress user if needed.

> [!WARNING]  
> This work is in progress and has not yet been published on Packagist. It may or may not be published in the future.

## Installation

Require the package, with Composer, in the root directory of your project.

```sh
composer require vinkla/automatic-login --dev
```

The plugin will be installed as a [must-use plugin](https://github.com/vinkla/wordplate#must-use-plugins).

## Usage

Visit an admin page in the browser to automatically login.

http://localhost/wp-admin 

Visit the login page in the browser to login as another WordPress user if needed.

http://localhost/wp-login.php
