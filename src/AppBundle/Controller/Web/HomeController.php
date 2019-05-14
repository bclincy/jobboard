<?php
namespace AppBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Jobs;
use AppBundle\Form\UpdateJobsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\JobsType;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class HomeController
 * @package AppBundle\Controller\Web
 */

class HomeController extends BaseController
{
    /**
     *
     * @Route("/")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', []);
    }
}
