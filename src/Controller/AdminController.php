<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * @Route("/admin", name="admin_")
 *
 * Class AdminController
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * Admin Home Page
     *
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    public function manageUsers(): Response
    {
        return $this->render('admin/manage_users.html.twig');
    }

//    public function manageAPI(): Response
//    {
//        return $this->render('admin/manage_api.html.twig');
//    }

    public function showBugReport(): Response
    {
        return $this->render('admin/bug_report.html.twig');
    }

    public function toParamate(): Response
    {
        return $this->render('admin/parameters.html.twig');
    }

    public function growIMDB()
    {
        // manage IMDB API here

    }
}