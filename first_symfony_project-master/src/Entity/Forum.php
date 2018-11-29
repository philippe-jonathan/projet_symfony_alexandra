<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumRepository")
 */
class Forum
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
    private $forum_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_cat_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $forum_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forum_desc;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_order;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_last_post_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_topic;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_post;

    /**
     * @ORM\Column(type="integer")
     */
    private $auth_view;

    /**
     * @ORM\Column(type="integer")
     */
    private $auth_post;

    /**
     * @ORM\Column(type="integer")
     */
    private $auth_topic;

    /**
     * @ORM\Column(type="integer")
     */
    private $auth_annonce;

    /**
     * @ORM\Column(type="integer")
     */
    private $auth_modo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForumId(): ?int
    {
        return $this->forum_id;
    }

    public function setForumId(int $forum_id): self
    {
        $this->forum_id = $forum_id;

        return $this;
    }

    public function getForumCatId(): ?int
    {
        return $this->forum_cat_id;
    }

    public function setForumCatId(int $forum_cat_id): self
    {
        $this->forum_cat_id = $forum_cat_id;

        return $this;
    }

    public function getForumName(): ?string
    {
        return $this->forum_name;
    }

    public function setForumName(string $forum_name): self
    {
        $this->forum_name = $forum_name;

        return $this;
    }

    public function getForumDesc(): ?string
    {
        return $this->forum_desc;
    }

    public function setForumDesc(string $forum_desc): self
    {
        $this->forum_desc = $forum_desc;

        return $this;
    }

    public function getForumOrder(): ?int
    {
        return $this->forum_order;
    }

    public function setForumOrder(int $forum_order): self
    {
        $this->forum_order = $forum_order;

        return $this;
    }

    public function getForumLastPostId(): ?int
    {
        return $this->forum_last_post_id;
    }

    public function setForumLastPostId(int $forum_last_post_id): self
    {
        $this->forum_last_post_id = $forum_last_post_id;

        return $this;
    }

    public function getForumTopic(): ?int
    {
        return $this->forum_topic;
    }

    public function setForumTopic(int $forum_topic): self
    {
        $this->forum_topic = $forum_topic;

        return $this;
    }

    public function getForumPost(): ?int
    {
        return $this->forum_post;
    }

    public function setForumPost(int $forum_post): self
    {
        $this->forum_post = $forum_post;

        return $this;
    }

    public function getAuthView(): ?int
    {
        return $this->auth_view;
    }

    public function setAuthView(int $auth_view): self
    {
        $this->auth_view = $auth_view;

        return $this;
    }

    public function getAuthPost(): ?int
    {
        return $this->auth_post;
    }

    public function setAuthPost(int $auth_post): self
    {
        $this->auth_post = $auth_post;

        return $this;
    }

    public function getAuthTopic(): ?int
    {
        return $this->auth_topic;
    }

    public function setAuthTopic(int $auth_topic): self
    {
        $this->auth_topic = $auth_topic;

        return $this;
    }

    public function getAuthAnnonce(): ?int
    {
        return $this->auth_annonce;
    }

    public function setAuthAnnonce(int $auth_annonce): self
    {
        $this->auth_annonce = $auth_annonce;

        return $this;
    }

    public function getAuthModo(): ?int
    {
        return $this->auth_modo;
    }

    public function setAuthModo(int $auth_modo): self
    {
        $this->auth_modo = $auth_modo;

        return $this;
    }
}
