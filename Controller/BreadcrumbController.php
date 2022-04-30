<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Controller;

use PiWeb\PiBreadcrumb\Model\Breadcrumb;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\NewsRepository;
use App\Repository\EventRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\HttpFoundation\Request;

final class BreadcrumbController extends AbstractController
{
    /**
     * DefaultController constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(
        private Breadcrumb $breadcrumb,
    ) {
    }

    public function breadcrumbBlockAction(): Response
    {
        return $this->render('@PiBreadcrumb/breadcrumb.html.twig', [
            'breadcrumb' => $this->breadcrumb
        ]);
    }
}
