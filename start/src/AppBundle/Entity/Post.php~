<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Proj", type="string", length=255)
     */
    private $proj;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proj
     *
     * @param string $proj
     *
     * @return Post
     */
    public function setProj($proj)
    {
        $this->proj = $proj;

        return $this;
    }

    /**
     * Get proj
     *
     * @return string
     */
    public function getProj()
    {
        return $this->proj;
    }
}
