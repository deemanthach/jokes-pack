<?php


namespace Deemanthach\Jokespack\Tests;


use Deemanthach\Jokespack\JokesFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokesFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke',$joke);

    }


    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $list = [
            'abc','lorem ipsum','dolor amet'
        ];;

        $jokes = new JokesFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke,$list);
    }
}