<?php declare(strict_types=1);

use Twig\Environment;
use function DI\factory;
use function DI\get;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => factory(function (string $templatesLocation) {
        return new Environment(
            new FilesystemLoader([
                $templatesLocation,
            ])
        );
    })
        ->parameter('templatesLocation', get('config.twig.templates.location')),
];
