<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Controller;

use PiWeb\PiBreadcrumb\Model\Breadcrumb;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Loader\LoaderInterface;

final class BreadcrumbController extends AbstractController
{
    public function __construct(
        private readonly Breadcrumb $breadcrumb,
        private readonly LoaderInterface $loader,
    ) {
    }

    public function breadcrumbBlockAction(): Response
    {
        return $this->render(
            $this->loader->exists('bundles/PiBreadcrumbBundle/breadcrumb.html.twig') ?
                'bundles/PiBreadcrumbBundle/breadcrumb.html.twig' :
                '@PiBreadcrumb/breadcrumb.html.twig',
            [
                'breadcrumb' => $this->breadcrumb
            ]
        );
    }
}
