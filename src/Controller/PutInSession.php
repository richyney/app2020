<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PutInSession extends AbstractController

{
    /**
    * @Route("/putInSession")
    */
    public function putinSession()
    {

        return new Response(
            'we put stuff in the session'
        );
    }
}

