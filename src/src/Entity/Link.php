<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\TimeStampableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LinkRepository")
 * @ORM\Table(name="link")
 * @ORM\HasLifecycleCallbacks
 */
class Link
{
    use TimeStampableTrait;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $visits;

    /**
     * @ORM\Column(type="integer", name="user_id",nullable=true)
     */
    private $userId;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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

    public function getVisits(): ?int
    {
        return $this->visits;
    }

    public function setVisits(?int $visits): self
    {
        $this->visits = $visits;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $user_id): self
    {
        $this->userId = $user_id;

        return $this;
    }


}
