<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Controller;

use PiWeb\PiBreadcrumb\Model\Breadcrumb;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class BreadcrumbController extends AbstractController
{
    /**
     * BreadcrumbController constructor.
     * @param Breadcrumb $breadcrumb
     * @param Environment $environment
     */
    public function __construct(
        private Breadcrumb $breadcrumb,
        private Environment $environment,
    ) {
    }

    public function breadcrumbBlockAction(): Response
    {
        return $this->render(
            $this->environment->getLoader()->exists('bundles/PiBreadcrumbBundle/breadcrumb.html.twig') ?
                'bundles/PiBreadcrumbBundle/breadcrumb.html.twig' :
                '@PiBreadcrumb/breadcrumb.html.twig',
            [
                'breadcrumb' => $this->breadcrumb
            ]
        );
    }
}
