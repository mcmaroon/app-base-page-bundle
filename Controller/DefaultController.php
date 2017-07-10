<?php

namespace App\BasePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($slug) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBasePageBundle:BasePage')->findOneBySlug($slug);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find entity.');
        }

        return $this->render('AppBasePageBundle:Default:index.html.twig', array(
                    'entity' => $entity
        ));
    }

}
