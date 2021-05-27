<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectsRepository::class)
 */
class Projects
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $imgAlt;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $imgTitle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getImgName(): ?string
    {
        return $this->imgName;
    }

    public function setImgName(string $imgName): self
    {
        $this->imgName = $imgName;

        return $this;
    }

    public function getImgAlt(): ?string
    {
        return $this->imgAlt;
    }

    public function setImgAlt(string $imgAlt): self
    {
        $this->imgAlt = $imgAlt;

        return $this;
    }

    public function getImgTitle(): ?string
    {
        return $this->imgTitle;
    }

    public function setImgTitle(string $imgTitle): self
    {
        $this->imgTitle = $imgTitle;

        return $this;
    }
}
