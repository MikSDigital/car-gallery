<?php

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class GalleryController extends Controller
{
    /**
     * @Route("/new", name="_gallery_new")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function new(Request $request)
    {
        return $this->render('admin/pages/gallery/new.html.twig', []);
    }


    /**
     * @Route("/upload", name="_gallery_upload")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function uploadHandler(Request $request)
    {
        $files = $request->files->all();
        var_dump($files);
        exit();
    }
}