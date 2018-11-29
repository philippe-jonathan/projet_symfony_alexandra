<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumCategorieRepository")
 */
class ForumCategorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cat_nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $cat_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cat_order;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatNom(): ?string
    {
        return $this->cat_nom;
    }

    public function setCatNom(string $cat_nom): self
    {
        $this->cat_nom = $cat_nom;

        return $this;
    }

    public function getCatId(): ?int
    {
        return $this->cat_id;
    }

    public function setCatId(int $cat_id): self
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    public function getCatOrder(): ?int
    {
        return $this->cat_order;
    }

    public function setCatOrder(int $cat_order): self
    {
        $this->cat_order = $cat_order;

        return $this;
    }
}
