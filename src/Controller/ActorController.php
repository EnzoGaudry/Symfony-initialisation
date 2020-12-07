<?php

namespace App\Controller;

use App\Entity\Actor;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
* @Route("/actor", name="actor_")
*/

class ActorController extends AbstractController
{
    /**
     * @Route("/{actorId}", name="show")
     * @ParamConverter("actor", class="App\Entity\Actor", options={"mapping": {"actorId": "id"}})
     */
    public function show(Actor $actor): Response
    {
        return $this->render('actor/show.html.twig', ['actor' => $actor]);
    }
}
