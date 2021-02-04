<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClAulasAttendance
 *
 * @ORM\Table(name="cl_aulas_attendance")
 * @ORM\Entity
 */
class ClAulasAttendance
{
    /**
     * @var int
     *
     * @ORM\Column(name="attendance_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attendanceId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="attendance_date", type="datetime", nullable=true)
     */
    private $attendanceDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attendance_status", type="integer", nullable=true)
     */
    private $attendanceStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aula_id", type="integer", nullable=true)
     */
    private $aulaId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="student_id", type="integer", nullable=true)
     */
    private $studentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;

    public function getAttendanceId(): ?int
    {
        return $this->attendanceId;
    }

    public function getAttendanceDate(): ?\DateTimeInterface
    {
        return $this->attendanceDate;
    }

    public function setAttendanceDate(?\DateTimeInterface $attendanceDate): self
    {
        $this->attendanceDate = $attendanceDate;

        return $this;
    }

    public function getAttendanceStatus(): ?int
    {
        return $this->attendanceStatus;
    }

    public function setAttendanceStatus(?int $attendanceStatus): self
    {
        $this->attendanceStatus = $attendanceStatus;

        return $this;
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

    public function getStudentId(): ?int
    {
        return $this->studentId;
    }

    public function setStudentId(?int $studentId): self
    {
        $this->studentId = $studentId;

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


}
