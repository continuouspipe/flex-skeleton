<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class StakingController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function indexAction(): Response
    {
        return $this->render('index.html.twig');
    }
}
