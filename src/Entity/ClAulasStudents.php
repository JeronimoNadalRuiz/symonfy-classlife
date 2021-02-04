<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClAulasStudents
 *
 * @ORM\Table(name="cl_aulas_students")
 * @ORM\Entity
 */
class ClAulasStudents
{
    /**
     * @var int
     *
     * @ORM\Column(name="aula_student_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aulaStudentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="student_id", type="integer", nullable=true)
     */
    private $studentId;

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

    public function getAulaStudentId(): ?int
    {
        return $this->aulaStudentId;
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


}
