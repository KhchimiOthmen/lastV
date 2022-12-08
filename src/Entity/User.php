<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8,max=8)
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=15)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=15)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5,max=5)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=1,max=3)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=15)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8)
     *
     */
    private $mdp;
    /**
     * @Assert\EqualTo(propertyPath="confirm_psw")
     */
    public $confirm_psw;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8,max=8)
     */
    private $numtel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=15)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=15)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"default"="NULL"})
     * @Assert\Length(min=3,max=255)
     */
    private $id_group;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=10,max=10)
     */
    private $date_inscri;

    /**
     * @ORM\OneToOne(targetEntity=Roles::class, mappedBy="cin", orphanRemoval=true)
     *
     */
    private $role;

    /**
     *
     *
     * @ORM\Column( type="integer", nullable=false, options={"default"=0})
     */

    private $etat;

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }









    protected $captchaCode;






    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getIdGroup(): ?string
    {
        return $this->id_group;
    }

    public function setIdGroup(?string $id_group): self
    {
        $this->id_group = $id_group;

        return $this;
    }

    public function getDateInscri(): ?string
    {
        return $this->date_inscri;
    }

    public function setDateInscri(string $date_inscri): self
    {
        $this->date_inscri = $date_inscri;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }
    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }






}
