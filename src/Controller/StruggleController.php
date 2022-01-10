<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class StruggleController extends AbstractController
{
    public function _construct()
    {

    }

    /**
     * @Route("/home", name="home")
     */
    public function homePage(): Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/search", name="search_struggle_page")
     */
    public function searchStrugglePage(): Response
    {
        return $this->render('Struggle/search_struggle.html.twig');
    }
}

