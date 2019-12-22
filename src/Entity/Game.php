<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $event_date;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Team", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $away_team;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Team", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $home_team;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $away_score;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $home_score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->event_date;
    }

    public function setEventDate(\DateTimeInterface $event_date): self
    {
        $this->event_date = $event_date;

        return $this;
    }

    public function getAwayTeam(): ?Team
    {
        return $this->away_team;
    }

    public function setAwayTeam(Team $away_team): self
    {
        $this->away_team = $away_team;

        return $this;
    }

    public function getHomeTeam(): ?Team
    {
        return $this->home_team;
    }

    public function setHomeTeam(Team $home_team): self
    {
        $this->home_team = $home_team;

        return $this;
    }

    public function getAwayScore(): ?int
    {
        return $this->away_score;
    }

    public function setAwayScore(?int $away_score): self
    {
        $this->away_score = $away_score;

        return $this;
    }

    public function getHomeScore(): ?int
    {
        return $this->home_score;
    }

    public function setHomeScore(?int $home_score): self
    {
        $this->home_score = $home_score;

        return $this;
    }
}
