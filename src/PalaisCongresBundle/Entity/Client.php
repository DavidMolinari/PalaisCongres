<?php

namespace PalaisCongresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="PalaisCongresBundle\Repository\ClientRepository")
 */
class Client extends User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @var User
     * @ORM\ManyToOne(targetEntity="PalaisCongresBundle\Entity\User")
     */

    private $user;

    /**
     * Set user
     *
     * @param \PalaisCongresBundle\Entity\User $user
     *
     * @return Client
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="tailleZizi", type="integer")
     */
    private $tailleZizi;

    /**
     * Client constructor.
     */
    function __construct($zizi)
    {
        parent::__construct();
        $this->setTailleZizi($zizi);

    }

    public function setUser(\PalaisCongresBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \PalaisCongresBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tailleZizi
     *
     * @param integer $tailleZizi
     *
     * @return Client
     */
    public function setTailleZizi($tailleZizi)
    {
        $this->tailleZizi = $tailleZizi;

        return $this;
    }

    /**
     * Get tailleZizi
     *
     * @return integer
     */
    public function getTailleZizi()
    {
        return $this->tailleZizi;
    }
}
