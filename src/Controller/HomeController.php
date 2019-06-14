<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 14/06/19
 * Time: 13:12
 */

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route ("/", name = "home_index")
     */

    public function index(): Response
    {

        return $this->render( 'home/index.html.twig');
    }
}