<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;  

class UpdateStatus extends AbstractController
{
     /**
     * @Route("/updateStatus", name="updateSatus")
     */
    public function index()
    {
		$request = Request::createFromGlobals(); // info from client side
		
		
		      // catch the reference number
        $refnum = $request->request->get('srn', 'this is the default word');
        
			$em = $this->getDoctrine()->getManager();
             $repository = $em->getRepository(Order::class);
			 $order = $repository->findOneByName($refnum);
        
        
        
      if (!$refnum) {
        throw $this->createNotFoundException(
            'No product found for id '.$refnum
        );
    }

    $order->setStatus('Completed!');
    $em->flush();

    return new Response('Status Updated');
    }
}
