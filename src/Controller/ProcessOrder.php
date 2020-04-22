<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;        
        
class ProcessOrder extends AbstractController
{
    /**
     * @Route("/processOrder", name="processorder") methods={"GET","POST"}
     */
    public function index()
    {
        $request = Request::createFromGlobals(); // the envelope, and were looking inside it.

  

        $cost = $request->request->get('oc', 'this is the default word');
	
      
        
        // to work the objects
        $entityManager = $this->getDoctrine()->getManager();

        // create blank entity of type "Login"
        $order = new Order();
        
        $order->setcost($cost);
      


      
        $entityManager->persist($order);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        
       
        return new Response(
            'it went into the database'
        );

       }
     
    
}
