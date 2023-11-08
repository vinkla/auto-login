<?php

/**
 * Copyright (c) Vincent Klaiber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/local-login
 */

/*
 * Plugin Name: Local Login
 * Description: Enable automatic login within a local WordPress environment.
 * Author: Vincent Klaiber
 * Author URI: https://github.com/vinkla
 * Version: 1.0.1
 * Plugin URI: https://github.com/vinkla/local-login
 * GitHub Plugin URI: vinkla/local-login
 */

namespace LocalLogin;

// Login locally as super admin.
function local_login()
{
    $id = 1;

    if (
        wp_get_environment_type() !== 'local' || // if not local
        is_user_logged_in() || // if user is already logged in
        is_admin() === false || // if not admin
        is_super_admin($id) === false // if user is not super admin
    ) {
        return;
    }

    $user = get_user_by('id', $id);
    $login = $user->data->user_login;

    wp_set_current_user($id, $login);
    wp_set_auth_cookie($id, true);
    do_action('wp_login', $login, $user);

    if (isset($_SERVER['REQUEST_URI'])) {
        wp_safe_redirect($_SERVER['REQUEST_URI']);
        exit;
    }
}

add_action('init', __NAMESPACE__ . '\local_login');
