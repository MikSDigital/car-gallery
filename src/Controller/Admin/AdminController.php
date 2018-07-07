<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/", name="app_dashboard", methods={"GET"})
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function dashboardAction(Request $request)
    {
        return $this->render('admin/pages/dashboard.html.twig', []);
    }

    /**
     * @Route("/profile", name="app_profile")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function profileAction(Request $request)
    {
        return $this->render('admin/pages/profile.html.twig', []);
    }
}
