<?php

namespace FilmappBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MovieControllerTest extends WebTestCase
{
    public function testShowmovie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showMovie');
    }

    public function testDeletemovie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteMovie');
    }

    public function testCreatemovie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createMovie');
    }

    public function testEditmovie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editMovie');
    }

}
