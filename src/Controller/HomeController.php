<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(): Response{
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }
        return $this->render(
            'lucky/number.html.twig', [
                'number' => $number
            ]
        );
    }
}