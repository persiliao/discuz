<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

class Thread{

    /**
     * @var int
     */
    protected $tid;

    /**
     * @var int
     */
    protected $fid;

    /**
     * @var int
     */
    protected $posttableid;

    /**
     * @var int
     */
    protected $typeid;

    /**
     * @var int
     */
    protected $sortid;

    /**
     * @var int
     */
    protected $readperm;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var int
     */
    protected $authorid;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var int
     */
    protected $dateline;

    /**
     * @var int
     */
    protected $lastpost;

    /**
     * @var string
     */
    protected $lastposter;

    /**
     * @var int
     */
    protected $views;

    /**
     * @var int
     */
    protected $replies;

    /**
     * @var int
     */
    protected $displayorder;

    /**
     * @var int
     */
    protected $highlight;

    /**
     * @var int
     */
    protected $digest;

    /**
     * @var int
     */
    protected $rate;

    /**
     * @var int
     */
    protected $special;

    /**
     * @var int
     */
    protected $attachment;

    /**
     * @var int
     */
    protected $moderated;

    /**
     * @var int
     */
    protected $closed;

    /**
     * @var int
     */
    protected $stickreply;

    /**
     * @var int
     */
    protected $recommends;

    /**
     * @var int
     */
    protected $recommend_add;

    /**
     * @var int
     */
    protected $recommend_sub;

    /**
     * @var int
     */
    protected $heats;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var int
     */
    protected $isgroup;

    /**
     * @var int
     */
    protected $favtimes;

    /**
     * @var int
     */
    protected $sharetimes;

    /**
     * @var int
     */
    protected $stamp;

    /**
     * @var int
     */
    protected $icon;

    /**
     * @var int
     */
    protected $pushedaid;

    /**
     * @var int
     */
    protected $cover;

    /**
     * @var int
     */
    protected $replycredit;

    /**
     * @var string
     */
    protected $relatebytag;

    /**
     * @var int
     */
    protected $maxposition;

    /**
     * @var string
     */
    protected $bgcolor;

    /**
     * @var int
     */
    protected $comments;

    /**
     * @var int
     */
    protected $hidden;

    /**
     * @var Post
     */
    protected $post;

    /**
     * Thread constructor.
     */
    public function __construct(array $thread)
    {
        if(isset($thread['tid'])){
            $this->tid = $thread['tid'];
        }
        if(isset($thread['fid'])){
            $this->fid = $thread['fid'];
        }
        if(isset($thread['posttableid'])){
            $this->posttableid = $thread['posttableid'];
        }
        if(isset($thread['typeid'])){
            $this->typeid = $thread['typeid'];
        }
        if(isset($thread['sortid'])){
            $this->sortid = $thread['sortid'];
        }
        if(isset($thread['readperm'])){
            $this->readperm = $thread['readperm'];
        }
        if(isset($thread['price'])){
            $this->price = $thread['price'];
        }
        if(isset($thread['author'])){
            $this->author = $thread['author'];
        }
        if(isset($thread['authorid'])){
            $this->authorid = $thread['authorid'];
        }
        if(isset($thread['subject'])){
            $this->subject = $thread['subject'];
        }
        if(isset($thread['dateline'])){
            $this->dateline = $thread['dateline'];
        }
        if(isset($thread['lastpost'])){
            $this->lastpost = $thread['lastpost'];
        }
        if(isset($thread['lastposter'])){
            $this->lastposter = $thread['lastposter'];
        }
        if(isset($thread['views'])){
            $this->views = $thread['views'];
        }
        if(isset($thread['replies'])){
            $this->replies = $thread['replies'];
        }
        if(isset($thread['displayorder'])){
            $this->displayorder = $thread['displayorder'];
        }
        if(isset($thread['highlight'])){
            $this->highlight = $thread['highlight'];
        }
        if(isset($thread['digest'])){
            $this->digest = $thread['digest'];
        }
        if(isset($thread['rate'])){
            $this->rate = $thread['rate'];
        }
        if(isset($thread['special'])){
            $this->special = $thread['special'];
        }
        if(isset($thread['attachment'])){
            $this->attachment = $thread['attachment'];
        }
        if(isset($thread['moderated'])){
            $this->moderated = $thread['moderated'];
        }
        if(isset($thread['closed'])){
            $this->closed = $thread['closed'];
        }
        if(isset($thread['stickreply'])){
            $this->stickreply = $thread['stickreply'];
        }
        if(isset($thread['recommends'])){
            $this->recommends = $thread['recommends'];
        }
        if(isset($thread['recommend_add'])){
            $this->recommend_add = $thread['recommend_add'];
        }
        if(isset($thread['recommend_sub'])){
            $this->recommend_sub = $thread['recommend_sub'];
        }
        if(isset($thread['heats'])){
            $this->heats = $thread['heats'];
        }
        if(isset($thread['status'])){
            $this->status = $thread['status'];
        }
        if(isset($thread['isgroup'])){
            $this->isgroup = $thread['isgroup'];
        }
        if(isset($thread['favtimes'])){
            $this->favtimes = $thread['favtimes'];
        }
        if(isset($thread['sharetimes'])){
            $this->sharetimes = $thread['sharetimes'];
        }
        if(isset($thread['stamp'])){
            $this->stamp = $thread['stamp'];
        }
        if(isset($thread['icon'])){
            $this->icon = $thread['icon'];
        }
        if(isset($thread['pushedaid'])){
            $this->pushedaid = $thread['pushedaid'];
        }
        if(isset($thread['cover'])){
            $this->cover = $thread['cover'];
        }
        if(isset($thread['replycredit'])){
            $this->replycredit = $thread['replycredit'];
        }
        if(isset($thread['relatebytag'])){
            $this->relatebytag = $thread['relatebytag'];
        }
        if(isset($thread['maxposition'])){
            $this->maxposition = $thread['maxposition'];
        }
        if(isset($thread['bgcolor'])){
            $this->bgcolor = $thread['bgcolor'];
        }
        if(isset($thread['comments'])){
            $this->comments = $thread['comments'];
        }
        if(isset($thread['hidden'])){
            $this->hidden = $thread['hidden'];
        }
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     *
     * @return Thread
     */
    public function setPost(Post $post): Thread
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return int
     */
    public function getTid(): int
    {
        return $this->tid;
    }

    /**
     * @return int
     */
    public function getFid(): int
    {
        return $this->fid;
    }

    /**
     * @return int
     */
    public function getPosttableid(): int
    {
        return $this->posttableid;
    }

    /**
     * @return int
     */
    public function getTypeid(): int
    {
        return $this->typeid;
    }

    /**
     * @return int
     */
    public function getSortid(): int
    {
        return $this->sortid;
    }

    /**
     * @return int
     */
    public function getReadperm(): int
    {
        return $this->readperm;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getAuthorid(): int
    {
        return $this->authorid;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return int
     */
    public function getDateline(): int
    {
        return $this->dateline;
    }

    /**
     * @return int
     */
    public function getLastpost(): int
    {
        return $this->lastpost;
    }

    /**
     * @return string
     */
    public function getLastposter(): string
    {
        return $this->lastposter;
    }

    /**
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * @return int
     */
    public function getReplies(): int
    {
        return $this->replies;
    }

    /**
     * @return int
     */
    public function getDisplayorder(): int
    {
        return $this->displayorder;
    }

    /**
     * @return int
     */
    public function getHighlight(): int
    {
        return $this->highlight;
    }

    /**
     * @return int
     */
    public function getDigest(): int
    {
        return $this->digest;
    }

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getSpecial(): int
    {
        return $this->special;
    }

    /**
     * @return int
     */
    public function getAttachment(): int
    {
        return $this->attachment;
    }

    /**
     * @return int
     */
    public function getModerated(): int
    {
        return $this->moderated;
    }

    /**
     * @return int
     */
    public function getClosed(): int
    {
        return $this->closed;
    }

    /**
     * @return int
     */
    public function getStickreply(): int
    {
        return $this->stickreply;
    }

    /**
     * @return int
     */
    public function getRecommends(): int
    {
        return $this->recommends;
    }

    /**
     * @return int
     */
    public function getRecommendAdd(): int
    {
        return $this->recommend_add;
    }

    /**
     * @return int
     */
    public function getRecommendSub(): int
    {
        return $this->recommend_sub;
    }

    /**
     * @return int
     */
    public function getHeats(): int
    {
        return $this->heats;
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
    public function getIsgroup(): int
    {
        return $this->isgroup;
    }

    /**
     * @return int
     */
    public function getFavtimes(): int
    {
        return $this->favtimes;
    }

    /**
     * @return int
     */
    public function getSharetimes(): int
    {
        return $this->sharetimes;
    }

    /**
     * @return int
     */
    public function getStamp(): int
    {
        return $this->stamp;
    }

    /**
     * @return int
     */
    public function getIcon(): int
    {
        return $this->icon;
    }

    /**
     * @return int
     */
    public function getPushedaid(): int
    {
        return $this->pushedaid;
    }

    /**
     * @return int
     */
    public function getCover(): int
    {
        return $this->cover;
    }

    /**
     * @return int
     */
    public function getReplycredit(): int
    {
        return $this->replycredit;
    }

    /**
     * @return string
     */
    public function getRelatebytag(): string
    {
        return $this->relatebytag;
    }

    /**
     * @return int
     */
    public function getMaxposition(): int
    {
        return $this->maxposition;
    }

    /**
     * @return string
     */
    public function getBgcolor(): string
    {
        return $this->bgcolor;
    }

    /**
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }

    /**
     * @return int
     */
    public function getHidden(): int
    {
        return $this->hidden;
    }

    public function canAccess(): bool
    {
        return $this->displayorder >= 0 && $this->isClosed() === false;
    }

    public function isClosed(): bool
    {
        return $this->closed == 1;
    }

    public function needCheck(): bool
    {
        return $this->displayorder == -2;
    }

    public function isDeleted():bool
    {
        return $this->displayorder == -1;
    }

    public function isBanned():bool
    {
        return $this->post->isBanned();
    }
}