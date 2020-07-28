<?php

namespace IntegrationModuleTemp\Entities;

use Doctrine\{Common\Collections\ArrayCollection,
	ORM\Mapping\Column,
	ORM\Mapping\Entity,
	ORM\Mapping\Id,
	ORM\Mapping\UniqueConstraint};
use RFCore\Entities\RF_Entity;

/**
 * @Entity @Table(name="users", uniqueConstraints={@UniqueConstraint(name="user_email_unique", columns={"email"})})
 **/
class E_User extends RF_Entity
{
    protected $nullableProperties = ['id','securityToken','cookieToken','securityTokenExpiration','isActive','firstName','lastName','phone','password'];

    public function update($params)
    {
    	if (key_exists('password', $params)) $params['password'] = password_hash($params['password'], PASSWORD_BCRYPT);
        parent::update($params);
    }

    /** @Id @Column(type="integer") @GeneratedValue(strategy="IDENTITY") **/
	protected $id;

    /** @Column(type="string") **/
    protected $email;

    /** @Column(type="string", nullable=true) **/
	protected $password;

    /** @Column(type="integer") **/
    protected $roles;

    /** @Column(type="string", nullable=true) **/
    protected $securityToken;

    /** @Column(type="string", nullable=true) **/
    protected $cookieToken;

    /** @Column(type="date", nullable=true) **/
    protected $securityTokenExpiration;

    /** @Column(type="boolean") **/
    protected $isActive = false;

    /** @Column(type="string", nullable=true) **/
    protected $firstName;

    /** @Column(type="string", nullable=true) **/
    protected $lastName;

    /** @Column(type="string", nullable=true) **/
    protected $phone;





    /**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id): void
	{
		$this->id = $id;
	}

	/**
	 * @param string $pass
	 */
	public function setPassword(string $pass)
	{
		$this->password = password_hash($pass, PASSWORD_BCRYPT);
	}

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @return int
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param int $roles
     */
    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

	/**
	 * @return mixed
	 */
	public function getSecurityToken()
	{
		return $this->securityToken;
	}

	/**
	 * @param mixed $securityToken
	 */
	public function setSecurityToken($securityToken): void
	{
		$this->securityToken = $securityToken;
	}

	/**
	 * @return mixed
	 */
	public function getSecurityTokenExpiration()
	{
		return $this->securityTokenExpiration;
	}

	/**
	 * @param mixed $securityTokenExpiration
	 */
	public function setSecurityTokenExpiration($securityTokenExpiration): void
	{
		$this->securityTokenExpiration = $securityTokenExpiration;
	}

	/**
	 * @return mixed
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param mixed $isActive
	 */
	public function setIsActive($isActive): void
	{
		$this->isActive = $isActive;
	}

	/**
	 * @return mixed
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * @param mixed $firstName
	 */
	public function setFirstName($firstName): void
	{
		$this->firstName = $firstName;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * @param mixed $lastName
	 */
	public function setLastName($lastName): void
	{
		$this->lastName = $lastName;
	}

	/**
	 * @return mixed
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param mixed $phone
	 */
	public function setPhone($phone): void
	{
		$this->phone = $phone;
	}
}
