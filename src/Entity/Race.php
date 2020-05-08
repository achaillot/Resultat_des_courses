<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RaceRepository")
 */
class Race
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total_distance;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $swim_distance;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $bike_distance;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $run_distance;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $total_time;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $swim_time;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $bike_time;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $run_time;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vertical_gain;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total_finisher;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ranking;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $percent_finisher;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event", inversedBy="races")
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="races")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTotalDistance(): ?float
    {
        return $this->total_distance;
    }

    public function setTotalDistance(?float $total_distance): self
    {
        $this->total_distance = $total_distance;

        return $this;
    }

    public function getSwimDistance(): ?float
    {
        return $this->swim_distance;
    }

    public function setSwimDistance(?float $swim_distance): self
    {
        $this->swim_distance = $swim_distance;

        return $this;
    }

    public function getBikeDistance(): ?float
    {
        return $this->bike_distance;
    }

    public function setBikeDistance(?float $bike_distance): self
    {
        $this->bike_distance = $bike_distance;

        return $this;
    }

    public function getRunDistance(): ?float
    {
        return $this->run_distance;
    }

    public function setRunDistance(?float $run_distance): self
    {
        $this->run_distance = $run_distance;

        return $this;
    }

    public function getTotalTime(): ?\DateTimeInterface
    {
        return $this->total_time;
    }

    public function setTotalTime(?\DateTimeInterface $total_time): self
    {
        $this->total_time = $total_time;

        return $this;
    }

    public function getSwimTime(): ?\DateTimeInterface
    {
        return $this->swim_time;
    }

    public function setSwimTime(?\DateTimeInterface $swim_time): self
    {
        $this->swim_time = $swim_time;

        return $this;
    }

    public function getBikeTime(): ?\DateTimeInterface
    {
        return $this->bike_time;
    }

    public function setBikeTime(?\DateTimeInterface $bike_time): self
    {
        $this->bike_time = $bike_time;

        return $this;
    }

    public function getRunTime(): ?\DateTimeInterface
    {
        return $this->run_time;
    }

    public function setRunTime(?\DateTimeInterface $run_time): self
    {
        $this->run_time = $run_time;

        return $this;
    }

    public function getVerticalGain(): ?int
    {
        return $this->vertical_gain;
    }

    public function setVerticalGain(?int $vertical_gain): self
    {
        $this->vertical_gain = $vertical_gain;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTotalFinisher(): ?int
    {
        return $this->total_finisher;
    }

    public function setTotalFinisher(?int $total_finisher): self
    {
        $this->total_finisher = $total_finisher;

        return $this;
    }

    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    public function setRanking(?int $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function getPercentFinisher(): ?float
    {
        return $this->percent_finisher;
    }

    public function setPercentFinisher(?float $percent_finisher): self
    {
        $this->percent_finisher = $percent_finisher;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
