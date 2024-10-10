<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utility\PythagoreUtility;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagore){
        $this->pythagoreUtility = $pythagore;
    }

    #[Route('/pythagore/view', name: 'DisplayPythagoreAction')]
    public function index(): Response
    {
        $tableHTML = $this->pythagoreUtility->display();
        
        return $this->render('displayPythagore.html.twig', [
            'controller_name' => $tableHTML,
        ]);
    }
}
