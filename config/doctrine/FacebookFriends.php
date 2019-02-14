<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacebookFriends
 *
 * @ORM\Table(name="facebook_friends", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "friend_id"})})
 * @ORM\Entity
 */
class FacebookFriends
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="friend_id", type="integer", nullable=false)
     */
    private $friendId;

    /**
     * @var int
     *
     * @ORM\Column(name="confirmed", type="integer", nullable=false)
     */
    private $confirmed;


}
