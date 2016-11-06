<?php

namespace FilmappBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GenreControllerTest extends WebTestCase
{
    public function testShowgenre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showGenre');
    }

    public function testCreategenre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createGenre');
    }

    public function testDeletegenre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteGenre');
    }

    public function testListgenres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listGenres');
    }

    public function testEditgenre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editGenre');
    }

}
