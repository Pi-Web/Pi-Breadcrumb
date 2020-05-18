<?php

namespace PiWeb\PiBreadcrumb\Block;

use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Twig\Environment;
use Symfony\Component\OptionsResolver\OptionsResolver;
use PiWeb\PiBreadcrumb\Model\Breadcrumb;

final class BreadcrumbBlock extends AbstractBlockService
{
    private Breadcrumb $breadcrumb;

    public function __construct(Environment $environment, Breadcrumb $breadcrumb)
    {
        parent::__construct($environment);

        $this->breadcrumb = $breadcrumb;
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null): Response
    {
        return $this->renderResponse('@PiBreadcrumb/breadcrumb.html.twig', [
            'breadcrumb' => $this->breadcrumb
        ], $response);
    }

    public function configureSettings(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'breadcrumb' => null,
        ]);
    }
}
