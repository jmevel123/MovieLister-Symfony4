<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use App\Entity\Category;
use App\Entity\Comment;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create("en_US");

        // Creez 3 caté fakéés
        for($i=0; $i<3; $i++){
            $category = new Category();
            $category->setTitle($faker->sentence())
                     ->setDescription($faker->paragraph());
            $manager->persist($category);

        //Creer entre 4 et 6 articles
            for($j=0; $j<3; $j++){
                $article = new Articles();

                $content = "<p>".join($faker->paragraphs(5), "</p> <p>"). "</p>";
                $article->setTitle($faker->sentence())
                         ->setContent($content)
                         ->setImage($faker->imageUrl("350", "150", 'nature'))
                         ->setCreatedAt($faker->dateTimeBetween(" -6 months"))
                         ->setCategory($category);

                $manager->persist($category);

                         
                for ($k = 1; $k < mt_rand(4,10); $k++) {
                    $comment = new Comment();
                    
                    $content = "<p>".join($faker->paragraphs(5), "</p> <p>"). "</p>";

                    $days=(new \DateTime())->diff($article->getCreatedAt())->days;

                    $comment->setAuthor($faker->name)
                            ->setContent($content)
                            ->setCreatedAt($faker->dateTimeBetween("-" .$days. "days"))
                            ->setArticle($article);
                    $manager->persist($article);
                }
            }
        }

        $manager->flush();
    }
}
