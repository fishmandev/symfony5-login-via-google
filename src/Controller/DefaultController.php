<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/profile", name="app_profile")
     */
    public function profile()
    {
        return $this->render('default/profile.html.twig');
    }

    /**
     * @Route("/admin", name="app_admin")
     */
    public function admin()
    {
        return $this->render('default/admin.html.twig');
    }
}
