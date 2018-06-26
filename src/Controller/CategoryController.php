<?php

namespace App\Controller;

use App\Entity\CategoryEntity;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="category")
     */

    public function addCategory(Request $request)
    {

        $category = new CategoryEntity();

        $form = $this->createFormBuilder($category)
            ->add('name',TextType::class)
            ->add('save',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
                $category->setHidden(false);
            };
            $entityManager->persist($category);
            $entityManager->flush();
            return $this->redirectToRoute('categoryList');

        }

        return $this->render('category/new.html.twig',[
            'controller_name' => 'CategoryController',
            'form' => $form->createView(),
        ]);



      /*  $category =new CategoryEntity();
        $category->setName('Stand-UP 2012');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        return $this->redirectToRoute('index');*/
    }

    public function showFilms()
    {
$category = $this->getDoctrine()->getRepository(CategoryEntity::class)->find(12212);
\dump($category);
    return $this->render('category/show-films.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    public function showCategory(){
        $category = $this->getDoctrine()->getRepository(CategoryEntity::class)->findAll();
        \dump($category);
        return $this->render('category/categoryList.html.twig', [
            'category' => $category,
        ]);

    }

    public function filter($letter){

        $category = $this->getDoctrine()->getRepository(CategoryEntity::class)->findByFirstLetter($letter);
        \dump($category);
        return $this->render('category/categoryList.html.twig', [
            'category' => $category,
        ]);


    }



}
