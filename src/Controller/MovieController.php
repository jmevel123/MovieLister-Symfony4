<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/movies", name="movies")
     */
    public function index()
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    /**
     * @Route("/movies_display", name="popular_movies")
     */
    public function home()
    {
        $popular_movie = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=349c30b6ff4983f0329818aa31414d2e&language=en-US&page=1");
        $json_result = json_decode($popular_movie);

        return $this->render("movie/movies.html.twig", [
            "movies" => $json_result,
        ]);
    }

    /**
     * @Route("/movies_dispay/{id}", name="display_movie")
     */
    public function show($id)
    {
        $popular_movie = file_get_contents("https://api.themoviedb.org/3/movie/$id?api_key=349c30b6ff4983f0329818aa31414d2e&language=en-US");
        // var_dump($popular_movie);
        $json_result = json_decode($popular_movie);
        return $this->render('movie/show.html.twig', [
            "movie" => $json_result,
        ]);
    }
}
