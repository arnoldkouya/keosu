<?php

namespace Keosu\DataModel\CommentModelBundle\Entity;

use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\CommentModelBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\CommentModelBundle\Entity\CommentRepository")
 */
class Comment extends DataModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDataModel", type="integer")
     **/
    private $idDataModel;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dataModelObjet", type="string", length=255)
     */
    private $objetDataModel;
    
    /**
     * @ORM\OneToOne(targetEntity="Keosu\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    public function __construct() {
        // set default date to now
        $this->setDate(new \DateTime());
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Comment
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
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
     * Set idDataModel
     *
     * @param integer $idDataModel
     * @return Comment
     */
    public function setIdDataModel($idDataModel)
    {
        $this->idDataModel = $idDataModel;
    
        return $this;
    }

    /**
     * Get idDataModel
     *
     * @return integer 
     */
    public function getIdDataModel()
    {
        return $this->idDataModel;
    }
    
    /**
     * Set objetDataModel
     *
     * @param \DateTime $date
     * @return Comment
     */
    public function setObjectDataModel($objetDataModel)
    {
        $this->objetDataModel = $objetDataModel;
    
        return $this;
    }

    /**
     * Get objetDataModel
     *
     * @return \DateTime 
     */
    public function getObjectDataModel()
    {
        return $this->objetDataModel;
    }
    
        /**
     * Set user
     *
     * @param User $user
     * @return Comment
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}