<?php

namespace App\Controller;
use App\Entity\ForumMembers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
//composant pour le formulaire
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

//composant pour utiliser $request
use Symfony\Component\HttpFoundation\Request;
 // use Symfony\Component\HttpFoundation\Response;

class CommentsController extends AbstractController
{
    /**
     * @Route("/comment", name="comments")
     */
    public function index()
    {
    	$Comments = $this->getDoctrine()
    	->getrepository('App:Comments')
    	->findAll;
    	
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentsController',
        ]);
     }
    /**
    * @Route("comment/new", name="new")
    */
    public function inscription(Request $request)
    {
        $member = new ForumMembers();
        $form = $this->get('form.factory')->createBuilder(FormType::class, $member)
        ->add('members_pseudo',      TextType::class)

        ->add('members_mdp',     TextType::class)

        ->add('membersEmail',   TextType::class)

        ->add('save',      SubmitType::class)
        
        ->getForm()
        ;
         // Si la requête est en POST
         if($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
    
            // On vérifie que les valeurs entrées sont correctes
                if ($form->isValid()) {
                    // On enregistre notre objet $article dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($article);
                    $em->flush();
    
                    $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');
    
                    // On redirige vers la page de visualisation de l'annonce nouvellement créée
                    return $this->redirectToRoute('comment/new', array('id' => $article->getId()));
                }
            }
    
            // On passe la méthode createView() du formulaire à la vue
            // afin qu'elle puisse afficher le formulaire toute seule
            return $this->render('comments/new.html.twig', array(
            'form' => $form->createView(),
            ));
    }
}
