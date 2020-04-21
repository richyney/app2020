<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;        
use Symfony\Component\HttpFoundation\Session\SessionInterface;  

   
class GetOrders extends AbstractController
{
    // add in the session bit
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }








    /**
     * @Route("/getorders", name="catch") methods={"GET","POST"}
     */
    public function index()
    {
        
        
        $this->session->set('delivery', 'yes');

        // gets an attribute by name
        $del = $this->session->get('delivery');
        echo 'the session value is ' . $del;
        
        
        
        
        
        
        
        
                /*
                This page is used for getting data from the database.
                
                No need for templates here.
                
                */
                
                $repository = $this->getDoctrine()->getRepository(Order::class);
                
                $p = $repository->findAll();
                
               foreach($p as $obj){ // take one object off the array.
			   <br>
                  echo '------------------------------';
                  echo $obj->getReference() .'<br>';
                  echo $obj->getAddress() . '<br>';
				  echo $obj->getProducts() .'<br>';
				  echo $obj->getStatus() .'<br>';
               }
                   
             //   var_dump($p);
                
                // This is the response that we are sending back to the client.
                return new Response(
                        'jbjkjb'.var_dump($p)
                    );
    
    }
    
    
}