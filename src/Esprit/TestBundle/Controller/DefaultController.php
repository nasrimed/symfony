<?php

namespace Esprit\TestBundle\Controller;

use Esprit\TestBundle\Entity\Modele;
use Esprit\TestBundle\Form\ModeleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritTestBundle:Default:index.html.twig');
    }
    public function ListAction()
    {
        // initialiser le entity manager
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('EspritTestBundle:Modele')->findAll();
        return $this->render('EspritTestBundle:Default:list.html.twig',array("modeles"=>$modele));


    }
    public function AjoutAction(Request $request){
        // créer l'entité
        $Modele=new Modele();
        $Form=$this->createForm(ModeleType::class,$Modele);
        $Form->handleRequest($request);
        if($Form->isValid()){
            // On récupère l'EntityManager
            $em=$this->getDoctrine()->getManager();
            //persister l objet dans le entity manager
            $em->persist($Modele);
            // On flush l'entity manager pour que les données soient insérées ou mises à jour en BDD
            $em->flush();
            return $this->redirectToRoute('esprit_test_list');

        }
        return $this->render('EspritTestBundle:Default:ajout.html.twig',array("form"=>$Form->createView()));


    }
    public function deleteAction(Request $request,$id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        // On récupère le repository
        // find($id): retourner l'entité correspondant à l'id $id
        $modele = $em->getRepository("EspritTestBundle:Modele")->find($id);
        // supprime l'entité donnée
        $em->remove($modele);
        // Exécute un DELETE sur $modele
        $em->flush();
        return $this->redirectToRoute('esprit_test_list');
    }
    public function UpdateAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $Modele=$em->getRepository("EspritTestBundle:Modele")->find($id);
        $Form=$this->createForm(ModeleType::class,$Modele);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Modele);
            $em->flush();
            return $this->redirectToRoute('esprit_test_list');

        }
        return $this->render('EspritTestBundle:Default:update.html.twig',array("form"=>$Form->createView()));


    }

}
