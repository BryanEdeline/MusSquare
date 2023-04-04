<?php
namespace App\Controller;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\Cache\Adapter\AbstractAdapter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;


class MenuController extends AbstractController
{
    public function acceuil(): Response
    {
        return $this->render('base.html.twig'); 
    }
}
?>