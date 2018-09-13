<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testOrganisation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/vie-de-la-guilde/organisation');
    }

    public function testLieuxdevie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/vie-de-la-guilde/lieux-de-vie');
    }

    public function testOnrecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/vie-de-la-guilde/on-recherche');
    }

    public function testAmbassade()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ambassade');
    }
}