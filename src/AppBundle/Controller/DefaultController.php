<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $result = new Pichet\TestClassPichet('test',array());
        $params = [];
        $params['init'] = $result;
        $params['const'] = $result::constClass();
        $params['getString'] = $result->getString();
        $params['final'] = "Try again";

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',array("result" => $params));
    }
    
     /**
     * @Route("/codacy", name="codacy")
     */
    public function codacyAction(Request $request)
    {
        $test_codacy = false;
        
        if(false === $test_codacy){
            //undeclared static
            self::wtf();
        }else{
            // unsed else case
        }
        
        // Bad type declaration with second undeclared parameter
        $this->indexAction($test_codacy,3.14);
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',array("result" => $params));
    } 
}
