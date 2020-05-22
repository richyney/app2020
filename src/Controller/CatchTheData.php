<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;        
        
class CatchTheData extends AbstractController
{
    /**
     * @Route("/catchTheData", name="catch") methods={"GET","POST"}
     */
    public function index()
    {
        $request = Request::createFromGlobals(); // the envelope, and were looking inside it.

        $type = $request->request->get('type', 'none');
        if($type == 'loginuser')
    	{
            
             // catch the username and password
             $name = $request->request->get('un', 'this is the default word');
			 $pass = $request->request->get('pw', 'this is the default word');
			 
			 
			 $namel = htmlspecialchars($name); //This could be used to protect against Cross-site scripting 
		     $passl = htmlspecialchars($pass);
		   
					if (empty($namel) == FALSE)// This valdidation ensures that some information is entered- potentially a way of sanitising the content but more research needed
					{
          
						$repository = $this->getDoctrine()->getRepository(Login::class);
						
						$user = $repository->findOneBy(['username' => $namel, 'password' => $passl]); //check if these match what is in the DB
						
						
								if($user){
											return new Response( 'Now loggin in to the'.
											$user->getAccType().'\'s dashboard.');
										} 
								else {
											return new Response(
											'This user name does not exist');
									}
					}
					else{
					return new Response('You need to enter a proper name');
											
					}
					
		}
		
		
		
		
        else if($type == 'ruser'){

        $name = $request->request->get('un', 'this is the default word');
		$pass = $request->request->get('pw', 'this is the default word');
        $accT = $request->request->get('accT', 'this is the default word');
      
        
        // to work the objects
        $entityManager = $this->getDoctrine()->getManager();

        // create blank entity of type "Login"
        $login = new Login();
        
        $login->setUsername($name);
        $login->setPassword($pass);
		$login->setAccType($accT);


      
        $entityManager->persist($login);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        
       
        return new Response(
            'it went into the database'
        );

       }
        
         return new Response(
            'You have been registered. Now you can login'
        );
    }
}
