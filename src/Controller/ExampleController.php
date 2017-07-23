<?php

namespace App\Controller;

use App\Entity\Example;
use App\Form\ExampleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ExampleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(): Response
    {
        return $this->render('example/index.html.twig');
    }

    /**
     * @Route("/form", name="form")
     * @Method({"GET", "POST"})
     */
    public function formAction(Request $request): Response
    {
        $examples = $this->getDoctrine()->getRepository(Example::class);
        $example = new Example();

        $form = $this->createForm(ExampleType::class, $example);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($example);
            $manager->flush();

            return $this->redirectToRoute('form');
        }

        return $this->render('example/form.html.twig', [
            'examples' => $examples->findAll(),
            'form' => $form->createView()
        ]);
    }
}
