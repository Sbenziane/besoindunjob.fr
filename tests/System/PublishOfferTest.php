<?php

namespace App\Tests\System;

use App\Adapter\InMemory\Repository\JobSeekerRepository;
use App\Entity\JobSeeker;
use App\UseCase\RegisterJobSeeker;
use Assert\LazyAssertionException;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class PublishOfferTest
 * @package App\Tests\System
 */
class PublishOfferTest extends \App\Tests\Integration\PublishOfferTest
{
    use SystemTestTrait;
}
