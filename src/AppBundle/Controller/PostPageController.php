<?php

    namespace AppBundle\Controller;
    
    use Application\Sonata\NewsBundle\Entity\Comment;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Form\Extension\Core\Type\ButtonType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    
    class PostPageController extends Controller {

        /**
         * @Route("/post/{post}", name="post_page")
         */
        public function postpageAction(Request $request, $post) {

            return $this->render("PostPage/post_page.html.twig", []);

            /*if ($this->getDoctrine()->getRepository('Application\Sonata\NewsBundle\Entity\Post')->find($post)) {

                list($Label, $Properties, $DropDonwArrow, $AdminLink, $Filter) = self::navbarVar();
                $comments = $this->getDoctrine()->getRepository('Application\Sonata\NewsBundle\Entity\Post')->find($post)->getComments();

                $form = $this->createFormBuilder([])
                    ->add("comment", TextareaType::class, ["required" => true, "label" => "Komentar"])
                    ->getForm();
                $form->handleRequest($request);
                $entityManager = $this->getDoctrine()->getManager();

                if ($request->isXmlHttpRequest()) {

                    if (trim($form["comment"]->getData()) != "") {

                        $comment = new Comment();
                        $message = htmlspecialchars(strip_tags(trim($form["comment"]->getData())), ENT_QUOTES, "UTF-8");

                        $comment->setPost($this->getDoctrine()->getRepository('Application\Sonata\NewsBundle\Entity\Post')->find($post));
                        $comment->setMessage($message);
                        $comment->setStatus(1);

                        $entityManager->persist($comment);
                        $entityManager->flush();
                    }

                    return new JsonResponse($message);
                }

                dump($this->getDoctrine()->getRepository('Application\Sonata\NewsBundle\Entity\Post')->find($post));
                return $this->render("PostPage/post_page.html.twig", [
                    'Label' => $Label,
                    'Properties' => $Properties,
                    'DropDonwArrow' => $DropDonwArrow,
                    'AdminLink' => $AdminLink,
                    'Filter' => $Filter,
                    'Post' => $this->getDoctrine()->getRepository('Application\Sonata\NewsBundle\Entity\Post')->find($post),
                    'CommentForm' => $form->createView(),
                ]);
            }

            return $this->render($this->getParameter('resources/templates_folder') .  '/TwigBundle/views/Exception/exception.html.twig');*/
        }

        /*public function navbarVar() {

            $securityContext = $this->container->get('security.authorization_checker');

            if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

                if ($this->get('security.authorization_checker')->isGranted('ROLE_DEVELOPER') || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {

                    $AdminLink = true;

                } else {

                    $AdminLink = false;
                }

                $Label = $this->getUser();
                $Properties = "class=dropdown-trigger data-target=UserDDID";
                $DropDownArrow = "<i class=\"material-icons right\">arrow_drop_down</i>";
                $Filter = "";

            } else {

                $Label = "Prijava";
                $Properties = "href=login";
                $DropDownArrow = "";
                $AdminLink = false;
                $Filter = "";
            }

            return [
                $Label,
                $Properties,
                $DropDownArrow,
                $AdminLink,
                $Filter,
            ];
        }*/
    }