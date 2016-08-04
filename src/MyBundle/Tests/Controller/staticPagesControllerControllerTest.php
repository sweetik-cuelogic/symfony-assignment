<?php

namespace MyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class staticPagesControllerControllerTest extends WebTestCase
{
    public function testAboutus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/aboutUs');
    }

    public function testCareer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/career');
    }

    public function testClients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clients');
    }

    public function testToc()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/toc');
    }

}
