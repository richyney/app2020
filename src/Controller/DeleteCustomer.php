<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;        
        
class DeleteCustomer extends AbstractController
{
    /**
     * @Route("/deleteCustomer", name="delete") methods={"GET","POST"}
     */
    public function index()
    {
        $request = Request::createFromGlobals(); // the envelope, and were looking inside it.
            
             // catch the username and password
        $name = $request->request->get('cn', 'this is the default word');
			 
			 $em = $this->getDoctrine()->getManager();
             $repository = $em->getRepository(Order::class);
			 $person = $repository->findOneByName($name);
          
             
			 
			         $em->remove($person);
					 $em->flush();
                     return new Response('Order removed');
                   
                    
        
             }     
}
 