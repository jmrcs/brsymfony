<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 15:08
 */

namespace MovieBundle\Controller;

use MovieBundle\Form\Type\PersonType;
use MovieBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PersonController extends Controller
{

    /** @Template */
    public function listPersonsAction()
    {
        $r=$this->get('persons_service')->getAllPersons();
        return array('allPersons'=> $r);
    }

    /** @Template */
    public function createPersonAction(Request $request)
    {
        $formType = new PersonType();
        $form = $this->get('form.factory')->create($formType);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $person=$form->getData();

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->persist($person);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('person_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function editPersonAction(Request $request, $id)
    {
        $person = $this
            ->get('persons_service')
            ->getPerson($id);

        $formType = new PersonType();
        $form = $this->get('form.factory')->create($formType, $person, [
            'action' => $this->generateUrl('person_edit', [
                'id' => $id
            ])
        ]);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $person=$form->getData($id);

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->merge($person);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('person_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function deletePersonAction($id)
    {
        $person = $this->getDoctrine()
            ->getRepository('MovieBundle:Person')
            ->find($id);

        $em = $this->get('doctrine.orm.default_entity_manager');
        $em->remove($person);
        $em->flush();

        return new RedirectResponse(
        //$this->generateUrl('person_list', array('msg' => $id))
            $this->generateUrl('person_list')
        );
    }
}