<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/6/18
 * Time: 8:04 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction()
    {
        $twig = $this->container->get('twig');
        $html = $twig->render('home/show.html.twig');
        return new Response($html);
    }
}