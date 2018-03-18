<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 3/19/2018
 * Time: 12:01 AM
 */

namespace App\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Fidry\AliceDataFixtures\Loader\PurgerLoader;

class DataFixtures implements FixtureInterface
{
    private $files = [
        __DIR__ . '/fixtures.yml',
    ];
    private $purgerLoader;

    public function __construct(PurgerLoader $purgerLoader)
    {
        $this->purgerLoader = $purgerLoader;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->purgerLoader->load($this->files);
    }
}