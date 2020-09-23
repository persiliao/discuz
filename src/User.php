<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

use PersiLiao\Discuz\Forum\Permission as ForumPermission;
use PersiLiao\Discuz\User\Group;
use PersiLiao\Discuz\User\Permission as UserPermission;

class User{

    /**
     * @var int
     */
    protected $uid;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var Group
     */
    protected $group;

    /**
     * @var UserPermission
     */
    protected $userPermission;

    /**
     * @var ForumPermission
     */
    protected $forumPermission;

    /**
     * @var int
     */
    protected $renametime;

    /**
     * @var int
     */
    protected $renamecount;

    /**
     * @var int
     */
    protected $renametype;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var int
     */
    protected $emailstatus;

    /**
     * @var int
     */
    protected $avatarstatus;

    /**
     * @var int
     */
    protected $videophotostatus;

    /**
     * @var int
     */
    protected $adminid;

    /**
     * @var int
     */
    protected $groupid;

    /**
     * @var int
     */
    protected $groupexpiry;

    /**
     * @var int
     */
    protected $extgroupids;

    /**
     * @var int
     */
    protected $regdate;

    /**
     * @var int
     */
    protected $credits;

    /**
     * @var int
     */
    protected $notifysound;

    /**
     * @var string
     */
    protected $timeoffset;

    /**
     * @var int
     */
    protected $newpm;

    /**
     * @var int
     */
    protected $newprompt;

    /**
     * @var int
     */
    protected $accessmasks;

    /**
     * @var int
     */
    protected $allowadmincp;

    /**
     * @var int
     */
    protected $onlyacceptfriendpm;

    /**
     * @var int
     */
    protected $conisbind;

    /**
     * @var int
     */
    protected $freeze;

    /**
     * @var int
     */
    protected $mobilestatus;

    /**
     * @var string
     */
    protected $realname;

    /**
     * @var int
     */
    protected $gender;

    /**
     * @var string
     */
    protected $avatar;

    /**
     * @var int
     */
    protected $birthyear;

    /**
     * @var int
     */
    protected $birthmonth;

    /**
     * @var int
     */
    protected $birthday;

    /**
     * @var string
     */
    protected $constellation;

    /**
     * @var string
     */
    protected $zodiac;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $idcardtype;

    /**
     * @var string
     */
    protected $idcard;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $zipcode;

    /**
     * @var string
     */
    protected $nationality;

    /**
     * @var string
     */
    protected $birthprovince;

    /**
     * @var string
     */
    protected $birthcity;

    /**
     * @var string
     */
    protected $birthdist;

    /**
     * @var string
     */
    protected $birthcommunity;

    /**
     * @var string
     */
    protected $resideprovince;

    /**
     * @var string
     */
    protected $residecity;

    /**
     * @var string
     */
    protected $residedist;

    /**
     * @var string
     */
    protected $residecommunity;

    /**
     * @var string
     */
    protected $residesuite;

    /**
     * @var string
     */
    protected $graduateschool;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $education;

    /**
     * @var string
     */
    protected $occupation;

    /**
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $revenue;

    /**
     * @var string
     */
    protected $affectivestatus;

    /**
     * @var string
     */
    protected $lookingfor;

    /**
     * @var string
     */
    protected $bloodtype;

    /**
     * @var string
     */
    protected $height;

    /**
     * @var string
     */
    protected $weight;

    /**
     * @var string
     */
    protected $alipay;

    /**
     * @var string
     */
    protected $icq;

    /**
     * @var string
     */
    protected $qq;

    /**
     * @var string
     */
    protected $yahoo;

    /**
     * @var string
     */
    protected $msn;

    /**
     * @var string
     */
    protected $taobao;

    /**
     * @var string
     */
    protected $site;

    /**
     * @var string
     */
    protected $bio;

    /**
     * @var string
     */
    protected $interest;

    /**
     * @var string
     */
    protected $field1;

    /**
     * @var string
     */
    protected $field2;

    /**
     * @var string
     */
    protected $field3;

    /**
     * @var string
     */
    protected $field4;

    /**
     * @var string
     */
    protected $field5;

    /**
     * @var string
     */
    protected $field6;

    /**
     * @var string
     */
    protected $field7;

    /**
     * @var string
     */
    protected $field8;

    /**
     * @var string
     */
    protected $field9;

    /**
     * @var string
     */
    protected $field10;

    /**
     * @var string
     */
    protected $field11;

    /**
     * @var string
     */
    protected $field12;

    /**
     * @var string
     */
    protected $field13;

    /**
     * @var string
     */
    protected $field14;

    /**
     * @var string
     */
    protected $field15;

    /**
     * @var string
     */
    protected $nickname;

    /**
     * User constructor.
     */
    public function __construct(array $user)
    {
        if(isset($user['uid'])){
            $this->uid = $user['uid'];
        }
        if(isset($user['email'])){
            $this->email = $user['email'];
        }
        if(isset($user['username'])){
            $this->username = $user['username'];
        }
        if(isset($user['renametime'])){
            $this->renametime = $user['renametime'];
        }
        if(isset($user['renamecount'])){
            $this->renamecount = $user['renamecount'];
        }
        if(isset($user['renametype'])){
            $this->renametype = $user['renametype'];
        }
        if(isset($user['password'])){
            $this->password = $user['password'];
        }
        if(isset($user['status'])){
            $this->status = $user['status'];
        }
        if(isset($user['emailstatus'])){
            $this->emailstatus = $user['emailstatus'];
        }
        if(isset($user['avatarstatus'])){
            $this->avatarstatus = $user['avatarstatus'];
        }
        if(isset($user['videophotostatus'])){
            $this->videophotostatus = $user['videophotostatus'];
        }
        if(isset($user['adminid'])){
            $this->adminid = $user['adminid'];
        }
        if(isset($user['groupid'])){
            $this->groupid = $user['groupid'];
        }
        if(isset($user['groupexpiry'])){
            $this->groupexpiry = $user['groupexpiry'];
        }
        if(isset($user['extgroupids'])){
            $this->extgroupids = $user['extgroupids'];
        }
        if(isset($user['regdate'])){
            $this->regdate = $user['regdate'];
        }
        if(isset($user['credits'])){
            $this->credits = $user['credits'];
        }
        if(isset($user['notifysound'])){
            $this->notifysound = $user['notifysound'];
        }
        if(isset($user['timeoffset'])){
            $this->timeoffset = $user['timeoffset'];
        }
        if(isset($user['newpm'])){
            $this->newpm = $user['newpm'];
        }
        if(isset($user['newprompt'])){
            $this->newprompt = $user['newprompt'];
        }
        if(isset($user['accessmasks'])){
            $this->accessmasks = $user['accessmasks'];
        }
        if(isset($user['allowadmincp'])){
            $this->allowadmincp = $user['allowadmincp'];
        }
        if(isset($user['onlyacceptfriendpm'])){
            $this->onlyacceptfriendpm = $user['onlyacceptfriendpm'];
        }
        if(isset($user['conisbind'])){
            $this->conisbind = $user['conisbind'];
        }
        if(isset($user['freeze'])){
            $this->freeze = $user['freeze'];
        }
        if(isset($user['mobilestatus'])){
            $this->mobilestatus = $user['mobilestatus'];
        }
        if(isset($user['realname'])){
            $this->realname = $user['realname'];
        }
        if(isset($user['gender'])){
            $this->gender = $user['gender'];
        }
        if(isset($user['avatar'])){
            $this->avatar = $user['avatar'];
        }
        if(isset($user['birthyear'])){
            $this->birthyear = $user['birthyear'];
        }
        if(isset($user['birthmonth'])){
            $this->birthmonth = $user['birthmonth'];
        }
        if(isset($user['birthday'])){
            $this->birthday = $user['birthday'];
        }
        if(isset($user['constellation'])){
            $this->constellation = $user['constellation'];
        }
        if(isset($user['zodiac'])){
            $this->zodiac = $user['zodiac'];
        }
        if(isset($user['telephone'])){
            $this->telephone = $user['telephone'];
        }
        if(isset($user['mobile'])){
            $this->mobile = $user['mobile'];
        }
        if(isset($user['idcardtype'])){
            $this->idcardtype = $user['idcardtype'];
        }
        if(isset($user['idcard'])){
            $this->idcard = $user['idcard'];
        }
        if(isset($user['address'])){
            $this->address = $user['address'];
        }
        if(isset($user['zipcode'])){
            $this->zipcode = $user['zipcode'];
        }
        if(isset($user['nationality'])){
            $this->nationality = $user['nationality'];
        }
        if(isset($user['birthprovince'])){
            $this->birthprovince = $user['birthprovince'];
        }
        if(isset($user['birthcity'])){
            $this->birthcity = $user['birthcity'];
        }
        if(isset($user['birthdist'])){
            $this->birthdist = $user['birthdist'];
        }
        if(isset($user['birthcommunity'])){
            $this->birthcommunity = $user['birthcommunity'];
        }
        if(isset($user['resideprovince'])){
            $this->resideprovince = $user['resideprovince'];
        }
        if(isset($user['residecity'])){
            $this->residecity = $user['residecity'];
        }
        if(isset($user['residedist'])){
            $this->residedist = $user['residedist'];
        }
        if(isset($user['residecommunity'])){
            $this->residecommunity = $user['residecommunity'];
        }
        if(isset($user['residesuite'])){
            $this->residesuite = $user['residesuite'];
        }
        if(isset($user['graduateschool'])){
            $this->graduateschool = $user['graduateschool'];
        }
        if(isset($user['company'])){
            $this->company = $user['company'];
        }
        if(isset($user['education'])){
            $this->education = $user['education'];
        }
        if(isset($user['occupation'])){
            $this->occupation = $user['occupation'];
        }
        if(isset($user['position'])){
            $this->position = $user['position'];
        }
        if(isset($user['revenue'])){
            $this->revenue = $user['revenue'];
        }
        if(isset($user['affectivestatus'])){
            $this->affectivestatus = $user['affectivestatus'];
        }
        if(isset($user['lookingfor'])){
            $this->lookingfor = $user['lookingfor'];
        }
        if(isset($user['bloodtype'])){
            $this->bloodtype = $user['bloodtype'];
        }
        if(isset($user['height'])){
            $this->height = $user['height'];
        }
        if(isset($user['weight'])){
            $this->weight = $user['weight'];
        }
        if(isset($user['alipay'])){
            $this->alipay = $user['alipay'];
        }
        if(isset($user['icq'])){
            $this->icq = $user['icq'];
        }
        if(isset($user['qq'])){
            $this->qq = $user['qq'];
        }
        if(isset($user['yahoo'])){
            $this->yahoo = $user['yahoo'];
        }
        if(isset($user['msn'])){
            $this->msn = $user['msn'];
        }
        if(isset($user['taobao'])){
            $this->taobao = $user['taobao'];
        }
        if(isset($user['site'])){
            $this->site = $user['site'];
        }
        if(isset($user['bio'])){
            $this->bio = $user['bio'];
        }
        if(isset($user['interest'])){
            $this->interest = $user['interest'];
        }
        if(isset($user['field1'])){
            $this->field1 = $user['field1'];
        }
        if(isset($user['field2'])){
            $this->field2 = $user['field2'];
        }
        if(isset($user['field3'])){
            $this->field3 = $user['field3'];
        }
        if(isset($user['field4'])){
            $this->field4 = $user['field4'];
        }
        if(isset($user['field5'])){
            $this->field5 = $user['field5'];
        }
        if(isset($user['field6'])){
            $this->field6 = $user['field6'];
        }
        if(isset($user['field7'])){
            $this->field7 = $user['field7'];
        }
        if(isset($user['field8'])){
            $this->field8 = $user['field8'];
        }
        if(isset($user['field9'])){
            $this->field9 = $user['field9'];
        }
        if(isset($user['field10'])){
            $this->field10 = $user['field10'];
        }
        if(isset($user['field11'])){
            $this->field11 = $user['field11'];
        }
        if(isset($user['field12'])){
            $this->field12 = $user['field12'];
        }
        if(isset($user['field13'])){
            $this->field13 = $user['field13'];
        }
        if(isset($user['field14'])){
            $this->field14 = $user['field14'];
        }
        if(isset($user['field15'])){
            $this->field15 = $user['field15'];
        }
        if(isset($user['nickname'])){
            $this->nickname = $user['nickname'];
        }
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return int
     */
    public function getRenametime(): int
    {
        return $this->renametime;
    }

    /**
     * @return int
     */
    public function getRenamecount(): int
    {
        return $this->renamecount;
    }

    /**
     * @return int
     */
    public function getRenametype(): int
    {
        return $this->renametype;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getEmailstatus(): int
    {
        return $this->emailstatus;
    }

    /**
     * @return int
     */
    public function getAvatarstatus(): int
    {
        return $this->avatarstatus;
    }

    /**
     * @return int
     */
    public function getVideophotostatus(): int
    {
        return $this->videophotostatus;
    }

    /**
     * @return int
     */
    public function getAdminid(): int
    {
        return $this->adminid;
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
    public function getGroupexpiry(): int
    {
        return $this->groupexpiry;
    }

    /**
     * @return int
     */
    public function getExtgroupids(): int
    {
        return $this->extgroupids;
    }

    /**
     * @return int
     */
    public function getRegdate(): int
    {
        return $this->regdate;
    }

    /**
     * @return int
     */
    public function getCredits(): int
    {
        return $this->credits;
    }

    /**
     * @return int
     */
    public function getNotifysound(): int
    {
        return $this->notifysound;
    }

    /**
     * @return string
     */
    public function getTimeoffset(): string
    {
        return $this->timeoffset;
    }

    /**
     * @return int
     */
    public function getNewpm(): int
    {
        return $this->newpm;
    }

    /**
     * @return int
     */
    public function getNewprompt(): int
    {
        return $this->newprompt;
    }

    /**
     * @return int
     */
    public function getAccessmasks(): int
    {
        return $this->accessmasks;
    }

    /**
     * @return int
     */
    public function getAllowadmincp(): int
    {
        return $this->allowadmincp;
    }

    /**
     * @return int
     */
    public function getOnlyacceptfriendpm(): int
    {
        return $this->onlyacceptfriendpm;
    }

    /**
     * @return int
     */
    public function getConisbind(): int
    {
        return $this->conisbind;
    }

    /**
     * @return int
     */
    public function getFreeze(): int
    {
        return $this->freeze;
    }

    /**
     * @return int
     */
    public function getMobilestatus(): int
    {
        return $this->mobilestatus;
    }

    /**
     * @return string
     */
    public function getRealname(): string
    {
        return $this->realname;
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * @return int
     */
    public function getBirthyear(): int
    {
        return $this->birthyear;
    }

    /**
     * @return int
     */
    public function getBirthmonth(): int
    {
        return $this->birthmonth;
    }

    /**
     * @return int
     */
    public function getBirthday(): int
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getConstellation(): string
    {
        return $this->constellation;
    }

    /**
     * @return string
     */
    public function getZodiac(): string
    {
        return $this->zodiac;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getIdcardtype(): string
    {
        return $this->idcardtype;
    }

    /**
     * @return string
     */
    public function getIdcard(): string
    {
        return $this->idcard;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getBirthprovince(): string
    {
        return $this->birthprovince;
    }

    /**
     * @return string
     */
    public function getBirthcity(): string
    {
        return $this->birthcity;
    }

    /**
     * @return string
     */
    public function getBirthdist(): string
    {
        return $this->birthdist;
    }

    /**
     * @return string
     */
    public function getBirthcommunity(): string
    {
        return $this->birthcommunity;
    }

    /**
     * @return string
     */
    public function getResideprovince(): string
    {
        return $this->resideprovince;
    }

    /**
     * @return string
     */
    public function getResidecity(): string
    {
        return $this->residecity;
    }

    /**
     * @return string
     */
    public function getResidedist(): string
    {
        return $this->residedist;
    }

    /**
     * @return string
     */
    public function getResidecommunity(): string
    {
        return $this->residecommunity;
    }

    /**
     * @return string
     */
    public function getResidesuite(): string
    {
        return $this->residesuite;
    }

    /**
     * @return string
     */
    public function getGraduateschool(): string
    {
        return $this->graduateschool;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getEducation(): string
    {
        return $this->education;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getRevenue(): string
    {
        return $this->revenue;
    }

    /**
     * @return string
     */
    public function getAffectivestatus(): string
    {
        return $this->affectivestatus;
    }

    /**
     * @return string
     */
    public function getLookingfor(): string
    {
        return $this->lookingfor;
    }

    /**
     * @return string
     */
    public function getBloodtype(): string
    {
        return $this->bloodtype;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getAlipay(): string
    {
        return $this->alipay;
    }

    /**
     * @return string
     */
    public function getIcq(): string
    {
        return $this->icq;
    }

    /**
     * @return string
     */
    public function getQq(): string
    {
        return $this->qq;
    }

    /**
     * @return string
     */
    public function getYahoo(): string
    {
        return $this->yahoo;
    }

    /**
     * @return string
     */
    public function getMsn(): string
    {
        return $this->msn;
    }

    /**
     * @return string
     */
    public function getTaobao(): string
    {
        return $this->taobao;
    }

    /**
     * @return string
     */
    public function getSite(): string
    {
        return $this->site;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @return string
     */
    public function getInterest(): string
    {
        return $this->interest;
    }

    /**
     * @return string
     */
    public function getField1(): string
    {
        return $this->field1;
    }

    /**
     * @return string
     */
    public function getField2(): string
    {
        return $this->field2;
    }

    /**
     * @return string
     */
    public function getField3(): string
    {
        return $this->field3;
    }

    /**
     * @return string
     */
    public function getField4(): string
    {
        return $this->field4;
    }

    /**
     * @return string
     */
    public function getField5(): string
    {
        return $this->field5;
    }

    /**
     * @return string
     */
    public function getField6(): string
    {
        return $this->field6;
    }

    /**
     * @return string
     */
    public function getField7(): string
    {
        return $this->field7;
    }

    /**
     * @return string
     */
    public function getField8(): string
    {
        return $this->field8;
    }

    /**
     * @return string
     */
    public function getField9(): string
    {
        return $this->field9;
    }

    /**
     * @return string
     */
    public function getField10(): string
    {
        return $this->field10;
    }

    /**
     * @return string
     */
    public function getField11(): string
    {
        return $this->field11;
    }

    /**
     * @return string
     */
    public function getField12(): string
    {
        return $this->field12;
    }

    /**
     * @return string
     */
    public function getField13(): string
    {
        return $this->field13;
    }

    /**
     * @return string
     */
    public function getField14(): string
    {
        return $this->field14;
    }

    /**
     * @return string
     */
    public function getField15(): string
    {
        return $this->field15;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     *
     * @return User
     */
    public function setGroup(Group $group): User
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return UserPermission
     */
    public function getUserPermission(): UserPermission
    {
        return $this->userPermission;
    }

    /**
     * @param UserPermission $userPermission
     *
     * @return User
     */
    public function setUserPermission(UserPermission $userPermission): User
    {
        $this->userPermission = $userPermission;

        return $this;
    }

    /**
     * @return ForumPermission
     */
    public function getForumPermission(): ForumPermission
    {
        return $this->forumPermission;
    }

    /**
     * @param ForumPermission $forumPermission
     *
     * @return User
     */
    public function setForumPermission(ForumPermission $forumPermission): User
    {
        $this->forumPermission = $forumPermission;

        return $this;
    }

    public function allowNewThread(): bool
    {
        return $this->userPermission->allowNewThread() && $this->forumPermission->allowNewThread($this);
    }

    public function allowNewComment(): bool
    {
        return $this->userPermission->allowNewComment() && $this->forumPermission->allowNewComment($this);
    }

    public function allowUploadAttachment():bool
    {
        return $this->userPermission->allowUploadAttachment() && $this->forumPermission->allowUploadAttachment($this);
    }

    public function allowUploadImage():bool
    {
        return $this->userPermission->allowUploadImage() && $this->forumPermission->allowUploadImage($this);
    }

    public function allowEditThread():bool
    {
        return $this->forumPermission->allowEditThread();
    }

    public function allowEditComment():bool
    {
        return $this->forumPermission->allowEditComment();
    }

    public function modNewThread():bool
    {
        return $this->userPermission->modNewThread() && $this->forumPermission->modNewThread();
    }

    public function modNewComment():bool
    {
        return $this->userPermission->modNewComment() && $this->forumPermission->modNewComment();
    }
}