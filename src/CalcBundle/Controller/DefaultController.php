<?php

namespace CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CalcBundle\Form\Type\OperationType;
use CalcBundle\Entity\Operation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /** @Template */
    public function indexAction($x, $y, $operation)
    {
        if ($operation == "suma") {
            $r=$this->get('Calculator')->CalcSum($x,$y);
        }
        if ($operation == "resta"){
            $r=$this->get('Calculator')->CalcRes($x,$y);
        }
        if ($operation == "multiplica"){
            $r=$this->get('Calculator')->CalcMul($x,$y);
        }
        if ($operation == "divide"){
            $r=$this->get('Calculator')->CalcDiv($x,$y);
        }
        return array('x'=>$x, 'y'=>$y, 'operation'=>$operation, 'r'=>$r);
    }
    /** @Template */
    public function listAction()
    {
        $r=$this->get('ListOperations')->getCalculations();
        return array('operations'=> $r);
    }
    /** @Template */
    public function doAction(Request $request)
    {
        $formType = new OperationType();
        $form = $this->get('form.factory')->create($formType);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $operation=$form->getData();

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->persist($operation);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('calc_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
}