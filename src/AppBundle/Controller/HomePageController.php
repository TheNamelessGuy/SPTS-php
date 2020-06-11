<?php

    namespace AppBundle\Controller;


    use Sonata\MediaBundle\PHPCR\MediaManager;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Form\Extension\Core\DataTransformer\ChoiceToValueTransformer;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\FormEvent;
    use Symfony\Component\Form\FormEvents;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomePageController extends Controller {

        /**
         * @Route("/", name="HomePage")
         */
        public function homepageAction(Request $request)
        {
            list($profile_authentication_ni, $profile_authentication_ddm) = self::checkAuthentication();

            $posts = $this->getDoctrine()->getRepository("Application\Sonata\NewsBundle\Entity\Post")->findBy(['enabled' => 'true'], ['publicationDateStart' => 'DESC']);

            $posts_html = $this->creatingPostsHtml($posts);
            $filters_html = $this->fillingFilters();
            $slider_posts_html = self::sliderFilling($posts);

            //dump();

            if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {

                if ($_POST["ajax_id"] == 1) {

                    $selected_filter = $_POST["filter"];
                    $posts = $this->getDoctrine()->getRepository("Application\Sonata\NewsBundle\Entity\Post")->findBy(['enabled' => 'true'], ['publicationDateStart' => 'DESC']);

                    if ($selected_filter == "Počisti")
                        $filtered_posts = $posts;
                    else {

                        $filtered_posts = [];

                        foreach ($posts as $post) {

                            if ($post->getTags() != null) {

                                foreach ($post->getTags() as $tag) {

                                    if ($tag->getName() == $selected_filter)
                                        array_push($filtered_posts, $post);
                                }
                            }
                        }
                    }

                    $filtered_posts_html = "";

                    for ($i = 0; $i < 2; $i++) {

                        if ($i == 0)
                            $filtered_posts_html .= "<div class='col s6 left-col'>";
                        else
                            $filtered_posts_html .= "<div class='col s6 right-col'>";

                        $counter = 0;

                        foreach ($filtered_posts as $filtered_post) {

                            if ($i == 0 && $counter % 2 == 0)
                                $filtered_posts_html .= "<div class='post'><img src='" . $this->container->get($filtered_post->getImage()->getProviderName())->generatePublicUrl($filtered_post->getImage(), 'reference') . "'><div class='post-text'><h5>" . $filtered_post->getTitle() . "</h5><p>" . substr($filtered_post->getAbstract(), 0, 160) . "...</p></div></div>";
                            else if ($i == 1 && $counter % 2 != 0)
                                $filtered_posts_html .= "<div class='post'><img src='" . $this->container->get($filtered_post->getImage()->getProviderName())->generatePublicUrl($filtered_post->getImage(), 'reference') . "'><div class='post-text'><h5>" . $filtered_post->getTitle() . "</h5><p>" . substr($filtered_post->getAbstract(), 0, 160) . "...</p></div></div>";

                            $counter++;
                        }

                        $filtered_posts_html .= "</div>";
                    }

                    return new Response($filtered_posts_html);

                } else if ($_POST["ajax_id"] == 2) {


                }

            } else {

                return $this->render("HomePage/home_page.html.twig", [
                    'posts_html' => $posts_html,
                    'filters_html' => $filters_html,
                    'slider_posts_html' => $slider_posts_html,
                    'profile_authentication_ni' => $profile_authentication_ni,
                    'profile_authentication_ddm' => $profile_authentication_ddm
                ]);
            }

            /*list($Label, $Properties, $DropDonwArrow, $AdminLink, $Filter) = self::navbarVar();

            $posts = $this->getDoctrine()->getRepository("Application\Sonata\NewsBundle\Entity\Post")->findAll();
            $tags = $this->getDoctrine()->getRepository("Application\Sonata\ClassificationBundle\Entity\Tag")->findAll();
            $options = [];

            foreach ($tags as $tag) {

                $option = [$tag->getName() => $tag->getName()];
                $options += $option;
            }

            $form = $this->createFormBuilder([])
                ->add("filter", ChoiceType::class, [
                    'choices'  => $options,
                    'multiple' => true,
                ])
                ->getForm();
            $form->handleRequest($request);

            if ($request->isXmlHttpRequest()) {

                $filtered_posts = [];
                $filters = $form->get("filter")->getData();

                foreach ($posts as $post) {

                    if (is_array($filters)) {

                        $add_to_list = false;
                        foreach ($tags as $tag) {

                            foreach ($filters as $selected_tag) {

                                if ($selected_tag == $tag->getName()) {

                                    $add_to_list = true;
                                }
                            }
                        }
                    } else {

                        $add_to_list = false;
                        foreach ($tags as $tag) {

                            if ($filters == $tag->getName()) {

                                $add_to_list = true;
                            }
                        }
                    }

                    if ($add_to_list) {

                        array_push($filtered_posts, $post);
                    }
                }

                global $html;
                $html = "";
                $html .= "<div class=\"col s4 news-list-item\">";
                global $correctValue;
                $correctValue = 1;
                global $counter;
                $counter = 1;
                if (is_array($filtered_posts)) {

                    foreach ($filtered_posts as $filtered_post) {

                        if ($counter == $correctValue) {

                            $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_post->getId() . "'\">";
                            $html .= "<img src=\"" . $this->container->get($filtered_post->getImage()->getReference())->generatePublicUrl($filtered_post->getImage(), 'reference') . "\" />";
                            $html .= "<div>";
                            $html .= "<h5>" . $filtered_post->getTitle() . "</h5>";
                            $html .= "<div class=\"abstract\">" . $filtered_post->getAbstract() . "</div>";
                            $html .= "<div class=\"tags\">";
                            if (is_array($filtered_posts->getTags())) {

                                foreach ($filtered_posts->getTags() as $tag) {

                                    if ($tag->getName() == "Important") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "New") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "VeryImportant") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                        $html .= "</div>";
                                    }
                                }

                            } else {

                                if ($filtered_posts->getTags()->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }
                            $html .= "</div>";
                            $html .= "</div>";
                            $html .= "</div>";
                            $correctValue += 3;
                        }
                        $counter += 1;
                    }
                    $html .= "</div>";

                } else {

                    if ($counter == $correctValue) {

                        $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_posts->getId() . "'\">";
                        $html .= "<img src=\"" . $this->container->get($filtered_posts->getImage()->getReference())->generatePublicUrl($filtered_posts->getImage(), 'reference') . "\" />";
                        $html .= "<div>";
                        $html .= "<h5>" . $filtered_posts->getTitle() . "</h5>";
                        $html .= "<div class=\"abstract\">" . $filtered_posts->getAbstract() . "</div>";
                        $html .= "<div class=\"tags\">";

                        if (is_array($filtered_posts->getTags())) {

                            foreach ($filtered_posts->getTags() as $tag) {

                                if ($tag->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }

                        } else {

                            if ($filtered_posts->getTags()->getName() == "Important") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "New") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                $html .= "</div>";
                            }
                        }
                        $html .= "</div>";
                        $html .= "</div>";
                        $html .= "</div>";
                        $correctValue += 3;
                    }
                    $counter += 1;
                    $html .= "</div>";
                }
                $html .= "<div class=\"col s4 news-list-item\">";
                $correctValue = 2;
                $counter = 1;
                if (is_array($filtered_posts)) {

                    foreach ($filtered_posts as $filtered_post) {

                        if ($counter == $correctValue) {

                            $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_post->getId() . "'\">";
                            $html .= "<img src=\"" . $this->container->get($filtered_post->getImage()->getReference())->generatePublicUrl($filtered_post->getImage(), 'reference') . "\" />";
                            $html .= "<div>";
                            $html .= "<h5>" . $filtered_post->getTitle() . "</h5>";
                            $html .= "<div class=\"abstract\">" . $filtered_post->getAbstract() . "</div>";
                            $html .= "<div class=\"tags\">";
                            if (is_array($filtered_posts->getTags())) {

                                foreach ($filtered_posts->getTags() as $tag) {

                                    if ($tag->getName() == "Important") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "New") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "VeryImportant") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                        $html .= "</div>";
                                    }
                                }

                            } else {

                                if ($filtered_posts->getTags()->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }
                            $html .= "</div>";
                            $html .= "</div>";
                            $html .= "</div>";
                            $correctValue += 3;
                        }
                        $counter += 1;
                    }
                    $html .= "</div>";

                } else {

                    if ($counter == $correctValue) {

                        $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_posts->getId() . "'\">";
                        $html .= "<img src=\"" . $this->container->get($filtered_posts->getImage()->getReference())->generatePublicUrl($filtered_posts->getImage(), 'reference') . "\" />";
                        $html .= "<div>";
                        $html .= "<h5>" . $filtered_posts->getTitle() . "</h5>";
                        $html .= "<div class=\"abstract\">" . $filtered_posts->getAbstract() . "</div>";
                        $html .= "<div class=\"tags\">";

                        if (is_array($filtered_posts->getTags())) {

                            foreach ($filtered_posts->getTags() as $tag) {

                                if ($tag->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }

                        } else {

                            if ($filtered_posts->getTags()->getName() == "Important") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "New") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                $html .= "</div>";
                            }
                        }
                        $html .= "</div>";
                        $html .= "</div>";
                        $html .= "</div>";
                        $correctValue += 3;
                    }
                    $counter += 1;
                    $html .= "</div>";
                }
                $html .= "<div class=\"col s4 news-list-item\">";
                $correctValue = 3;
                $counter = 1;
                if (is_array($filtered_posts)) {

                    foreach ($filtered_posts as $filtered_post) {

                        if ($counter == $correctValue) {

                            $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_post->getId() . "'\">";
                            $html .= "<img src=\"" . $this->container->get($filtered_post->getImage()->getReference())->generatePublicUrl($filtered_post->getImage(), 'reference') . "\" />";
                            $html .= "<div>";
                            $html .= "<h5>" . $filtered_post->getTitle() . "</h5>";
                            $html .= "<div class=\"abstract\">" . $filtered_post->getAbstract() . "</div>";
                            $html .= "<div class=\"tags\">";
                            if (is_array($filtered_posts->getTags())) {

                                foreach ($filtered_posts->getTags() as $tag) {

                                    if ($tag->getName() == "Important") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "New") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                        $html .= "</div>";

                                    } else if ($tag->getName() == "VeryImportant") {

                                        $html .= "<div class=\"one-tag\">";
                                        $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                        $html .= "</div>";
                                    }
                                }

                            } else {

                                if ($filtered_posts->getTags()->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }
                            $html .= "</div>";
                            $html .= "</div>";
                            $html .= "</div>";
                            $correctValue += 3;
                        }
                        $counter += 1;
                    }
                    $html .= "</div>";

                } else {

                    if ($counter == $correctValue) {

                        $html .= "<div onclick=\"javascript:window.location='http://localhost/SPTS-PNIOv3/web/app_dev.php/post/" . $filtered_posts->getId() . "'\">";
                        $html .= "<img src=\"" . $this->container->get($filtered_posts->getImage()->getReference())->generatePublicUrl($filtered_posts->getImage(), 'reference') . "\" />";
                        $html .= "<div>";
                        $html .= "<h5>" . $filtered_posts->getTitle() . "</h5>";
                        $html .= "<div class=\"abstract\">" . $filtered_posts->getAbstract() . "</div>";
                        $html .= "<div class=\"tags\">";

                        if (is_array($filtered_posts->getTags())) {

                            foreach ($filtered_posts->getTags() as $tag) {

                                if ($tag->getName() == "Important") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "New") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                    $html .= "</div>";

                                } else if ($tag->getName() == "VeryImportant") {

                                    $html .= "<div class=\"one-tag\">";
                                    $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                    $html .= "</div>";
                                }
                            }

                        } else {

                            if ($filtered_posts->getTags()->getName() == "Important") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "New") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-star\"></i></span>";
                                $html .= "</div>";

                            } else if ($filtered_posts->getTags()->getName() == "VeryImportant") {

                                $html .= "<div class=\"one-tag\">";
                                $html .= "<span><i class=\"fas fa-exclamation very-important\"></i></span>";
                                $html .= "</div>";
                            }
                        }
                        $html .= "</div>";
                        $html .= "</div>";
                        $html .= "</div>";
                        $correctValue += 3;
                    }
                    $counter += 1;
                    $html .= "</div>";
                }

                return new JsonResponse(count($filtered_posts));
            }

            dump($posts, $tags, $options);
            return $this->render("HomePage/home_page.html.twig", [
                'Label' => $Label,
                'Properties' => $Properties,
                'DropDownArrow' => $DropDonwArrow,
                'AdminLink' => $AdminLink,
                'Filter' => $Filter,
                'FilterForm' => $form->createView(),
                'Posts' => $posts,
            ]);*/
        }

        public function filteringPosts($posts, $selected_filter) {

            $filtered_posts = [];

            foreach ($posts as $post) {

                if ($post->getTags() != null) {

                    foreach ($post->getTags() as $tag) {

                        if ($tag->getName() == $selected_filter)
                            array_push($filtered_posts, $post);
                    }
                }
            }
            
            return $filtered_posts;
        }

        private function sliderFilling($posts) {

            $slider_posts_html = "";

            foreach ($posts as $post) {

                if ($post->getCollection()) {

                    $rn = rand(1, 3);

                    if ($post->getCollection()->getId() == 1) {

                        $slider_posts_html .= "<li><img src=\"" . $this->container->get($post->getImage()->getProviderName())->generatePublicUrl($post->getImage(), 'reference') . "\"><div class=\"caption ";

                        if ($rn == 1)
                            $slider_posts_html .= "left-align";
                        else if ($rn == 2)
                            $slider_posts_html .= "center-align";
                        else if ($rn == 3)
                            $slider_posts_html .= "right-align";

                        $slider_posts_html .= "\"><h3>" . $post->getTitle() . "</h3><h5 class=\"light grey-text text-lighten-3\">" . substr($post->getAbstract(), 0, 150) . "...</h5></div></li>";
                    }
                }
            }

            return $slider_posts_html;
        }

        public function creatingPostsHtml($posts) {

            $posts_html = "";

            for ($i = 0; $i < 2; $i++) {

                if ($i == 0)
                    $posts_html .= "<div class='col s6 left-col'>";
                else
                    $posts_html .= "<div class='col s6 right-col'>";

                $counter = 0;

                foreach ($posts as $post) {

                    if ($i == 0 && $counter % 2 == 0)
                        $posts_html .= "<div class='post'><img src='" . $this->container->get($post->getImage()->getProviderName())->generatePublicUrl($post->getImage(), 'reference') . "'><div class='post-text'><h5>" . $post->getTitle() . "</h5><p>" . substr($post->getAbstract(), 0, 180) . "...</p></div></div>";
                    else if ($i == 1 && $counter % 2 != 0)
                        $posts_html .= "<div class='post'><img src='" . $this->container->get($post->getImage()->getProviderName())->generatePublicUrl($post->getImage(), 'reference') . "'><div class='post-text'><h5>" . $post->getTitle() . "</h5><p>" . substr($post->getAbstract(), 0, 180) . "...</p></div></div>";

                    $counter++;
                }

                $posts_html .= "</div>";
            }

            return $posts_html;
        }

        private function checkAuthentication() {

            $securityContext = $this->container->get('security.authorization_checker');

            if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

                $profile_authentication_ni = "<a class=\"dropdown-trigger\" href=\"#!\" data-target=\"ProfileNavbarItem\">" . $this->getUser() . "<i class=\"material-icons right\">arrow_drop_down</i></a></li>";
                $profile_authentication_ddm = "<ul id=\"ProfileNavbarItem\" class=\"dropdown-content\"><li><a href=\"./profile\">Profil</a></li>";

                if ($this->get('security.authorization_checker')->isGranted('ROLE_DEVELOPER') || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN'))
                    $profile_authentication_ddm .= "<li class=\"divider\"></li><li><a href=\"./admin\">Administracija</a></li>";

                $profile_authentication_ddm .= "<li class=\"divider\"></li><li><a href=\"./logout\">Odjava</a></li></ul>";

            } else {

                $profile_authentication_ni = "<a href=\"./login\">Prijava</a>";
                $profile_authentication_ddm = "";
            }

            return [
                $profile_authentication_ni,
                $profile_authentication_ddm
            ];
        }

        private function fillingFilters() {

            $filters = $this->getDoctrine()->getRepository("Application\Sonata\ClassificationBundle\Entity\Tag")->findAll();
            $filter_html = "";

            foreach ($filters as $filter) {
                $filter_html .= "<li class=\"filter-item\"><p><label><input type=\"checkbox\" /><span>" . $filter->getName() . "</span></label></p></li>";
            }

            return $filter_html;
        }

        /*public function navbarVar() {

            $securityContext = $this->container->get('security.authorization_checker');

            $Filter = true;

            if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

                if ($this->get('security.authorization_checker')->isGranted('ROLE_DEVELOPER') || $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {

                    $AdminLink = true;

                } else {

                    $AdminLink = false;
                }

                $Label = $this->getUser();
                $Properties = "class=dropdown-trigger data-target=UserDDID";
                $DropDownArrow = "<i class=\"material-icons right\">arrow_drop_down</i>";

            } else {

                $Label = "Prijava";
                $Properties = "href=login";
                $DropDownArrow = "";
                $AdminLink = false;
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