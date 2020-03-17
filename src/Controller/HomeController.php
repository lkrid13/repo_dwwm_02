<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Twig\Environment;

/**
 * Description of HomeController
 *
 * @author 91GA003
 */
class HomeController extends AbstractController {
    
// commenter par l'utilisation de AbstractController
//    /**
//     *
//     * @var Environment
//     */
//    private $twig;
//
//
//    public function __construct(Environment $twig) {
//        $this->twig = $twig;
//    }
//
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response{
        
//        return new Response($this->twig->render('pages/home.html.twig'));
        return $this->render('pages/home.html.twig');
    }
}
