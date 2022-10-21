<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
//use App\Entity\User;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use App\Form\PostType;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Validator\Constraints\Length;

class BlogController extends AbstractController
{
    /**
    * @Route("/", name="blog")
    */
    public function index(Request $request,PostRepository $pubrepo): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)
                                ->findBy([],['time'=>'DESC']);
        foreach ($posts as $post)
        {
            $ch=$post->getImage();
            if(substr($ch,0,3)=="C:\\"){
                $post->setImageshown(substr($ch,37,strlen($ch)));
                }
                else
                                $post->setImageshown($ch);
        }
        $latests = $pubrepo->getLatest();
        $post = new Post();
        /*$user = $this->getDoctrine()->getRepository(User::class)
                                ->find('20');*/

        $form = $this->createForm(PostType::class,$post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = new File($post->getImage());
            $fileName= md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'),$fileName);
            $post->setImage($this->getParameter('upload_directory').'\\'.$fileName);
            $post->setSlug("thisslug");
            $post->setType("image");
            $post->setLikes(0);
            $post->setTime( new \DateTime('now'));
            $post->setUserid(20);
            $em= $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('blog');
        }
        return $this->render('blog/index.html.twig', [
           'formpost'=>$form->createView(),
           'posts'=> $posts,
           'latests'=> $latests
        ]);
    }
      /**
     * @Route("/blog/{id}", name="blogshow")
     */
    public function show($id,PostRepository $pubrepo )
    {
        $post = $this->getDoctrine()->getRepository(Post::class)
                                ->findOneBy(['id' => $id]);
                                $ch=$post->getImage();
                                if(substr($ch,0,3)=="C:\\"){
                                $post->setImageshown(substr($ch,37,strlen($ch)));
                                }
                                else
                                $post->setImageshown($ch);
        $latests = $pubrepo->getLatest();

        return $this->render('blog/show.html.twig', [
           'post'=> $post,
           'latests'=> $latests
        ]);
    }
     /**
     * @Route("/posts/user", name="user_posts")
     */
    public function renderUserPosts(Int $user,PostRepository $pubrepo )
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)
                                ->findBy(['user' => $user],['time'=>'DESC']);

        

        return $this->render('blog/user_posts.html.twig', [
           'posts'=> $posts,
           'user'=>$user
        ]);
    }

    /**
     * @Route("/addpost", name="addpost")
     */
    public function addpost(Request $request)
    {
        $post=new Post();
        $title= $request->query->get("title");
        $body= $request->query->get("body");
        $image= $request->query->get("image");
        $type= "image";
        $likes= 0;
        $file = new File($image);
        $fileName= md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('upload_directory'),$fileName);
        $em=$this->getDoctrine()->getManager();


        $post->setBody($body);
        $post->setTitle($title);
        $post->setType("image");
        $post->setTime( new \DateTime('now'));
        $post->setLikes(0);
        $post->setImage($this->getParameter('upload_directory').'\\'.$fileName);
        $post->setSlug("slug");
        $post->setUserid(20);

        $em= $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($post);
        return new JsonResponse($formatted);
    }
     /**
     * @Route("/displayposts", name="display_posts")
     */
    public function desplayposts()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)
                                ->findAll();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($posts);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/deletePost",name="delete_post")
     */
    public function deletePost(Request $request){
        $id=$request->get("id");
        $em= $this->getDoctrine()->getManager();
        $post=$em->getRepository(Post::class)->find($id);
        if($post!=null)
        {
            $em->remove($post);
            $em->flush();

            $serializer= new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize("Post a ete supprimée avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id post invalide.");
    }

     /**
     * @Route("/detailspost", name="detailspost")
     */
    public function details(Request $request)
    {
        $id=$request->get("id");
        $post = $this->getDoctrine()->getRepository(Post::class)
                                ->findOneBy(['id' => $id]);

        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($post);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/displaycomments", name="display_comments")
     */
    public function desplaycomments(Request $request)
    {
        $id=$request->get("id");
        $comments = $this->getDoctrine()->getRepository(Comment::class)
                                ->findBy(['post_id'=>$id]);
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($comments);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/addcomment", name="addcomment")
     */
    public function addcomment(Request $request)
    {
        $comment=new Comment();
        $idpost=$request->query->get("idpost");
        $body= $request->query->get("body");

        $em=$this->getDoctrine()->getManager();


        $comment->setBody($body);
        $comment->setCreated( new \DateTime('now'));
        $comment->setpostid($idpost);
        $comment->setUserid(20);

        $em= $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($comment);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/deletecomment",name="delete_comment")
     */
    public function deletecomment(Request $request){
        $id=$request->get("id");
        $em= $this->getDoctrine()->getManager();
        $comment=$em->getRepository(Comment::class)->find($id);
        if($comment!=null)
        {
            $em->remove($comment);
            $em->flush();

            $serializer= new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize("comment a ete supprimée avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id comment invalide.");
    }




}
