<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 3:04
 */

namespace MovieBundle\Controller;

use MovieBundle\Form\Type\MovieType;
use MovieBundle\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MovieController extends Controller
{

    /** @Template */
    public function listMoviesAction()
    {
        $r=$this->get('movies_service')->getAllMovies();
        return array('allMovies'=> $r);
    }

    //
    /** @Template */
    public function viewMovieAction($id)
    {
        $r=$this->get('movies_service')->getMovie($id);
        return array('movie'=> $r);
    }

    /** @Template */
    public function createMovieAction(Request $request)
    {
        $formType = new MovieType();
        $form = $this->get('form.factory')->create($formType);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $movie=$form->getData();

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->persist($movie);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('movie_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function editMovieAction(Request $request, $id)
    {
        $movie = $this
            ->get('movies_service')
            ->getMovie($id);

        $formType = new MovieType();
        $form = $this->get('form.factory')->create($formType, $movie, [
            'action' => $this->generateUrl('movie_edit', [
                'id' => $id
            ])
        ]);

        if($request -> isMethod("POST")){
            $form->handleRequest($request);
            if($form->isValid()){
                $movie=$form->getData($id);

                $em = $this->get('doctrine.orm.default_entity_manager');
                $em->merge($movie);
                $em->flush();

                return new RedirectResponse(
                    $this->generateUrl('movie_list')
                );
            }
        }
        return array('form'=>$form->createView());
    }
    //
    /** @Template */
    public function deleteMovieAction($id)
    {
        $movie = $this->getDoctrine()
            ->getRepository('MovieBundle:Movie')
            ->find($id);

        $em = $this->get('doctrine.orm.default_entity_manager');
        $em->remove($movie);
        $em->flush();

        return new RedirectResponse(
        //$this->generateUrl('movie_list', array('msg' => $id))
            $this->generateUrl('movie_list')
        );
    }
}