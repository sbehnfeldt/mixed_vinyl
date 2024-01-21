<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;


class VinylController extends AbstractController
{

    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => [
                ['song' => 'Thick as a Brick', 'artist' => 'Jethro Tull'],
                ['song' => 'Starship Trooper', 'artist' => 'Yes'],
                ['song' => 'Court of the Crimson King', 'artist' => 'King Crimson'],
                ['song' => 'Cinema Show', 'artist' => 'Genesis'],
            ]]);
    }


    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response
    {
        if ( $slug ) {
            $title = u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All';
        }
        return new Response( 'Genre: ' . $title);
    }
}
