<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

class Post{

    /**
     * @var int
     */
    protected $pid;

    /**
     * @var int
     */
    protected $fid;

    /**
     * @var int
     */
    protected $tid;

    /**
     * @var int
     */
    protected $first;

    /**
     * @var int
     */
    protected $reply;

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
    protected $message;

    /**
     * @var string
     */
    protected $useip;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var int
     */
    protected $invisible;

    /**
     * @var int
     */
    protected $anonymous;

    /**
     * @var int
     */
    protected $usesig;

    /**
     * @var int
     */
    protected $htmlon;

    /**
     * @var int
     */
    protected $bbcodeoff;

    /**
     * @var int
     */
    protected $smileyoff;

    /**
     * @var int
     */
    protected $parseurloff;

    /**
     * @var int
     */
    protected $attachment;

    /**
     * @var int
     */
    protected $rate;

    /**
     * @var int
     */
    protected $ratetimes;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var int
     */
    protected $source;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @var int
     */
    protected $comment;

    /**
     * @var int
     */
    protected $replycredit;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var int
     */
    protected $comefrom;

    /**
     * Post constructor.
     */
    public function __construct(array $post)
    {
        if(isset($post['pid'])){
            $this->pid = $post['pid'];
        }
        if(isset($post['fid'])){
            $this->fid = $post['fid'];
        }
        if(isset($post['tid'])){
            $this->tid = $post['tid'];
        }
        if(isset($post['first'])){
            $this->first = $post['first'];
        }
        if(isset($post['reply'])){
            $this->reply = $post['reply'];
        }
        if(isset($post['author'])){
            $this->author = $post['author'];
        }
        if(isset($post['authorid'])){
            $this->authorid = $post['authorid'];
        }
        if(isset($post['subject'])){
            $this->subject = $post['subject'];
        }
        if(isset($post['dateline'])){
            $this->dateline = $post['dateline'];
        }
        if(isset($post['message'])){
            $this->message = $post['message'];
        }
        if(isset($post['useip'])){
            $this->useip = $post['useip'];
        }
        if(isset($post['port'])){
            $this->port = $post['port'];
        }
        if(isset($post['invisible'])){
            $this->invisible = $post['invisible'];
        }
        if(isset($post['anonymous'])){
            $this->anonymous = $post['anonymous'];
        }
        if(isset($post['usesig'])){
            $this->usesig = $post['usesig'];
        }
        if(isset($post['htmlon'])){
            $this->htmlon = $post['htmlon'];
        }
        if(isset($post['bbcodeoff'])){
            $this->bbcodeoff = $post['bbcodeoff'];
        }
        if(isset($post['smileyoff'])){
            $this->smileyoff = $post['smileyoff'];
        }
        if(isset($post['parseurloff'])){
            $this->parseurloff = $post['parseurloff'];
        }
        if(isset($post['attachment'])){
            $this->attachment = $post['attachment'];
        }
        if(isset($post['rate'])){
            $this->rate = $post['rate'];
        }
        if(isset($post['ratetimes'])){
            $this->ratetimes = $post['ratetimes'];
        }
        if(isset($post['status'])){
            $this->status = $post['status'];
        }
        if(isset($post['source'])){
            $this->source = $post['source'];
        }
        if(isset($post['tags'])){
            $this->tags = $post['tags'];
        }
        if(isset($post['comment'])){
            $this->comment = $post['comment'];
        }
        if(isset($post['replycredit'])){
            $this->replycredit = $post['replycredit'];
        }
        if(isset($post['position'])){
            $this->position = $post['position'];
        }
        if(isset($post['comefrom'])){
            $this->comefrom = $post['comefrom'];
        }
    }

    /**
     * @return int
     */
    public function getPid(): int
    {
        return $this->pid;
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
    public function getTid(): int
    {
        return $this->tid;
    }

    /**
     * @return int
     */
    public function getFirst(): int
    {
        return $this->first;
    }

    /**
     * @return int
     */
    public function getReply(): int
    {
        return $this->reply;
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
    public function getMessage(): int
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getUseip(): string
    {
        return $this->useip;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return int
     */
    public function getInvisible(): int
    {
        return $this->invisible;
    }

    /**
     * @return int
     */
    public function getAnonymous(): int
    {
        return $this->anonymous;
    }

    /**
     * @return int
     */
    public function getUsesig(): int
    {
        return $this->usesig;
    }

    /**
     * @return int
     */
    public function getHtmlon(): int
    {
        return $this->htmlon;
    }

    /**
     * @return int
     */
    public function getBbcodeoff(): int
    {
        return $this->bbcodeoff;
    }

    /**
     * @return int
     */
    public function getSmileyoff(): int
    {
        return $this->smileyoff;
    }

    /**
     * @return int
     */
    public function getParseurloff(): int
    {
        return $this->parseurloff;
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
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getRatetimes(): int
    {
        return $this->ratetimes;
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
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getTags(): string
    {
        return $this->tags;
    }

    /**
     * @return int
     */
    public function getComment(): int
    {
        return $this->comment;
    }

    /**
     * @return int
     */
    public function getReplycredit(): int
    {
        return $this->replycredit;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getComefrom(): int
    {
        return $this->comefrom;
    }
}