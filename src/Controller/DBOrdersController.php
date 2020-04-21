<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;   

class DBOrdersController extends AbstractController
{
    /**
     * @Route("/dborders", name="dborders")
     */
    public function index()
    {
        return $this->render('dborders/index.html.twig', [
            'controller_name' => 'DBOrdersController',
        ]);
    }
}
