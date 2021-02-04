<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClAulasCalendar
 *
 * @ORM\Table(name="cl_aulas_calendar")
 * @ORM\Entity
 */
class ClAulasCalendar
{
    /**
     * @var int
     *
     * @ORM\Column(name="aula_calendar_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aulaCalendarId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aula_id", type="integer", nullable=true)
     */
    private $aulaId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="calendar_date_ini", type="datetime", nullable=true)
     */
    private $calendarDateIni;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="calendar_date_end", type="datetime", nullable=true)
     */
    private $calendarDateEnd;

    public function getAulaCalendarId(): ?int
    {
        return $this->aulaCalendarId;
    }

    public function getAulaId(): ?int
    {
        return $this->aulaId;
    }

    public function setAulaId(?int $aulaId): self
    {
        $this->aulaId = $aulaId;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    public function getCalendarDateIni(): ?\DateTimeInterface
    {
        return $this->calendarDateIni;
    }

    public function setCalendarDateIni(?\DateTimeInterface $calendarDateIni): self
    {
        $this->calendarDateIni = $calendarDateIni;

        return $this;
    }

    public function getCalendarDateEnd(): ?\DateTimeInterface
    {
        return $this->calendarDateEnd;
    }

    public function setCalendarDateEnd(?\DateTimeInterface $calendarDateEnd): self
    {
        $this->calendarDateEnd = $calendarDateEnd;

        return $this;
    }


}
