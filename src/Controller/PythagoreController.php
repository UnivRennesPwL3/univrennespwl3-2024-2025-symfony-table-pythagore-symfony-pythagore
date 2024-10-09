<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utils\PythagoreUtility;



class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagoreUtility = $pythagoreUtility;
    }


    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function DisplayPythagoreAction(): Response
    {
        $table = $this->pythagoreUtility->display();
        return $this->render('displayPythagore.html.twig', [
            'title' => 'Symfony & table de pythagore',
            "name" => "LAWSON-HETCHELY Laté Seth",
            'table' => $table
        ]);
    }
}
