<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="create_produit")
     */
    public function createPtoduit(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $produit = new Produit();
        $produit->setCode("12345");
        $produit->setDescription("some random description");
        $produit->setName("random product");
        $produit->setPrix(43.2);

        $entityManager->persist($produit);

        $entityManager->flush();

        return new Response("produit sauvegardé avec l'id ".$produit->getId());
    }
}
