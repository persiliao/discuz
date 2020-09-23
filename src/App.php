<?php

declare(strict_types=1);

namespace PersiLiao\Discuz;

class App{

    /**
     * @var App
     */
    protected static $instance;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var Forum
     */
    protected $forum;

    /**
     * @var Thread
     */
    protected $thread;

    /**
     * @var Post
     */
    protected $post;

    /**
     * @var array
     */
    protected $config;

    /**
     * App constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public static function getInstance(array $config = []): App
    {
        if(self::$instance === null){
            self::$instance = new App($config);
        }

        return self::$instance;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return App
     */
    public function setUser(User $user): App
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Forum
     */
    public function getForum(): Forum
    {
        return $this->forum;
    }

    /**
     * @param Forum $forum
     *
     * @return App
     */
    public function setForum(Forum $forum): App
    {
        $this->forum = $forum;

        return $this;
    }

    /**
     * @return Thread
     */
    public function getThread(): Thread
    {
        return $this->thread;
    }

    /**
     * @param Thread $thread
     *
     * @return App
     */
    public function setThread(Thread $thread): App
    {
        $this->thread = $thread;

        return $this;
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
     * @return App
     */
    public function setPost(Post $post): App
    {
        $this->post = $post;

        return $this;
    }

}