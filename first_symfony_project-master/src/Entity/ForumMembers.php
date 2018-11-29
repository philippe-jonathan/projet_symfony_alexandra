<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumMembersRepository")
 */
class ForumMembers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $member_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $members_pseudo;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $members_mdp;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $members_email = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMemberId(): ?int
    {
        return $this->member_id;
    }

    public function setMemberId(int $member_id): self
    {
        $this->member_id = $member_id;

        return $this;
    }

    public function getMembersPseudo(): ?string
    {
        return $this->members_pseudo;
    }

    public function setMembersPseudo(string $members_pseudo): self
    {
        $this->members_pseudo = $members_pseudo;

        return $this;
    }

    public function getMembersMdp(): ?string
    {
        return $this->members_mdp;
    }

    public function setMembersMdp(string $members_mdp): self
    {
        $this->members_mdp = $members_mdp;

        return $this;
    }

    public function getMembersEmail(): ?array
    {
        return $this->members_email;
    }

    public function setMembersEmail(?array $members_email): self
    {
        $this->members_email = $members_email;

        return $this;
    }
}
