<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClStudents
 *
 * @ORM\Table(name="cl_students")
 * @ORM\Entity
 */
class ClStudents
{
    /**
     * @var int
     *
     * @ORM\Column(name="student_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $studentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="student_name", type="string", length=128, nullable=true)
     */
    private $studentName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="student_lastname", type="string", length=128, nullable=true)
     */
    private $studentLastname;

    public function getStudentId(): ?int
    {
        return $this->studentId;
    }

    public function getStudentName(): ?string
    {
        return $this->studentName;
    }

    public function setStudentName(?string $studentName): self
    {
        $this->studentName = $studentName;

        return $this;
    }

    public function getStudentLastname(): ?string
    {
        return $this->studentLastname;
    }

    public function setStudentLastname(?string $studentLastname): self
    {
        $this->studentLastname = $studentLastname;

        return $this;
    }


}
