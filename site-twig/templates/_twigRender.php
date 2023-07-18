<?php namespace ProcessWire;

/**
 * @var Page $page
 * @var Config $config
 *
 * @var Environment $twigEnvironment
 * @var string $twigTemplateName
 *
 * @var array $twigData
 */

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

$twigTemplateFile = $twigTemplateName . '.html.twig';

$twigTemplate = file_exists($config->get('twigDirectory') . $twigTemplateFile) ? $twigTemplateFile : 'index.html.twig';

try {
    echo $twigEnvironment->render($twigTemplate, $twigData);
} catch (LoaderError|RuntimeError|SyntaxError $error) {
    echo 'error: ' . $error->getMessage();
}
