<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;


/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 * @ORM\Table(name="Message", indexes={@Index(name="created_at_index", columns={"created_at"})})
 * @ORM\HasLifecycleCallbacks()
 */
class Message
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="messages")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="messages")
     */
    private $conversation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $mine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getConversation(): ?Conversation
    {
        return $this->conversation;
    }

    public function setConversation(?Conversation $conversation): self
    {
        $this->conversation = $conversation;

        return $this;
    }

    public function getMine(): bool
    {
        return $this->mine;
    }

    public function setMine(bool $mine): self
    {
        $this->mine = $mine;

        return $this;
    }
}
