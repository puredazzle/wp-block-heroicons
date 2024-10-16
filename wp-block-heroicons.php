<?php

/**
 * Copyright (c) Chris Andersson
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/puredazzle/wp-block-heroicons
 */

/*
 * Plugin Name: wp-block-heroicons
 * Description: A WordPress plugin for using Heroicons in your blocks.
 * Author: Chris Andersson
 * Author URI: https://github.com/puredazzle
 * Version: 1.0.0
 * Plugin URI: https://github.com/puredazzle/wp-block-heroicons
 * GitHub Plugin URI: puredazzle/wp-block-heroicons
 */

declare(strict_types=1);

add_action(
    'enqueue_block_editor_assets',
    function () {
        wp_register_style(
            'wp-block-heroicons',
            __FILE__ . '/heroicons.css',
            false,
            '1.0.0',
            'all',
        );
    },
    102,
);
