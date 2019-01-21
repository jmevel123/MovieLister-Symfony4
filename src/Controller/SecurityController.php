<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="security_register")
     */
    public function register(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute("security_login");

        }
        return $this->render("security/registration.html.twig", [
            "form" => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="security_login")
     */
    public function login()
    {
        return $this->render("security/login.html.twig");
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
        return $this->redirectToRoute("popular_movies");
    }

    /**
     * @Route("/profile/{id}", name="profile_user")
     */
    public function edit_user(User $user, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $updated_user = $form->getData();
            $this->addFlash('success', 'User updated!');

            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('profile_user', ["id" => $user->getId()]);
        }
        return $this->render('security/profile.html.twig', [
            "user" => $user,
            "profileForm" => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_user")
     */
    public function delete_user(User $user, ObjectManager $manager)
    {
        $currentUserId = $user->getId();

        if ($currentUserId == $user->getId()) {
            $session = $this->get('session');
            $session = new Session();
            $session->invalidate();
        }
        $manager->remove($user);
        $manager->flush();

        return $this->redirectToRoute("security_logout");

    }
}
