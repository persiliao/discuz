<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\Forum;

use PersiLiao\Discuz\Forum;
use PersiLiao\Discuz\User;

use function in_array;
use function PersiLiao\Discuz\simpleStringToArray;
use function PersiLiao\Discuz\unserializes;

use const PersiLiao\Discuz\ACCESS_PASSWORD;

class Permission{

    /**
     * @var int
     */
    protected $allowsmilies;

    /**
     * @var int
     */
    protected $allowhtml;

    /**
     * @var int
     */
    protected $allowbbcode;

    /**
     * @var int
     */
    protected $allowimgcode;

    /**
     * @var int
     */
    protected $allowmediacode;

    /**
     * @var int
     */
    protected $allowanonymous;

    /**
     * @var int
     */
    protected $allowpostspecial;

    /**
     * @var int
     */
    protected $allowspecialonly;

    /**
     * @var int
     */
    protected $allowappend;

    /**
     * @var int
     */
    protected $alloweditrules;

    /**
     * @var int
     */
    protected $allowfeed;

    /**
     * @var int
     */
    protected $allowside;

    /**
     * @var int
     */
    protected $recyclebin;

    /**
     * @var int
     */
    protected $allowglobalstick;

    /**
     * @var int
     */
    protected $modnewposts;

    /**
     * @var int
     */
    protected $jammer;

    /**
     * @var int
     */
    protected $disablewatermark;

    /**
     * @var int
     */
    protected $inheritedmod;

    /**
     * @var int
     */
    protected $alloweditpost;

    /**
     * @var int
     */
    protected $disablethumb;

    /**
     * @var int
     */
    protected $disablecollect;

    /**
     * @var array
     */
    protected $viewperm;

    /**
     * @var array
     */
    protected $postperm;

    /**
     * @var array
     */
    protected $replyperm;

    /**
     * @var array
     */
    protected $getattachperm;

    /**
     * @var array
     */
    protected $postattachperm;

    /**
     * @var array
     */
    protected $postimageperm;

    /**
     * @var array
     */
    protected $spviewperm;

    /**
     * @var array
     */
    protected $gviewperm;

    /**
     * @var int
     */
    protected $jointype;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var array
     */
    protected $formulapermusers;

    /**
     * @var array
     */
    protected $formulaperm;

    /**
     * @var array
     */
    protected $attachextensions;

    /**
     * Permission constructor.
     */
    public function __construct(array $forum)
    {
        if(isset($forum['allowsmilies'])){
            $this->allowsmilies = $forum['allowsmilies'];
        }
        if(isset($forum['allowhtml'])){
            $this->allowhtml = $forum['allowhtml'];
        }
        if(isset($forum['allowbbcode'])){
            $this->allowbbcode = $forum['allowbbcode'];
        }
        if(isset($forum['allowimgcode'])){
            $this->allowimgcode = $forum['allowimgcode'];
        }
        if(isset($forum['allowmediacode'])){
            $this->allowmediacode = $forum['allowmediacode'];
        }
        if(isset($forum['allowanonymous'])){
            $this->allowanonymous = $forum['allowanonymous'];
        }
        if(isset($forum['allowpostspecial'])){
            $this->allowpostspecial = $forum['allowpostspecial'];
        }
        if(isset($forum['allowspecialonly'])){
            $this->allowspecialonly = $forum['allowspecialonly'];
        }
        if(isset($forum['allowappend'])){
            $this->allowappend = $forum['allowappend'];
        }
        if(isset($forum['alloweditrules'])){
            $this->alloweditrules = $forum['alloweditrules'];
        }
        if(isset($forum['allowfeed'])){
            $this->allowfeed = $forum['allowfeed'];
        }
        if(isset($forum['allowside'])){
            $this->allowside = $forum['allowside'];
        }
        if(isset($forum['recyclebin'])){
            $this->recyclebin = $forum['recyclebin'];
        }
        if(isset($forum['allowglobalstick'])){
            $this->allowglobalstick = $forum['allowglobalstick'];
        }
        if(isset($forum['modnewposts'])){
            $this->modnewposts = $forum['modnewposts'];
        }
        if(isset($forum['jammer'])){
            $this->jammer = $forum['jammer'];
        }
        if(isset($forum['disablewatermark'])){
            $this->disablewatermark = $forum['disablewatermark'];
        }
        if(isset($forum['inheritedmod'])){
            $this->inheritedmod = $forum['inheritedmod'];
        }
        if(isset($forum['alloweditpost'])){
            $this->alloweditpost = $forum['alloweditpost'];
        }
        if(isset($forum['disablethumb'])){
            $this->disablethumb = $forum['disablethumb'];
        }
        if(isset($forum['disablecollect'])){
            $this->disablecollect = $forum['disablecollect'];
        }
        if(isset($forum['viewperm'])){
            $this->setViewperm($forum['viewperm']);
        }
        if(isset($forum['postperm'])){
            $this->setPostperm($forum['postperm']);
        }
        if(isset($forum['replyperm'])){
            $this->setReplyperm($forum['replyperm']);
        }
        if(isset($forum['getattachperm'])){
            $this->setGetattachperm($forum['getattachperm']);
        }
        if(isset($forum['postattachperm'])){
            $this->setPostattachperm($forum['postattachperm']);
        }
        if(isset($forum['postimageperm'])){
            $this->setPostimageperm($forum['postimageperm']);
        }
        if(isset($forum['spviewperm'])){
            $this->setSpviewperm($forum['spviewperm']);
        }
        if(isset($forum['gviewperm'])){
            $this->setGviewperm($forum['gviewperm']);
        }
        if(isset($forum['jointype'])){
            $this->jointype = $forum['jointype'];
        }
        if(isset($forum['price'])){
            $this->price = $forum['price'];
        }
        if(isset($forum['password'])){
            $this->password = $forum['password'];
        }
        if(isset($forum['formulapermusers'])){
            $this->setFormulapermusers($forum['formulapermusers']);
        }
        if(isset($forum['formulaperm'])){
            $this->setFormulaperm($forum['formulaperm']);
        }
        if(isset($forum['attachextensions'])){
            $this->setAttachextensions($forum['attachextensions']);
        }
    }

    /**
     * @param string $viewperm
     *
     * @return Permission
     */
    public function setViewperm(string $viewperm): Permission
    {
        $this->viewperm = simpleStringToArray($viewperm);

        return $this;
    }

    /**
     * @param string $postperm
     *
     * @return Permission
     */
    public function setPostperm(string $postperm): Permission
    {
        $this->postperm = simpleStringToArray($postperm);

        return $this;
    }

    /**
     * @param string $replyperm
     *
     * @return Permission
     */
    public function setReplyperm(string $replyperm): Permission
    {
        $this->replyperm = simpleStringToArray($replyperm);

        return $this;
    }

    /**
     * @param string $getattachperm
     *
     * @return Permission
     */
    public function setGetattachperm(string $getattachperm): Permission
    {
        $this->getattachperm = simpleStringToArray($getattachperm);

        return $this;
    }

    /**
     * @param string $postattachperm
     *
     * @return Permission
     */
    public function setPostattachperm(string $postattachperm): Permission
    {
        $this->postattachperm = simpleStringToArray($postattachperm);

        return $this;
    }

    /**
     * @param string $postimageperm
     *
     * @return Permission
     */
    public function setPostimageperm(string $postimageperm): Permission
    {
        $this->postimageperm = simpleStringToArray($postimageperm);

        return $this;
    }

    /**
     * @param string $spviewperm
     *
     * @return Permission
     */
    public function setSpviewperm(string $spviewperm): Permission
    {
        $this->spviewperm = simpleStringToArray($spviewperm);

        return $this;
    }

    /**
     * @param string $gviewperm
     *
     * @return Permission
     */
    public function setGviewperm(string $gviewperm): Permission
    {
        $this->gviewperm = simpleStringToArray($gviewperm);

        return $this;
    }

    /**
     * @param string $formulapermusers
     *
     * @return Permission
     */
    public function setFormulapermusers(string $formulapermusers): Permission
    {
        $this->formulapermusers = unserializes($formulapermusers);

        return $this;
    }

    /**
     * @param string $formulaperm
     *
     * @return Permission
     */
    public function setFormulaperm(string $formulaperm): Permission
    {
        $this->formulaperm = unserializes($formulaperm);

        return $this;
    }

    /**
     * @param string $attachextensions
     *
     * @return Permission
     */
    public function setAttachextensions(string $attachextensions): Permission
    {
        $this->attachextensions = simpleStringToArray($attachextensions);

        return $this;
    }

    /**
     * @param int $allowsmilies
     *
     * @return Permission
     */
    public function setAllowsmilies(int $allowsmilies): Permission
    {
        $this->allowsmilies = $allowsmilies;

        return $this;
    }

    /**
     * @param int $allowhtml
     *
     * @return Permission
     */
    public function setAllowhtml(int $allowhtml): Permission
    {
        $this->allowhtml = $allowhtml;

        return $this;
    }

    /**
     * @param int $allowbbcode
     *
     * @return Permission
     */
    public function setAllowbbcode(int $allowbbcode): Permission
    {
        $this->allowbbcode = $allowbbcode;

        return $this;
    }

    /**
     * @param int $allowimgcode
     *
     * @return Permission
     */
    public function setAllowimgcode(int $allowimgcode): Permission
    {
        $this->allowimgcode = $allowimgcode;

        return $this;
    }

    /**
     * @param int $allowmediacode
     *
     * @return Permission
     */
    public function setAllowmediacode(int $allowmediacode): Permission
    {
        $this->allowmediacode = $allowmediacode;

        return $this;
    }

    /**
     * @param int $allowanonymous
     *
     * @return Permission
     */
    public function setAllowanonymous(int $allowanonymous): Permission
    {
        $this->allowanonymous = $allowanonymous;

        return $this;
    }

    /**
     * @param int $allowpostspecial
     *
     * @return Permission
     */
    public function setAllowpostspecial(int $allowpostspecial): Permission
    {
        $this->allowpostspecial = $allowpostspecial;

        return $this;
    }

    /**
     * @param int $allowspecialonly
     *
     * @return Permission
     */
    public function setAllowspecialonly(int $allowspecialonly): Permission
    {
        $this->allowspecialonly = $allowspecialonly;

        return $this;
    }

    /**
     * @param int $allowappend
     *
     * @return Permission
     */
    public function setAllowappend(int $allowappend): Permission
    {
        $this->allowappend = $allowappend;

        return $this;
    }

    /**
     * @param int $alloweditrules
     *
     * @return Permission
     */
    public function setAlloweditrules(int $alloweditrules): Permission
    {
        $this->alloweditrules = $alloweditrules;

        return $this;
    }

    /**
     * @param int $allowfeed
     *
     * @return Permission
     */
    public function setAllowfeed(int $allowfeed): Permission
    {
        $this->allowfeed = $allowfeed;

        return $this;
    }

    /**
     * @param int $allowside
     *
     * @return Permission
     */
    public function setAllowside(int $allowside): Permission
    {
        $this->allowside = $allowside;

        return $this;
    }

    /**
     * @param int $recyclebin
     *
     * @return Permission
     */
    public function setRecyclebin(int $recyclebin): Permission
    {
        $this->recyclebin = $recyclebin;

        return $this;
    }

    /**
     * @param int $allowglobalstick
     *
     * @return Permission
     */
    public function setAllowglobalstick(int $allowglobalstick): Permission
    {
        $this->allowglobalstick = $allowglobalstick;

        return $this;
    }

    /**
     * @param int $modnewposts
     *
     * @return Permission
     */
    public function setModnewposts(int $modnewposts): Permission
    {
        $this->modnewposts = $modnewposts;

        return $this;
    }

    /**
     * @param int $jammer
     *
     * @return Permission
     */
    public function setJammer(int $jammer): Permission
    {
        $this->jammer = $jammer;

        return $this;
    }

    /**
     * @param int $disablewatermark
     *
     * @return Permission
     */
    public function setDisablewatermark(int $disablewatermark): Permission
    {
        $this->disablewatermark = $disablewatermark;

        return $this;
    }

    /**
     * @param int $inheritedmod
     *
     * @return Permission
     */
    public function setInheritedmod(int $inheritedmod): Permission
    {
        $this->inheritedmod = $inheritedmod;

        return $this;
    }

    /**
     * @param int $alloweditpost
     *
     * @return Permission
     */
    public function setAlloweditpost(int $alloweditpost): Permission
    {
        $this->alloweditpost = $alloweditpost;

        return $this;
    }

    /**
     * @param int $disablethumb
     *
     * @return Permission
     */
    public function setDisablethumb(int $disablethumb): Permission
    {
        $this->disablethumb = $disablethumb;

        return $this;
    }

    /**
     * @param int $disablecollect
     *
     * @return Permission
     */
    public function setDisablecollect(int $disablecollect): Permission
    {
        $this->disablecollect = $disablecollect;

        return $this;
    }

    /**
     * @param int $jointype
     *
     * @return Permission
     */
    public function setJointype(int $jointype): Permission
    {
        $this->jointype = $jointype;

        return $this;
    }

    /**
     * @param int $price
     *
     * @return Permission
     */
    public function setPrice(int $price): Permission
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return Permission
     */
    public function setPassword(string $password): Permission
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param User $user
     *
     * @return bool|int
     * @todo 支持权限表达式
     * @todo 支持付费
     */
    public function allowAccess(User $user)
    {
        if($user->getAdminid()){
            return true;
        }

        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->viewperm) && in_array($user->getGroupid(), $this->viewperm)){
            return true;
        }

        if(empty($this->viewperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    protected function isSuperGroup(User $user): bool
    {
        return !empty($this->spviewperm) && in_array($user->getGroupid(), $this->spviewperm);
    }

    protected function isFormuLapermUsers(User $user)
    {
        return !empty($this->formulapermusers) && in_array($user->getUsername(), $this->formulapermusers);
    }

    public function hasPassword(): bool
    {
        return !empty($this->password);
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowNewThread(User $user)
    {
        if($user->getAdminid()){
            return true;
        }
        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->postperm) && in_array($user->getGroupid(), $this->postperm)){
            return true;
        }

        if(empty($this->postperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowNewComment(User $user)
    {
        if($user->getAdminid()){
            return true;
        }
        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->replyperm) && in_array($user->getGroupid(), $this->replyperm)){
            return true;
        }

        if(empty($this->postperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowGetAttachment(User $user)
    {
        return $this->allowDownloadAttachment($user);
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowDownloadAttachment(User $user)
    {
        if($user->getAdminid()){
            return true;
        }
        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->getattachperm) && in_array($user->getGroupid(), $this->getattachperm)){
            return true;
        }

        if(empty($this->getattachperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowUploadAttachment(User $user)
    {
        if($user->getAdminid()){
            return true;
        }
        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->postattachperm) && in_array($user->getGroupid(), $this->postattachperm)){
            return true;
        }

        if(empty($this->postattachperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    /**
     * @param User $user
     *
     * @return bool|int
     */
    public function allowUploadImage(User $user)
    {
        if($user->getAdminid()){
            return true;
        }
        if($this->isSuperGroup($user)){
            return true;
        }

        if($this->isFormuLapermUsers($user)){
            return true;
        }

        if($this->hasPassword()){
            return ACCESS_PASSWORD;
        }

        if(!empty($this->postimageperm) && in_array($user->getGroupid(), $this->postimageperm)){
            return true;
        }

        if(empty($this->postimageperm) && empty($this->password) && empty($this->formulapermusers)){
            return true;
        }

        return false;
    }

    public function modNewThread(): bool
    {
        return $this->modnewposts == 0;
    }

    public function modNewComment(): bool
    {
        return $this->modnewposts == 2;
    }

    public function allowEditThread(): bool
    {
        return $this->alloweditpost;
    }

    public function allowEditComment(): bool
    {
        return $this->alloweditpost;
    }

    public function allowUseHtmlCode(): bool
    {
        return $this->allowhtml;
    }

    public function allowUseDiscuzCode(): bool
    {
        return $this->allowbbcode;
    }

    public function allowUseImgCode(): bool
    {
        return $this->allowimgcode;
    }

    public function allowUseMediaCode(): bool
    {
        return $this->allowmediacode;
    }

    public function allowUseSmileCode(): bool
    {
        return $this->allowsmilies;
    }

    public function jammer(): bool
    {
        return $this->jammer;
    }

    public function allowImageGenerateThumb(): bool
    {
        return !$this->disablethumb;
    }

    public function allowImageAddWater(): bool
    {
        return !$this->disablewatermark;
    }

    public function allowNewSpecial(int $special_type): bool
    {
        return in_array($special_type, $this->allowpostspecial, true);
    }

    public function allowAttachmentExt(string $ext): bool
    {
        return $this->attachextensions && in_array($ext, $this->attachextensions, true);
    }

}