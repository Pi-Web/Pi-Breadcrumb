<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Block;

use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Twig\Environment;
use Symfony\Component\OptionsResolver\OptionsResolver;
use PiWeb\PiBreadcrumb\Model\Breadcrumb;

/**
 * Class BreadcrumbBlock
 * @package PiWeb\PiBreadcrumb\Block
 */
final class BreadcrumbBlock extends AbstractBlockService
{
    /**
     * BreadcrumbBlock constructor.
     * @param Environment $environment
     * @param Breadcrumb $breadcrumb
     */
    public function __construct(
        Environment $environment,
        private Breadcrumb $breadcrumb,
    ) {
        parent::__construct($environment);
    }

    /**
     * @param BlockContextInterface $blockContext
     * @param Response|null $response
     * @return Response
     */
    public function execute(BlockContextInterface $blockContext, Response $response = null): Response
    {
        return $this->renderResponse('@PiBreadcrumb/breadcrumb.html.twig', [
            'breadcrumb' => $this->breadcrumb
        ], $response);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureSettings(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'breadcrumb' => null,
        ]);
    }
}
