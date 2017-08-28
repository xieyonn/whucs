<?php
/**
 * 服务层异常
 *
 * @author: xieyong <qxieyongp@163.com>
 * @Date: 2017/8/26
 * @Time: 14:59
 */

namespace Library\Exception;

use Library\Core\Exception;

/**
 * Class ServiceException
 * @package Library\Exception
 */
class ServiceException extends Exception
{
    /**
     * @var array 范围 103000 ~ 104000
     */
    protected $map = [
        'SERVICE_LOG_NAME_NOT_SET' => ['code' => 103001, 'zh_cn' => '服务日志名未设置'],
    ];
}
