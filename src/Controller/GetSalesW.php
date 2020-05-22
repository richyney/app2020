<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Statistics;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;        
use Symfony\Component\HttpFoundation\Session\SessionInterface;  


   
class GetSalesW extends AbstractController
{








    /**
     * @Route("/getSalesW", name="/getSalesW") methods={"GET","POST"}
     */
    public function index()
	
	{
	
	
                $repository = $this->getDoctrine()->getRepository(Statistics::class);
                
                $p = $repository->findAll();
				$ret = array();
				foreach($p as $obj){ 
			   
				$ret[] = $obj->getSalesperwk();
				
				
  
               }
				
				
               
               
                   
               // var_dump(json_encode($ret));
                
                // This is the response that we are sending back to the client.
                return new Response( json_encode($ret)
				
                        
                    );
	
	
				
                                   
    
    }
    
    
}