<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NourritureControllerControllerTest extends WebTestCase
{
    public function testListernourriture()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'nourriture');
    }

    public function testAjouternourriture()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/nourriture/ajouter');
    }

}
