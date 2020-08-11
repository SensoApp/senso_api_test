<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StatementFileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=StatementFileRepository::class)
 */
class StatementFile
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
    private $user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $operationdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $operations;

    /**
     * @ORM\Column(type="text")
     */
    private $communication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $account;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $referencemovement;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getOperationdate(): ?\DateTimeInterface
    {
        return $this->operationdate;
    }

    public function setOperationdate(\DateTimeInterface $operationdate): self
    {
        $this->operationdate = $operationdate;

        return $this;
    }

    public function getOperations(): ?string
    {
        return $this->operations;
    }

    public function setOperations(string $operations): self
    {
        $this->operations = $operations;

        return $this;
    }

    public function getCommunication(): ?string
    {
        return $this->communication;
    }

    public function setCommunication(string $communication): self
    {
        $this->communication = $communication;

        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getReferencemovement(): ?string
    {
        return $this->referencemovement;
    }

    public function setReferencemovement(string $referencemovement): self
    {
        $this->referencemovement = $referencemovement;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
