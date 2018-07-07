<?php

namespace App\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GalleryController extends Controller
{
    /**
     * @Route("/new", name="_gallery_new")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function profileAction(Request $request)
    {
        return $this->render('admin/pages/gallery/new.html.twig', []);
    }
}