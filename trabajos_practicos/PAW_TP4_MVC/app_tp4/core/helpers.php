<?php

use App\Core\App;

/**
 * Require a view.
 *
 * @param string $name
 * @param array $data
 * @return
 * @throws Exception
 */
function view($name, $data = [])
{
    $logger = App::get('logger');
    $logger->debug('View data', $data);

    return App::get('twig')->render("{$name}.html", $data);
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
