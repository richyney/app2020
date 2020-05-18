<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;   

class Charts extends AbstractController
{
    /**
     * @Route("/charts", name="charts")
     */
    public function charts()
    {
        return $this->render('sample/charts.html.twig', [
            'controller_name' => 'Charts',
        ]);
    }
}
