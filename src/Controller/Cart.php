<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;   

class Cart extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function cart()
    {
        return $this->render('sample/cart.html.twig', [
            'controller_name' => 'Cart',
        ]);
    }
}
