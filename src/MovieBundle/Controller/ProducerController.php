<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 15:08
 */

namespace MovieBundle\Controller;

use MovieBundle\Form\Type\ProducerType;
use MovieBundle\Entity\Producer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProducerController extends Controller
{

    /** @Template */
    public function listProducersAction()
    {
        $r=$this->get('producers_service')->getAllProducers();
        return array('allProducers'=> $r);
    }

    /** @Template */
    public function createProducerAction(Request $request)
    {
        $formType = new ProducerType();
        $form = $this->get('form.factory')->create($formType);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $producer=$form->getData();

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->persist($producer);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('producer_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function editProducerAction(Request $request, $id)
    {
        $producer = $this
            ->get('producers_service')
            ->getProducer($id);

        $formType = new ProducerType();
        $form = $this->get('form.factory')->create($formType, $producer, [
            'action' => $this->generateUrl('person_edit', [
                'id' => $id
            ])
        ]);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $producer=$form->getData($id);

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->merge($producer);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('producer_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function deleteProducerAction($id)
    {
        $producer = $this->getDoctrine()
            ->getRepository('MovieBundle:Movie')
            ->find($id);

        $em = $this->get('doctrine.orm.default_entity_manager');
        $em->remove($producer);
        $em->flush();

        return new RedirectResponse(
        //$this->generateUrl('movie_list', array('msg' => $id))
            $this->generateUrl('producer_list')
        );
    }
}