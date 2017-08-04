<?php

namespace modeles;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var integer
     */
    private $life;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var integer
     */
    private $xp;

    /**
     * @var string
     */
    private $oauth;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $monnaie;

    /**
     * @var boolean
     */
    private $permitLink;

    /**
     * @var string
     */
    private $twitchAccount;

    /**
     * @var string
     */
    private $twitchType;

    /**
     * @var string
     */
    private $bio;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var boolean
     */
    private $botAntiSpam;

    /**
     * @var boolean
     */
    private $botAntiMaj;

    /**
     * @var boolean
     */
    private $botAntiLink;

    /**
     * @var boolean
     */
    private $botActiveClip;

    /**
     * @var string
     */
    private $botFiltreWords;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $quetes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quetes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set life
     *
     * @param integer $life
     *
     * @return User
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return integer
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return User
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set oauth
     *
     * @param string $oauth
     *
     * @return User
     */
    public function setOauth($oauth)
    {
        $this->oauth = $oauth;

        return $this;
    }

    /**
     * Get oauth
     *
     * @return string
     */
    public function getOauth()
    {
        return $this->oauth;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set monnaie
     *
     * @param integer $monnaie
     *
     * @return User
     */
    public function setMonnaie($monnaie)
    {
        $this->monnaie = $monnaie;

        return $this;
    }

    /**
     * Get monnaie
     *
     * @return integer
     */
    public function getMonnaie()
    {
        return $this->monnaie;
    }

    /**
     * Set permitLink
     *
     * @param boolean $permitLink
     *
     * @return User
     */
    public function setPermitLink($permitLink)
    {
        $this->permitLink = $permitLink;

        return $this;
    }

    /**
     * Get permitLink
     *
     * @return boolean
     */
    public function getPermitLink()
    {
        return $this->permitLink;
    }

    /**
     * Set twitchAccount
     *
     * @param string $twitchAccount
     *
     * @return User
     */
    public function setTwitchAccount($twitchAccount)
    {
        $this->twitchAccount = $twitchAccount;

        return $this;
    }

    /**
     * Get twitchAccount
     *
     * @return string
     */
    public function getTwitchAccount()
    {
        return $this->twitchAccount;
    }

    /**
     * Set twitchType
     *
     * @param string $twitchType
     *
     * @return User
     */
    public function setTwitchType($twitchType)
    {
        $this->twitchType = $twitchType;

        return $this;
    }

    /**
     * Get twitchType
     *
     * @return string
     */
    public function getTwitchType()
    {
        return $this->twitchType;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return User
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set botAntiSpam
     *
     * @param boolean $botAntiSpam
     *
     * @return User
     */
    public function setBotAntiSpam($botAntiSpam)
    {
        $this->botAntiSpam = $botAntiSpam;

        return $this;
    }

    /**
     * Get botAntiSpam
     *
     * @return boolean
     */
    public function getBotAntiSpam()
    {
        return $this->botAntiSpam;
    }

    /**
     * Set botAntiMaj
     *
     * @param boolean $botAntiMaj
     *
     * @return User
     */
    public function setBotAntiMaj($botAntiMaj)
    {
        $this->botAntiMaj = $botAntiMaj;

        return $this;
    }

    /**
     * Get botAntiMaj
     *
     * @return boolean
     */
    public function getBotAntiMaj()
    {
        return $this->botAntiMaj;
    }

    /**
     * Set botAntiLink
     *
     * @param boolean $botAntiLink
     *
     * @return User
     */
    public function setBotAntiLink($botAntiLink)
    {
        $this->botAntiLink = $botAntiLink;

        return $this;
    }

    /**
     * Get botAntiLink
     *
     * @return boolean
     */
    public function getBotAntiLink()
    {
        return $this->botAntiLink;
    }

    /**
     * Set botActiveClip
     *
     * @param boolean $botActiveClip
     *
     * @return User
     */
    public function setBotActiveClip($botActiveClip)
    {
        $this->botActiveClip = $botActiveClip;

        return $this;
    }

    /**
     * Get botActiveClip
     *
     * @return boolean
     */
    public function getBotActiveClip()
    {
        return $this->botActiveClip;
    }

    /**
     * Set botFiltreWords
     *
     * @param string $botFiltreWords
     *
     * @return User
     */
    public function setBotFiltreWords($botFiltreWords)
    {
        $this->botFiltreWords = $botFiltreWords;

        return $this;
    }

    /**
     * Get botFiltreWords
     *
     * @return string
     */
    public function getBotFiltreWords()
    {
        return $this->botFiltreWords;
    }

    /**
     * Add quete
     *
     * @param \modeles\Quest $quete
     *
     * @return User
     */
    public function addQuete(\modeles\Quest $quete)
    {
        $this->quetes[] = $quete;

        return $this;
    }

    /**
     * Remove quete
     *
     * @param \modeles\Quest $quete
     */
    public function removeQuete(\modeles\Quest $quete)
    {
        $this->quetes->removeElement($quete);
    }

    /**
     * Get quetes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuetes()
    {
        return $this->quetes;
    }

    /**
     * Add role
     *
     * @param \modeles\Role $role
     *
     * @return User
     */
    public function addRole(\modeles\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \modeles\Role $role
     */
    public function removeRole(\modeles\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
    /**
     * @var string
     */
    private $token;


    /**
     * Set token
     *
     * @param string $token
     *
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
