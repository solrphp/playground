<?php

declare(strict_types=1);

/*
 * This file is part of the solrphp playground.
 * (c) wicliff <wicliff.wolda@gmail.com>
 */

namespace Solrphp\Playground\Controller;

use Solarium\Client;
use Solarium\QueryType\Select\Query\Query;
use Solrphp\Playground\Form\Data\RequestData;
use Solrphp\Playground\Form\Type\RequestType;
use Solrphp\SolariumBundle\SolrApi\CoreAdmin\Manager\CoreManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * IndexController.
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request                     $request
     * @param \Solarium\Client                                              $client
     * @param \Solrphp\SolariumBundle\SolrApi\CoreAdmin\Manager\CoreManager $coreManager
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route(path="/", name="playground_index")
     */
    public function index(Request $request, Client $client, CoreManager $coreManager): Response
    {
        $data = new RequestData();
        $form = $this->createForm(RequestType::class, $data);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            for ($i = 0; $i < $data->getRequests(); ++$i) {
                $client->select(new Query());
            }
        }

        $coreManager->status();

        return $this->renderForm('solrphp/index.html.twig', [
            'form' => $form,
        ]);
    }
}
