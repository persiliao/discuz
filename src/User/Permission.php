<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\User;

class Permission{

    /**
     * @var int
     */
    protected $allowvisit;

    /**
     * @var int
     */
    protected $allowsendpm;

    /**
     * @var int
     */
    protected $allowinvite;

    /**
     * @var int
     */
    protected $allowmailinvite;

    /**
     * @var int
     */
    protected $readaccess;

    /**
     * @var int
     */
    protected $allowpost;

    /**
     * @var int
     */
    protected $allowreply;

    /**
     * @var int
     */
    protected $allowpostpoll;

    /**
     * @var int
     */
    protected $allowpostreward;

    /**
     * @var int
     */
    protected $allowposttrade;

    /**
     * @var int
     */
    protected $allowpostactivity;

    /**
     * @var int
     */
    protected $allowdirectpost;

    /**
     * @var int
     */
    protected $allowgetattach;

    /**
     * @var int
     */
    protected $allowgetimage;

    /**
     * @var int
     */
    protected $allowpostattach;

    /**
     * @var int
     */
    protected $allowpostimage;

    /**
     * @var int
     */
    protected $allowvote;

    /**
     * @var int
     */
    protected $allowsearch;

    /**
     * @var int
     */
    protected $allowcstatus;

    /**
     * @var int
     */
    protected $allowinvisible;

    /**
     * @var int
     */
    protected $allowtransfer;

    /**
     * @var int
     */
    protected $allowsetreadperm;

    /**
     * @var int
     */
    protected $allowsetattachperm;

    /**
     * @var int
     */
    protected $allowposttag;

    /**
     * @var int
     */
    protected $allowhidecode;

    /**
     * @var int
     */
    protected $allowhtml;

    /**
     * @var int
     */
    protected $allowanonymous;

    /**
     * @var int
     */
    protected $allowsigbbcode;

    /**
     * @var int
     */
    protected $allowsigimgcode;

    /**
     * @var int
     */
    protected $allowmagics;

    /**
     * @var int
     */
    protected $disableperiodctrl;

    /**
     * @var int
     */
    protected $reasonpm;

    /**
     * @var int
     */
    protected $maxprice;

    /**
     * @var int
     */
    protected $maxsigsize;

    /**
     * @var int
     */
    protected $maxattachsize;

    /**
     * @var int
     */
    protected $maxsizeperday;

    /**
     * @var int
     */
    protected $maxthreadsperhour;

    /**
     * @var int
     */
    protected $maxpostsperhour;

    /**
     * @var int
     */
    protected $attachextensions;

    /**
     * @var int
     */
    protected $raterange;

    /**
     * @var int
     */
    protected $loginreward;

    /**
     * @var int
     */
    protected $mintradeprice;

    /**
     * @var int
     */
    protected $maxtradeprice;

    /**
     * @var int
     */
    protected $minrewardprice;

    /**
     * @var int
     */
    protected $maxrewardprice;

    /**
     * @var int
     */
    protected $magicsdiscount;

    /**
     * @var int
     */
    protected $maxmagicsweight;

    /**
     * @var int
     */
    protected $allowpostdebate;

    /**
     * @var int
     */
    protected $tradestick;

    /**
     * @var int
     */
    protected $exempt;

    /**
     * @var int
     */
    protected $maxattachnum;

    /**
     * @var int
     */
    protected $allowposturl;

    /**
     * @var int
     */
    protected $allowrecommend;

    /**
     * @var int
     */
    protected $allowpostrushreply;

    /**
     * @var int
     */
    protected $maxfriendnum;

    /**
     * @var int
     */
    protected $maxspacesize;

    /**
     * @var int
     */
    protected $allowcomment;

    /**
     * @var int
     */
    protected $allowcommentarticle;

    /**
     * @var int
     */
    protected $searchinterval;

    /**
     * @var int
     */
    protected $searchignore;

    /**
     * @var int
     */
    protected $allowblog;

    /**
     * @var int
     */
    protected $allowdoing;

    /**
     * @var int
     */
    protected $allowupload;

    /**
     * @var int
     */
    protected $allowshare;

    /**
     * @var int
     */
    protected $allowblogmod;

    /**
     * @var int
     */
    protected $allowdoingmod;

    /**
     * @var int
     */
    protected $allowuploadmod;

    /**
     * @var int
     */
    protected $allowsharemod;

    /**
     * @var int
     */
    protected $allowcss;

    /**
     * @var int
     */
    protected $allowpoke;

    /**
     * @var int
     */
    protected $allowfriend;

    /**
     * @var int
     */
    protected $allowclick;

    /**
     * @var int
     */
    protected $allowmagic;

    /**
     * @var int
     */
    protected $allowstat;

    /**
     * @var int
     */
    protected $allowstatdata;

    /**
     * @var int
     */
    protected $videophotoignore;

    /**
     * @var int
     */
    protected $allowviewvideophoto;

    /**
     * @var int
     */
    protected $allowmyop;

    /**
     * @var int
     */
    protected $magicdiscount;

    /**
     * @var int
     */
    protected $domainlength;

    /**
     * @var int
     */
    protected $seccode;

    /**
     * @var int
     */
    protected $disablepostctrl;

    /**
     * @var int
     */
    protected $allowbuildgroup;

    /**
     * @var int
     */
    protected $allowgroupdirectpost;

    /**
     * @var int
     */
    protected $allowgroupposturl;

    /**
     * @var int
     */
    protected $edittimelimit;

    /**
     * @var int
     */
    protected $allowpostarticle;

    /**
     * @var int
     */
    protected $allowdownlocalimg;

    /**
     * @var int
     */
    protected $allowdownremoteimg;

    /**
     * @var int
     */
    protected $allowpostarticlemod;

    /**
     * @var int
     */
    protected $allowspacediyhtml;

    /**
     * @var int
     */
    protected $allowspacediybbcode;

    /**
     * @var int
     */
    protected $allowspacediyimgcode;

    /**
     * @var int
     */
    protected $allowcommentpost;

    /**
     * @var int
     */
    protected $allowcommentitem;

    /**
     * @var int
     */
    protected $allowcommentreply;

    /**
     * @var int
     */
    protected $allowreplycredit;

    /**
     * @var int
     */
    protected $ignorecensor;

    /**
     * @var int
     */
    protected $allowsendallpm;

    /**
     * @var int
     */
    protected $allowsendpmmaxnum;

    /**
     * @var int
     */
    protected $maximagesize;

    /**
     * @var int
     */
    protected $allowmediacode;

    /**
     * @var int
     */
    protected $allowbegincode;

    /**
     * @var int
     */
    protected $allowat;

    /**
     * @var int
     */
    protected $allowsetpublishdate;

    /**
     * @var int
     */
    protected $allowfollowcollection;

    /**
     * @var int
     */
    protected $allowcommentcollection;

    /**
     * @var int
     */
    protected $allowcreatecollection;

    /**
     * @var int
     */
    protected $forcesecques;

    /**
     * @var int
     */
    protected $forcelogin;

    /**
     * @var int
     */
    protected $closead;

    /**
     * @var int
     */
    protected $buildgroupcredits;

    /**
     * @var int
     */
    protected $allowimgcontent;

    /**
     * Permission constructor.
     */
    public function __construct(array $permission)
    {
        if(isset($permission['allowvisit'])){
            $this->allowvisit = (int)$permission['allowvisit'];
        }
        if(isset($permission['allowsendpm'])){
            $this->allowsendpm = (int)$permission['allowsendpm'];
        }
        if(isset($permission['allowinvite'])){
            $this->allowinvite = (int)$permission['allowinvite'];
        }
        if(isset($permission['allowmailinvite'])){
            $this->allowmailinvite = (int)$permission['allowmailinvite'];
        }
        if(isset($permission['readaccess'])){
            $this->readaccess = (int)$permission['readaccess'];
        }
        if(isset($permission['allowpost'])){
            $this->allowpost = (int)$permission['allowpost'];
        }
        if(isset($permission['allowreply'])){
            $this->allowreply = (int)$permission['allowreply'];
        }
        if(isset($permission['allowpostpoll'])){
            $this->allowpostpoll = (int)$permission['allowpostpoll'];
        }
        if(isset($permission['allowpostreward'])){
            $this->allowpostreward = (int)$permission['allowpostreward'];
        }
        if(isset($permission['allowposttrade'])){
            $this->allowposttrade = (int)$permission['allowposttrade'];
        }
        if(isset($permission['allowpostactivity'])){
            $this->allowpostactivity = (int)$permission['allowpostactivity'];
        }
        if(isset($permission['allowdirectpost'])){
            $this->allowdirectpost = (int)$permission['allowdirectpost'];
        }
        if(isset($permission['allowgetattach'])){
            $this->allowgetattach = (int)$permission['allowgetattach'];
        }
        if(isset($permission['allowgetimage'])){
            $this->allowgetimage = (int)$permission['allowgetimage'];
        }
        if(isset($permission['allowpostattach'])){
            $this->allowpostattach = (int)$permission['allowpostattach'];
        }
        if(isset($permission['allowpostimage'])){
            $this->allowpostimage = (int)$permission['allowpostimage'];
        }
        if(isset($permission['allowvote'])){
            $this->allowvote = (int)$permission['allowvote'];
        }
        if(isset($permission['allowsearch'])){
            $this->allowsearch = (int)$permission['allowsearch'];
        }
        if(isset($permission['allowcstatus'])){
            $this->allowcstatus = (int)$permission['allowcstatus'];
        }
        if(isset($permission['allowinvisible'])){
            $this->allowinvisible = (int)$permission['allowinvisible'];
        }
        if(isset($permission['allowtransfer'])){
            $this->allowtransfer = (int)$permission['allowtransfer'];
        }
        if(isset($permission['allowsetreadperm'])){
            $this->allowsetreadperm = (int)$permission['allowsetreadperm'];
        }
        if(isset($permission['allowsetattachperm'])){
            $this->allowsetattachperm = (int)$permission['allowsetattachperm'];
        }
        if(isset($permission['allowposttag'])){
            $this->allowposttag = (int)$permission['allowposttag'];
        }
        if(isset($permission['allowhidecode'])){
            $this->allowhidecode = (int)$permission['allowhidecode'];
        }
        if(isset($permission['allowhtml'])){
            $this->allowhtml = (int)$permission['allowhtml'];
        }
        if(isset($permission['allowanonymous'])){
            $this->allowanonymous = (int)$permission['allowanonymous'];
        }
        if(isset($permission['allowsigbbcode'])){
            $this->allowsigbbcode = (int)$permission['allowsigbbcode'];
        }
        if(isset($permission['allowsigimgcode'])){
            $this->allowsigimgcode = (int)$permission['allowsigimgcode'];
        }
        if(isset($permission['allowmagics'])){
            $this->allowmagics = (int)$permission['allowmagics'];
        }
        if(isset($permission['disableperiodctrl'])){
            $this->disableperiodctrl = (int)$permission['disableperiodctrl'];
        }
        if(isset($permission['reasonpm'])){
            $this->reasonpm = (int)$permission['reasonpm'];
        }
        if(isset($permission['maxprice'])){
            $this->maxprice = (int)$permission['maxprice'];
        }
        if(isset($permission['maxsigsize'])){
            $this->maxsigsize = (int)$permission['maxsigsize'];
        }
        if(isset($permission['maxattachsize'])){
            $this->maxattachsize = (int)$permission['maxattachsize'];
        }
        if(isset($permission['maxsizeperday'])){
            $this->maxsizeperday = (int)$permission['maxsizeperday'];
        }
        if(isset($permission['maxthreadsperhour'])){
            $this->maxthreadsperhour = (int)$permission['maxthreadsperhour'];
        }
        if(isset($permission['maxpostsperhour'])){
            $this->maxpostsperhour = (int)$permission['maxpostsperhour'];
        }
        if(isset($permission['attachextensions'])){
            $this->attachextensions = (int)$permission['attachextensions'];
        }
        if(isset($permission['raterange'])){
            $this->raterange = (int)$permission['raterange'];
        }
        if(isset($permission['loginreward'])){
            $this->loginreward = (int)$permission['loginreward'];
        }
        if(isset($permission['mintradeprice'])){
            $this->mintradeprice = (int)$permission['mintradeprice'];
        }
        if(isset($permission['maxtradeprice'])){
            $this->maxtradeprice = (int)$permission['maxtradeprice'];
        }
        if(isset($permission['minrewardprice'])){
            $this->minrewardprice = (int)$permission['minrewardprice'];
        }
        if(isset($permission['maxrewardprice'])){
            $this->maxrewardprice = (int)$permission['maxrewardprice'];
        }
        if(isset($permission['magicsdiscount'])){
            $this->magicsdiscount = (int)$permission['magicsdiscount'];
        }
        if(isset($permission['maxmagicsweight'])){
            $this->maxmagicsweight = (int)$permission['maxmagicsweight'];
        }
        if(isset($permission['allowpostdebate'])){
            $this->allowpostdebate = (int)$permission['allowpostdebate'];
        }
        if(isset($permission['tradestick'])){
            $this->tradestick = (int)$permission['tradestick'];
        }
        if(isset($permission['exempt'])){
            $this->exempt = (int)$permission['exempt'];
        }
        if(isset($permission['maxattachnum'])){
            $this->maxattachnum = (int)$permission['maxattachnum'];
        }
        if(isset($permission['allowposturl'])){
            $this->allowposturl = (int)$permission['allowposturl'];
        }
        if(isset($permission['allowrecommend'])){
            $this->allowrecommend = (int)$permission['allowrecommend'];
        }
        if(isset($permission['allowpostrushreply'])){
            $this->allowpostrushreply = (int)$permission['allowpostrushreply'];
        }
        if(isset($permission['maxfriendnum'])){
            $this->maxfriendnum = (int)$permission['maxfriendnum'];
        }
        if(isset($permission['maxspacesize'])){
            $this->maxspacesize = (int)$permission['maxspacesize'];
        }
        if(isset($permission['allowcomment'])){
            $this->allowcomment = (int)$permission['allowcomment'];
        }
        if(isset($permission['allowcommentarticle'])){
            $this->allowcommentarticle = (int)$permission['allowcommentarticle'];
        }
        if(isset($permission['searchinterval'])){
            $this->searchinterval = (int)$permission['searchinterval'];
        }
        if(isset($permission['searchignore'])){
            $this->searchignore = (int)$permission['searchignore'];
        }
        if(isset($permission['allowblog'])){
            $this->allowblog = (int)$permission['allowblog'];
        }
        if(isset($permission['allowdoing'])){
            $this->allowdoing = (int)$permission['allowdoing'];
        }
        if(isset($permission['allowupload'])){
            $this->allowupload = (int)$permission['allowupload'];
        }
        if(isset($permission['allowshare'])){
            $this->allowshare = (int)$permission['allowshare'];
        }
        if(isset($permission['allowblogmod'])){
            $this->allowblogmod = (int)$permission['allowblogmod'];
        }
        if(isset($permission['allowdoingmod'])){
            $this->allowdoingmod = (int)$permission['allowdoingmod'];
        }
        if(isset($permission['allowuploadmod'])){
            $this->allowuploadmod = (int)$permission['allowuploadmod'];
        }
        if(isset($permission['allowsharemod'])){
            $this->allowsharemod = (int)$permission['allowsharemod'];
        }
        if(isset($permission['allowcss'])){
            $this->allowcss = (int)$permission['allowcss'];
        }
        if(isset($permission['allowpoke'])){
            $this->allowpoke = (int)$permission['allowpoke'];
        }
        if(isset($permission['allowfriend'])){
            $this->allowfriend = (int)$permission['allowfriend'];
        }
        if(isset($permission['allowclick'])){
            $this->allowclick = (int)$permission['allowclick'];
        }
        if(isset($permission['allowmagic'])){
            $this->allowmagic = (int)$permission['allowmagic'];
        }
        if(isset($permission['allowstat'])){
            $this->allowstat = (int)$permission['allowstat'];
        }
        if(isset($permission['allowstatdata'])){
            $this->allowstatdata = (int)$permission['allowstatdata'];
        }
        if(isset($permission['videophotoignore'])){
            $this->videophotoignore = (int)$permission['videophotoignore'];
        }
        if(isset($permission['allowviewvideophoto'])){
            $this->allowviewvideophoto = (int)$permission['allowviewvideophoto'];
        }
        if(isset($permission['allowmyop'])){
            $this->allowmyop = (int)$permission['allowmyop'];
        }
        if(isset($permission['magicdiscount'])){
            $this->magicdiscount = (int)$permission['magicdiscount'];
        }
        if(isset($permission['domainlength'])){
            $this->domainlength = (int)$permission['domainlength'];
        }
        if(isset($permission['seccode'])){
            $this->seccode = (int)$permission['seccode'];
        }
        if(isset($permission['disablepostctrl'])){
            $this->disablepostctrl = (int)$permission['disablepostctrl'];
        }
        if(isset($permission['allowbuildgroup'])){
            $this->allowbuildgroup = (int)$permission['allowbuildgroup'];
        }
        if(isset($permission['allowgroupdirectpost'])){
            $this->allowgroupdirectpost = (int)$permission['allowgroupdirectpost'];
        }
        if(isset($permission['allowgroupposturl'])){
            $this->allowgroupposturl = (int)$permission['allowgroupposturl'];
        }
        if(isset($permission['edittimelimit'])){
            $this->edittimelimit = (int)$permission['edittimelimit'];
        }
        if(isset($permission['allowpostarticle'])){
            $this->allowpostarticle = (int)$permission['allowpostarticle'];
        }
        if(isset($permission['allowdownlocalimg'])){
            $this->allowdownlocalimg = (int)$permission['allowdownlocalimg'];
        }
        if(isset($permission['allowdownremoteimg'])){
            $this->allowdownremoteimg = (int)$permission['allowdownremoteimg'];
        }
        if(isset($permission['allowpostarticlemod'])){
            $this->allowpostarticlemod = (int)$permission['allowpostarticlemod'];
        }
        if(isset($permission['allowspacediyhtml'])){
            $this->allowspacediyhtml = (int)$permission['allowspacediyhtml'];
        }
        if(isset($permission['allowspacediybbcode'])){
            $this->allowspacediybbcode = (int)$permission['allowspacediybbcode'];
        }
        if(isset($permission['allowspacediyimgcode'])){
            $this->allowspacediyimgcode = (int)$permission['allowspacediyimgcode'];
        }
        if(isset($permission['allowcommentpost'])){
            $this->allowcommentpost = (int)$permission['allowcommentpost'];
        }
        if(isset($permission['allowcommentitem'])){
            $this->allowcommentitem = (int)$permission['allowcommentitem'];
        }
        if(isset($permission['allowcommentreply'])){
            $this->allowcommentreply = (int)$permission['allowcommentreply'];
        }
        if(isset($permission['allowreplycredit'])){
            $this->allowreplycredit = (int)$permission['allowreplycredit'];
        }
        if(isset($permission['ignorecensor'])){
            $this->ignorecensor = (int)$permission['ignorecensor'];
        }
        if(isset($permission['allowsendallpm'])){
            $this->allowsendallpm = (int)$permission['allowsendallpm'];
        }
        if(isset($permission['allowsendpmmaxnum'])){
            $this->allowsendpmmaxnum = (int)$permission['allowsendpmmaxnum'];
        }
        if(isset($permission['maximagesize'])){
            $this->maximagesize = (int)$permission['maximagesize'];
        }
        if(isset($permission['allowmediacode'])){
            $this->allowmediacode = (int)$permission['allowmediacode'];
        }
        if(isset($permission['allowbegincode'])){
            $this->allowbegincode = (int)$permission['allowbegincode'];
        }
        if(isset($permission['allowat'])){
            $this->allowat = (int)$permission['allowat'];
        }
        if(isset($permission['allowsetpublishdate'])){
            $this->allowsetpublishdate = (int)$permission['allowsetpublishdate'];
        }
        if(isset($permission['allowfollowcollection'])){
            $this->allowfollowcollection = (int)$permission['allowfollowcollection'];
        }
        if(isset($permission['allowcommentcollection'])){
            $this->allowcommentcollection = (int)$permission['allowcommentcollection'];
        }
        if(isset($permission['allowcreatecollection'])){
            $this->allowcreatecollection = (int)$permission['allowcreatecollection'];
        }
        if(isset($permission['forcesecques'])){
            $this->forcesecques = (int)$permission['forcesecques'];
        }
        if(isset($permission['forcelogin'])){
            $this->forcelogin = (int)$permission['forcelogin'];
        }
        if(isset($permission['closead'])){
            $this->closead = (int)$permission['closead'];
        }
        if(isset($permission['buildgroupcredits'])){
            $this->buildgroupcredits = (int)$permission['buildgroupcredits'];
        }
        if(isset($permission['allowimgcontent'])){
            $this->allowimgcontent = (int)$permission['allowimgcontent'];
        }
    }

    /**
     * @return int
     */
    public function getAllowvisit(): int
    {
        return $this->allowvisit;
    }

    /**
     * @return int
     */
    public function getAllowsendpm(): int
    {
        return $this->allowsendpm;
    }

    /**
     * @return int
     */
    public function getAllowinvite(): int
    {
        return $this->allowinvite;
    }

    /**
     * @return int
     */
    public function getAllowmailinvite(): int
    {
        return $this->allowmailinvite;
    }

    /**
     * @return int
     */
    public function getReadaccess(): int
    {
        return $this->readaccess;
    }

    /**
     * @return int
     */
    public function getAllowpost(): int
    {
        return $this->allowpost;
    }

    /**
     * @return int
     */
    public function getAllowreply(): int
    {
        return $this->allowreply;
    }

    /**
     * @return int
     */
    public function getAllowpostpoll(): int
    {
        return $this->allowpostpoll;
    }

    /**
     * @return int
     */
    public function getAllowpostreward(): int
    {
        return $this->allowpostreward;
    }

    /**
     * @return int
     */
    public function getAllowposttrade(): int
    {
        return $this->allowposttrade;
    }

    /**
     * @return int
     */
    public function getAllowpostactivity(): int
    {
        return $this->allowpostactivity;
    }

    /**
     * @return int
     */
    public function getAllowdirectpost(): int
    {
        return $this->allowdirectpost;
    }

    /**
     * @return int
     */
    public function getAllowgetattach(): int
    {
        return $this->allowgetattach;
    }

    /**
     * @return int
     */
    public function getAllowgetimage(): int
    {
        return $this->allowgetimage;
    }

    /**
     * @return int
     */
    public function getAllowpostattach(): int
    {
        return $this->allowpostattach;
    }

    /**
     * @return int
     */
    public function getAllowpostimage(): int
    {
        return $this->allowpostimage;
    }

    /**
     * @return int
     */
    public function getAllowvote(): int
    {
        return $this->allowvote;
    }

    /**
     * @return int
     */
    public function getAllowsearch(): int
    {
        return $this->allowsearch;
    }

    /**
     * @return int
     */
    public function getAllowcstatus(): int
    {
        return $this->allowcstatus;
    }

    /**
     * @return int
     */
    public function getAllowinvisible(): int
    {
        return $this->allowinvisible;
    }

    /**
     * @return int
     */
    public function getAllowtransfer(): int
    {
        return $this->allowtransfer;
    }

    /**
     * @return int
     */
    public function getAllowsetreadperm(): int
    {
        return $this->allowsetreadperm;
    }

    /**
     * @return int
     */
    public function getAllowsetattachperm(): int
    {
        return $this->allowsetattachperm;
    }

    /**
     * @return int
     */
    public function getAllowposttag(): int
    {
        return $this->allowposttag;
    }

    /**
     * @return int
     */
    public function getAllowhidecode(): int
    {
        return $this->allowhidecode;
    }

    /**
     * @return int
     */
    public function getAllowhtml(): int
    {
        return $this->allowhtml;
    }

    /**
     * @return int
     */
    public function getAllowanonymous(): int
    {
        return $this->allowanonymous;
    }

    /**
     * @return int
     */
    public function getAllowsigbbcode(): int
    {
        return $this->allowsigbbcode;
    }

    /**
     * @return int
     */
    public function getAllowsigimgcode(): int
    {
        return $this->allowsigimgcode;
    }

    /**
     * @return int
     */
    public function getAllowmagics(): int
    {
        return $this->allowmagics;
    }

    /**
     * @return int
     */
    public function getDisableperiodctrl(): int
    {
        return $this->disableperiodctrl;
    }

    /**
     * @return int
     */
    public function getReasonpm(): int
    {
        return $this->reasonpm;
    }

    /**
     * @return int
     */
    public function getMaxprice(): int
    {
        return $this->maxprice;
    }

    /**
     * @return int
     */
    public function getMaxsigsize(): int
    {
        return $this->maxsigsize;
    }

    /**
     * @return int
     */
    public function getMaxattachsize(): int
    {
        return $this->maxattachsize;
    }

    /**
     * @return int
     */
    public function getMaxsizeperday(): int
    {
        return $this->maxsizeperday;
    }

    /**
     * @return int
     */
    public function getMaxthreadsperhour(): int
    {
        return $this->maxthreadsperhour;
    }

    /**
     * @return int
     */
    public function getMaxpostsperhour(): int
    {
        return $this->maxpostsperhour;
    }

    /**
     * @return int
     */
    public function getAttachextensions(): int
    {
        return $this->attachextensions;
    }

    /**
     * @return int
     */
    public function getRaterange(): int
    {
        return $this->raterange;
    }

    /**
     * @return int
     */
    public function getLoginreward(): int
    {
        return $this->loginreward;
    }

    /**
     * @return int
     */
    public function getMintradeprice(): int
    {
        return $this->mintradeprice;
    }

    /**
     * @return int
     */
    public function getMaxtradeprice(): int
    {
        return $this->maxtradeprice;
    }

    /**
     * @return int
     */
    public function getMinrewardprice(): int
    {
        return $this->minrewardprice;
    }

    /**
     * @return int
     */
    public function getMaxrewardprice(): int
    {
        return $this->maxrewardprice;
    }

    /**
     * @return int
     */
    public function getMagicsdiscount(): int
    {
        return $this->magicsdiscount;
    }

    /**
     * @return int
     */
    public function getMaxmagicsweight(): int
    {
        return $this->maxmagicsweight;
    }

    /**
     * @return int
     */
    public function getAllowpostdebate(): int
    {
        return $this->allowpostdebate;
    }

    /**
     * @return int
     */
    public function getTradestick(): int
    {
        return $this->tradestick;
    }

    /**
     * @return int
     */
    public function getExempt(): int
    {
        return $this->exempt;
    }

    /**
     * @return int
     */
    public function getMaxattachnum(): int
    {
        return $this->maxattachnum;
    }

    /**
     * @return int
     */
    public function getAllowposturl(): int
    {
        return $this->allowposturl;
    }

    /**
     * @return int
     */
    public function getAllowrecommend(): int
    {
        return $this->allowrecommend;
    }

    /**
     * @return int
     */
    public function getAllowpostrushreply(): int
    {
        return $this->allowpostrushreply;
    }

    /**
     * @return int
     */
    public function getMaxfriendnum(): int
    {
        return $this->maxfriendnum;
    }

    /**
     * @return int
     */
    public function getMaxspacesize(): int
    {
        return $this->maxspacesize;
    }

    /**
     * @return int
     */
    public function getAllowcomment(): int
    {
        return $this->allowcomment;
    }

    /**
     * @return int
     */
    public function getAllowcommentarticle(): int
    {
        return $this->allowcommentarticle;
    }

    /**
     * @return int
     */
    public function getSearchinterval(): int
    {
        return $this->searchinterval;
    }

    /**
     * @return int
     */
    public function getSearchignore(): int
    {
        return $this->searchignore;
    }

    /**
     * @return int
     */
    public function getAllowblog(): int
    {
        return $this->allowblog;
    }

    /**
     * @return int
     */
    public function getAllowdoing(): int
    {
        return $this->allowdoing;
    }

    /**
     * @return int
     */
    public function getAllowupload(): int
    {
        return $this->allowupload;
    }

    /**
     * @return int
     */
    public function getAllowshare(): int
    {
        return $this->allowshare;
    }

    /**
     * @return int
     */
    public function getAllowblogmod(): int
    {
        return $this->allowblogmod;
    }

    /**
     * @return int
     */
    public function getAllowdoingmod(): int
    {
        return $this->allowdoingmod;
    }

    /**
     * @return int
     */
    public function getAllowuploadmod(): int
    {
        return $this->allowuploadmod;
    }

    /**
     * @return int
     */
    public function getAllowsharemod(): int
    {
        return $this->allowsharemod;
    }

    /**
     * @return int
     */
    public function getAllowcss(): int
    {
        return $this->allowcss;
    }

    /**
     * @return int
     */
    public function getAllowpoke(): int
    {
        return $this->allowpoke;
    }

    /**
     * @return int
     */
    public function getAllowfriend(): int
    {
        return $this->allowfriend;
    }

    /**
     * @return int
     */
    public function getAllowclick(): int
    {
        return $this->allowclick;
    }

    /**
     * @return int
     */
    public function getAllowmagic(): int
    {
        return $this->allowmagic;
    }

    /**
     * @return int
     */
    public function getAllowstat(): int
    {
        return $this->allowstat;
    }

    /**
     * @return int
     */
    public function getAllowstatdata(): int
    {
        return $this->allowstatdata;
    }

    /**
     * @return int
     */
    public function getVideophotoignore(): int
    {
        return $this->videophotoignore;
    }

    /**
     * @return int
     */
    public function getAllowviewvideophoto(): int
    {
        return $this->allowviewvideophoto;
    }

    /**
     * @return int
     */
    public function getAllowmyop(): int
    {
        return $this->allowmyop;
    }

    /**
     * @return int
     */
    public function getMagicdiscount(): int
    {
        return $this->magicdiscount;
    }

    /**
     * @return int
     */
    public function getDomainlength(): int
    {
        return $this->domainlength;
    }

    /**
     * @return int
     */
    public function getSeccode(): int
    {
        return $this->seccode;
    }

    /**
     * @return int
     */
    public function getDisablepostctrl(): int
    {
        return $this->disablepostctrl;
    }

    /**
     * @return int
     */
    public function getAllowbuildgroup(): int
    {
        return $this->allowbuildgroup;
    }

    /**
     * @return int
     */
    public function getAllowgroupdirectpost(): int
    {
        return $this->allowgroupdirectpost;
    }

    /**
     * @return int
     */
    public function getAllowgroupposturl(): int
    {
        return $this->allowgroupposturl;
    }

    /**
     * @return int
     */
    public function getEdittimelimit(): int
    {
        return $this->edittimelimit;
    }

    /**
     * @return int
     */
    public function getAllowpostarticle(): int
    {
        return $this->allowpostarticle;
    }

    /**
     * @return int
     */
    public function getAllowdownlocalimg(): int
    {
        return $this->allowdownlocalimg;
    }

    /**
     * @return int
     */
    public function getAllowdownremoteimg(): int
    {
        return $this->allowdownremoteimg;
    }

    /**
     * @return int
     */
    public function getAllowpostarticlemod(): int
    {
        return $this->allowpostarticlemod;
    }

    /**
     * @return int
     */
    public function getAllowspacediyhtml(): int
    {
        return $this->allowspacediyhtml;
    }

    /**
     * @return int
     */
    public function getAllowspacediybbcode(): int
    {
        return $this->allowspacediybbcode;
    }

    /**
     * @return int
     */
    public function getAllowspacediyimgcode(): int
    {
        return $this->allowspacediyimgcode;
    }

    /**
     * @return int
     */
    public function getAllowcommentpost(): int
    {
        return $this->allowcommentpost;
    }

    /**
     * @return int
     */
    public function getAllowcommentitem(): int
    {
        return $this->allowcommentitem;
    }

    /**
     * @return int
     */
    public function getAllowcommentreply(): int
    {
        return $this->allowcommentreply;
    }

    /**
     * @return int
     */
    public function getAllowreplycredit(): int
    {
        return $this->allowreplycredit;
    }

    /**
     * @return int
     */
    public function getIgnorecensor(): int
    {
        return $this->ignorecensor;
    }

    /**
     * @return int
     */
    public function getAllowsendallpm(): int
    {
        return $this->allowsendallpm;
    }

    /**
     * @return int
     */
    public function getAllowsendpmmaxnum(): int
    {
        return $this->allowsendpmmaxnum;
    }

    /**
     * @return int
     */
    public function getMaximagesize(): int
    {
        return $this->maximagesize;
    }

    /**
     * @return int
     */
    public function getAllowmediacode(): int
    {
        return $this->allowmediacode;
    }

    /**
     * @return int
     */
    public function getAllowbegincode(): int
    {
        return $this->allowbegincode;
    }

    /**
     * @return int
     */
    public function getAllowat(): int
    {
        return $this->allowat;
    }

    /**
     * @return int
     */
    public function getAllowsetpublishdate(): int
    {
        return $this->allowsetpublishdate;
    }

    /**
     * @return int
     */
    public function getAllowfollowcollection(): int
    {
        return $this->allowfollowcollection;
    }

    /**
     * @return int
     */
    public function getAllowcommentcollection(): int
    {
        return $this->allowcommentcollection;
    }

    /**
     * @return int
     */
    public function getAllowcreatecollection(): int
    {
        return $this->allowcreatecollection;
    }

    /**
     * @return int
     */
    public function getForcesecques(): int
    {
        return $this->forcesecques;
    }

    /**
     * @return int
     */
    public function getForcelogin(): int
    {
        return $this->forcelogin;
    }

    /**
     * @return int
     */
    public function getClosead(): int
    {
        return $this->closead;
    }

    /**
     * @return int
     */
    public function getBuildgroupcredits(): int
    {
        return $this->buildgroupcredits;
    }

    /**
     * @return int
     */
    public function getAllowimgcontent(): int
    {
        return $this->allowimgcontent;
    }

    public function allowAccess(): bool
    {
        $access = (int)$this->allowvisit;

        return !($access === 0);
    }

    public function allowSendMessage(): bool
    {
        return $this->allowsendpm == 1;
    }

    public function allowUseHtmlCode(): bool
    {
        return $this->allowhtml == 1;
    }

    public function allowPostUrl(): bool
    {
        return $this->allowposturl != 0;
    }

    public function allowThreadParseUrl(): bool
    {
        return $this->allowposturl == 3;
    }

    public function allowCustomHonor(): bool
    {
        return $this->allowcstatus == 1;
    }

    public function allowNewThread(): bool
    {
        return $this->allowpost == 1;
    }

    public function allowNewComment(): bool
    {
        return $this->allowreply == 1;
    }

    public function modNewThread(): bool
    {
        return empty($this->allowdirectpost) || $this->allowdirectpost == 1;
    }

    public function modNewComment(): bool
    {
        return empty($this->allowdirectpost) || $this->allowdirectpost == 2;
    }

    public function allowUseHideCode(): bool
    {
        return $this->allowhidecode == 0;
    }

    public function allowUseMediaCode(): bool
    {
        return $this->allowmediacode == 0;
    }

    public function allowUseBeginCode(): bool
    {
        return $this->allowbegincode == 0;
    }

    public function allowUseDiscuzCode(): bool
    {
        return $this->allowsigbbcode == 0;
    }

    public function allowUseImageCode(): bool
    {
        return $this->allowsigimgcode == 0;
    }

    public function allowUploadAttachment():bool
    {
        return $this->allowpostattach == 0;
    }

    public function allowUploadImage():bool
    {
        return $this->allowpostimage == 0;
    }
}