<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagore;

    public function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagore = $pythagoreUtility;
    }


    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        $tableHtml = $this->pythagore->display();
        return $this->render('displayPythagore.html.twig', [
            'table_html' => $tableHtml,
            'my_name' => 'MONEL GAFFAN',
        ]);
    }
}
