<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="DayTicketType", type="boolean")
     */
    private $DayTicketType;

	/**
	 * @var bool
	 *
	 * @ORM\Column(name="HalfDayTicketType", type="boolean")
	 */
    private $HalfDayTicketType;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="smallint")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Book
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

	/**
	 * Set dayTicketType
	 *
	 * @param boolean $dayTicketType
	 *
	 * @return Book
	 */
	public function setDayTicketType($dayTicketType)
	{
		$this->DayTicketType = $dayTicketType;

		return $this;
	}

	/**
	 * Get dayTicketType
	 *
	 * @return boolean
	 */
	public function getDayTicketType()
	{
		return $this->DayTicketType;
	}

	/**
	 * Set halfDayTicketType
	 *
	 * @param boolean $halfDayTicketType
	 *
	 * @return Book
	 */
	public function setHalfDayTicketType($halfDayTicketType)
	{
		$this->HalfDayTicketType = $halfDayTicketType;

		return $this;
	}

	/**
	 * Get halfDayTicketType
	 *
	 * @return boolean
	 */
	public function getHalfDayTicketType()
	{
		return $this->HalfDayTicketType;
	}

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Book
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Book
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
}
