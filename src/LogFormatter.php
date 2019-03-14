<?php

namespace Lucasrolff\Log;

class LogFormatter
{
    /**
     * 自定义日志实例
     *
     * @param  \Illuminate\Log\Logger $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new JsonFormatter());
        }
    }
}