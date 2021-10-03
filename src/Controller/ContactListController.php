<?php

namespace App\Controller;

use App\Entity\ContactList;
use App\Form\ContactListType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactListController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $data = $this->getDoctrine()->getRepository(ContactList::class)->findAll();
        return $this->render('main/index.html.twig',[
            'list'=>$data
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request){
        $contactList=new ContactList();

        $form=$this->createForm(ContactListType::class, $contactList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($contactList);
            $em->flush();

            $this->addFlash('notice','Created Successfully!');

            return $this->redirectToRoute('index');
        }

        return $this->render('main/create.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    #[Route('/update/{id}', name: 'update')]
    public function update(Request $request, $id){

        
        $contactList= $this->getDoctrine()->getRepository(ContactList::class)->find($id);

        $form=$this->createForm(ContactListType::class, $contactList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($contactList);
            $em->flush();

            $this->addFlash('notice','Update Successfully!');

            return $this->redirectToRoute('index');
        }

        return $this->render('main/update.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Request $request, $id){
        
        $contactList= $this->getDoctrine()->getRepository(ContactList::class)->find($id);
        
        $em=$this->getDoctrine()->getManager();
        $em->remove($contactList);
        $em->flush();

        $this->addFlash('notice','Dalete Successfully!');

        return $this->redirectToRoute('index');
    }

    #[Route('/email_check/{input_val}', name: 'email_check')]
    public function emailCheck($input_val):Response
    {
        $email=$this->getDoctrine()->getRepository(ContactList::class)->checkEmailIsExists($input_val);

        return $this->render('main/email_check.html.twig',[
            'message'=>array(
                'email_exist'=>$email[0][1]
            )
        ]);
    }
}
