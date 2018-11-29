<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumPostRepository")
 */
class ForumPost
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
    private $post_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $post_creator;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post_text;

    /**
     * @ORM\Column(type="integer")
     */
    private $post_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $post_forum_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostId(): ?int
    {
        return $this->post_id;
    }

    public function setPostId(int $post_id): self
    {
        $this->post_id = $post_id;

        return $this;
    }

    public function getPostCreator(): ?int
    {
        return $this->post_creator;
    }

    public function setPostCreator(int $post_creator): self
    {
        $this->post_creator = $post_creator;

        return $this;
    }

    public function getPostText(): ?string
    {
        return $this->post_text;
    }

    public function setPostText(string $post_text): self
    {
        $this->post_text = $post_text;

        return $this;
    }

    public function getPostTime(): ?int
    {
        return $this->post_time;
    }

    public function setPostTime(int $post_time): self
    {
        $this->post_time = $post_time;

        return $this;
    }

    public function getTopicId(): ?int
    {
        return $this->topic_id;
    }

    public function setTopicId(int $topic_id): self
    {
        $this->topic_id = $topic_id;

        return $this;
    }

    public function getPostForumId(): ?int
    {
        return $this->post_forum_id;
    }

    public function setPostForumId(int $post_forum_id): self
    {
        $this->post_forum_id = $post_forum_id;

        return $this;
    }
}
