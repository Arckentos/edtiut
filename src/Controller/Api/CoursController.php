<?php

namespace App\Controller\Api;

use App\Entity\Avis;
use App\Entity\Professeur;
use App\Entity\Cours;
use App\Form\AvisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\AccessMap;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api")
 */
class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="api_cours")
     */
    public function getCours(EntityManagerInterface $em)
    {
        // Commun
        $cours = $em->getRepository(Cours::class)->findAll();

        // Méthode 3
        return $this->json(array_map(function ($unCours) {
            return $unCours->toArray();
        }, $cours));
    }

    /**
     * @Route("/cours/{id}", name="api_cours_id")
     */
    public function getUnCours(Cours $unCours)
    {
        return $this->json($unCours->toArray());
    }

    /**
     * @Route("/cours/{id}/delete", name="api_delete_cours", methods={"DELETE"})
     */
    public function deleteCours(EntityManagerInterface $em, Cours $unCours)
    {
        $em->remove($unCours);
        $em->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(204);

        return $response;

        // OU => Symfony renvoie tout seul le header
        // $return $this->json(null,204);
    }

    /**
     * @Route("/cours/{id}/put", name="api_put_cours", methods={"PUT"})
     */
    public function putCours(EntityManagerInterface $em, Cours $unCours)
    {
        $em->persist($unCours);
        $em->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(204);

        return $response;
    }


}
