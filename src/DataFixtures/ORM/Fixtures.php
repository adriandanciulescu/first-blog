<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $author = new Author();
        $author
            ->setName('Chad Armstrong')
            ->setTitle('Developer')
            ->setUsername('Chaddychad')
            ->setCompany('Trump Entertainment Resorts Inc.')
            ->setShortBio('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam justo odio, vehicula vitae elit sit amet, vulputate malesuada risus. Ut luctus diam ipsum, et malesuada mi tristique sed. Pellentesque ac viverra turpis. Quisque blandit ligula eget lacus semper dapibus aliquet a orci. Nulla luctus erat quis nibh semper, in consequat diam porta. Pellentesque et venenatis quam, et tincidunt nibh. Curabitur malesuada ornare dapibus.')
            ->setPhone('07666333666')
            ->setFacebook('chadarmstrong')
            ->setTwitter('chad.armstrong');
    
        $manager->persist($author);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle("Chad's first blog post")
            ->setSlug('chads-first')
            ->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')
            ->setBody('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.')
            ->setAuthor($author);

        $manager->persist($blogPost);
        $manager->flush();
    }       
}