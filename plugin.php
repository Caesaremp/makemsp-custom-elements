<?php

/**
 * Plugin Name: MakeMSP Custom Elements
 * Plugin URI: https://makemsp.com
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: MakeMSP
 * Author URI: https://makemsp.com/
 * License: GPLv2
 * Text Domain: makemsp
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace MakemspCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'MakemspCustomElements',
        'element',
        'MakeMSP Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'MakemspCustomElements',
        'macro',
        'MakeMSP Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'MakemspCustomElements',
        'preset',
        'MakeMSP Presets',
        false,
    );
},
    // register elements before loading them
    9
);
