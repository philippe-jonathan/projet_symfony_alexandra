<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumTopicRepository")
 */
class ForumTopic
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
    private $topic_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $forum_id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $topic_title;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_creator;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_vu;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_time;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $topic_genre;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_last_post;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_first_post;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_post;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getForumId(): ?int
    {
        return $this->forum_id;
    }

    public function setForumId(int $forum_id): self
    {
        $this->forum_id = $forum_id;

        return $this;
    }

    public function getTopicTitle(): ?string
    {
        return $this->topic_title;
    }

    public function setTopicTitle(string $topic_title): self
    {
        $this->topic_title = $topic_title;

        return $this;
    }

    public function getTopicCreator(): ?int
    {
        return $this->topic_creator;
    }

    public function setTopicCreator(int $topic_creator): self
    {
        $this->topic_creator = $topic_creator;

        return $this;
    }

    public function getTopicVu(): ?int
    {
        return $this->topic_vu;
    }

    public function setTopicVu(int $topic_vu): self
    {
        $this->topic_vu = $topic_vu;

        return $this;
    }

    public function getTopicTime(): ?int
    {
        return $this->topic_time;
    }

    public function setTopicTime(int $topic_time): self
    {
        $this->topic_time = $topic_time;

        return $this;
    }

    public function getTopicGenre(): ?string
    {
        return $this->topic_genre;
    }

    public function setTopicGenre(string $topic_genre): self
    {
        $this->topic_genre = $topic_genre;

        return $this;
    }

    public function getTopicLastPost(): ?int
    {
        return $this->topic_last_post;
    }

    public function setTopicLastPost(int $topic_last_post): self
    {
        $this->topic_last_post = $topic_last_post;

        return $this;
    }

    public function getTopicFirstPost(): ?int
    {
        return $this->topic_first_post;
    }

    public function setTopicFirstPost(int $topic_first_post): self
    {
        $this->topic_first_post = $topic_first_post;

        return $this;
    }

    public function getTopicPost(): ?int
    {
        return $this->topic_post;
    }

    public function setTopicPost(int $topic_post): self
    {
        $this->topic_post = $topic_post;

        return $this;
    }
}
