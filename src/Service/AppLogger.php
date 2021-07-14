<?php

namespace App\Service;
use think\facade\Log;

class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINK_LOG = 'think_log';

    private $logger;

    public function __construct($type = self::TYPE_LOG4PHP)
    {
        if ($type == self::TYPE_LOG4PHP) {
            $this->logger = \Logger::getLogger("Log");
        }
        if ($type == self::TYPE_THINK_LOG){
            Log::init(
                [
                    'default'	=>	'file',
                    'channels'	=>	[
                        'file'	=>	[
                            'type'	=>	'file',
                            'path'	=>	'./logs/',
                        ],
                    ],
                ]
            );
            $this->logger = Log::instance();
        }
    }

    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}