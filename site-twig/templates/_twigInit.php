<?php namespace ProcessWire;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

/**
 * @var Page $page
 * @var Pages $pages
 * @var User $user
 * @var Config $config
 */

$homePage = $pages->get(1);

$twigEnvironment = new Environment(new FilesystemLoader($config->twigDirectory), [
    'cache'            => $config->paths->cache . 'twig',
    'debug'            => $config->debug,
    'auto_reload'      => $config->debug,
    'strict_variables' => false,
    'autoescape'       => 'html',
]);
if ($config->debug) {
    $twigEnvironment->addExtension(new DebugExtension());
}

foreach (['page', 'config', 'user'] as $variable) {
    $twigEnvironment->addGlobal($variable, wire($variable));
}

$twigEnvironment->addGlobal('navigation', $homePage->children);

/** @noinspection PhpUnusedLocalVariableInspection */
$twigData = [];

/** @noinspection PhpUnusedLocalVariableInspection */
$twigTemplateName = $page->template->name;
