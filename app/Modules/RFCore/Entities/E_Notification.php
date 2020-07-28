<?php

namespace RFCore\Entities;

use Doctrine\ORM\Mapping\Column,
    Doctrine\ORM\Mapping\Entity,
    Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * @Entity @Table(name="notifications")
 **/
class E_Notification extends RF_Entity
{
    protected $nullableProperties = ['id'];

    /** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;
}
