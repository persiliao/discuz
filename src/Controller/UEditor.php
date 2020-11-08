<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\Controller;

use PersiLiao\Discuz\Controller;

use function json_encode;

use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

abstract class UEditor extends Controller{

    protected $config = [
        'imageActionName' => 'uploadImage',
        'imageFieldName' => 'upfile',
        'imageMaxSize' => 2048000,
        'imageAllowFiles' => [
            0 => '.png',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.gif',
            4 => '.bmp',
        ],
        'imageCompressEnable' => true,
        'imageCompressBorder' => 1600,
        'imageInsertAlign' => 'none',
        'imageUrlPrefix' => '',
        'imagePathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'scrawlActionName' => 'uploadScrawl',
        'scrawlFieldName' => 'upfile',
        'scrawlPathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'scrawlMaxSize' => 2048000,
        'scrawlUrlPrefix' => '',
        'scrawlInsertAlign' => 'none',
        'snapscreenActionName' => 'uploadImage',
        'snapscreenPathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'snapscreenUrlPrefix' => '',
        'snapscreenInsertAlign' => 'none',
        'catcherLocalDomain' => [
            0 => '127.0.0.1',
            1 => 'localhost',
            2 => 'img.baidu.com',
        ],
        'catcherActionName' => 'catcherImage',
        'catcherFieldName' => 'source',
        'catcherPathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'catcherUrlPrefix' => '',
        'catcherMaxSize' => 2048000,
        'catcherAllowFiles' => [
            0 => '.png',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.gif',
            4 => '.bmp',
        ],
        'videoActionName' => 'uploadVideo',
        'videoFieldName' => 'upfile',
        'videoPathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'videoUrlPrefix' => '',
        'videoMaxSize' => 102400000,
        'videoAllowFiles' => [
            0 => '.flv',
            1 => '.swf',
            2 => '.mkv',
            3 => '.avi',
            4 => '.rm',
            5 => '.rmvb',
            6 => '.mpeg',
            7 => '.mpg',
            8 => '.ogg',
            9 => '.ogv',
            10 => '.mov',
            11 => '.wmv',
            12 => '.mp4',
            13 => '.webm',
            14 => '.mp3',
            15 => '.wav',
            16 => '.mid',
        ],
        'fileActionName' => 'uploadFile',
        'fileFieldName' => 'upfile',
        'filePathFormat' => '/data/attachment/ueditor/{yyyy}{mm}{dd}/{time}{rand:6}',
        'fileUrlPrefix' => '',
        'fileMaxSize' => 51200000,
        'fileAllowFiles' => [
            0 => '.png',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.gif',
            4 => '.bmp',
            5 => '.flv',
            6 => '.swf',
            7 => '.mkv',
            8 => '.avi',
            9 => '.rm',
            10 => '.rmvb',
            11 => '.mpeg',
            12 => '.mpg',
            13 => '.ogg',
            14 => '.ogv',
            15 => '.mov',
            16 => '.wmv',
            17 => '.mp4',
            18 => '.webm',
            19 => '.mp3',
            20 => '.wav',
            21 => '.mid',
            22 => '.rar',
            23 => '.zip',
            24 => '.tar',
            25 => '.gz',
            26 => '.7z',
            27 => '.bz2',
            28 => '.cab',
            29 => '.iso',
            30 => '.doc',
            31 => '.docx',
            32 => '.xls',
            33 => '.xlsx',
            34 => '.ppt',
            35 => '.pptx',
            36 => '.pdf',
            37 => '.txt',
            38 => '.md',
            39 => '.xml',
        ],
        'imageManagerActionName' => 'imageList',
        'imageManagerListPath' => '/data/attachment/ueditor/',
        'imageManagerListSize' => 20,
        'imageManagerUrlPrefix' => '',
        'imageManagerInsertAlign' => 'none',
        'imageManagerAllowFiles' => [
            0 => '.png',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.gif',
            4 => '.bmp',
        ],
        'fileManagerActionName' => 'fileList',
        'fileManagerListPath' => '/data/attachment/ueditor/',
        'fileManagerUrlPrefix' => '',
        'fileManagerListSize' => 20,
        'fileManagerAllowFiles' => [
            0 => '.png',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.gif',
            4 => '.bmp',
            5 => '.flv',
            6 => '.swf',
            7 => '.mkv',
            8 => '.avi',
            9 => '.rm',
            10 => '.rmvb',
            11 => '.mpeg',
            12 => '.mpg',
            13 => '.ogg',
            14 => '.ogv',
            15 => '.mov',
            16 => '.wmv',
            17 => '.mp4',
            18 => '.webm',
            19 => '.mp3',
            20 => '.wav',
            21 => '.mid',
            22 => '.rar',
            23 => '.zip',
            24 => '.tar',
            25 => '.gz',
            26 => '.7z',
            27 => '.bz2',
            28 => '.cab',
            29 => '.iso',
            30 => '.doc',
            31 => '.docx',
            32 => '.xls',
            33 => '.xlsx',
            34 => '.ppt',
            35 => '.pptx',
            36 => '.pdf',
            37 => '.txt',
            38 => '.md',
            39 => '.xml',
        ],
    ];

    final public function config(): string
    {
        return json_encode($this->config, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    abstract public function uploadImage();

    abstract public function uploadFile();

    abstract public function imageList();

    abstract public function fileList();

    public function catcherImage()
    {

    }

}
