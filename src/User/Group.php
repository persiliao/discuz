<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\User;

class Group{

    const ADMIN = 1;

    const SUPER_MODERATOR = 2;

    const MODERATOR = 3;

    const BAN_TALKING = 4;

    const BAN_ACCESS = 5;

    const BAN_IP = 6;

    const GUEST = 7;

    /**
     * @var int
     */
    protected $groupid;

    /**
     * @var int
     */
    protected $radminid;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $system;

    /**
     * @var string
     */
    protected $grouptitle;

    /**
     * @var int
     */
    protected $creditshigher;

    /**
     * @var int
     */
    protected $creditslower;

    /**
     * @var int
     */
    protected $stars;

    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var int
     */
    protected $maxinvitenum;

    /**
     * @var int
     */
    protected $inviteprice;

    /**
     * @var int
     */
    protected $maxinviteday;

    /**
     * @var int
     */
    protected $allowat;

    /**
     * Group constructor.
     */
    public function __construct(array $group)
    {
        if(isset($group['groupid'])){
            $this->groupid = $group['groupid'];
        }
        if(isset($group['radminid'])){
            $this->radminid = $group['radminid'];
        }
        if(isset($group['type'])){
            $this->type = $group['type'];
        }
        if(isset($group['system'])){
            $this->system = $group['system'];
        }
        if(isset($group['grouptitle'])){
            $this->grouptitle = $group['grouptitle'];
        }
        if(isset($group['creditshigher'])){
            $this->creditshigher = $group['creditshigher'];
        }
        if(isset($group['creditslower'])){
            $this->creditslower = $group['creditslower'];
        }
        if(isset($group['stars'])){
            $this->stars = $group['stars'];
        }
        if(isset($group['color'])){
            $this->color = $group['color'];
        }
        if(isset($group['icon'])){
            $this->icon = $group['icon'];
        }
        if(isset($group['maxinvitenum'])){
            $this->maxinvitenum = $group['maxinvitenum'];
        }
        if(isset($group['inviteprice'])){
            $this->inviteprice = $group['inviteprice'];
        }
        if(isset($group['maxinviteday'])){
            $this->maxinviteday = $group['maxinviteday'];
        }
        if(isset($group['allowat'])){
            $this->allowat = $group['allowat'];
        }
    }

    /**
     * @return int
     */
    public function getGroupid(): int
    {
        return $this->groupid;
    }

    /**
     * @return int
     */
    public function getRadminid(): int
    {
        return $this->radminid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getSystem(): string
    {
        return $this->system;
    }

    /**
     * @return string
     */
    public function getGrouptitle(): string
    {
        return $this->grouptitle;
    }

    /**
     * @return int
     */
    public function getCreditshigher(): int
    {
        return $this->creditshigher;
    }

    /**
     * @return int
     */
    public function getCreditslower(): int
    {
        return $this->creditslower;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @return int
     */
    public function getMaxinvitenum(): int
    {
        return $this->maxinvitenum;
    }

    /**
     * @return int
     */
    public function getInviteprice(): int
    {
        return $this->inviteprice;
    }

    /**
     * @return int
     */
    public function getMaxinviteday(): int
    {
        return $this->maxinviteday;
    }

    /**
     * @return int
     */
    public function getAllowat(): int
    {
        return $this->allowat;
    }

}