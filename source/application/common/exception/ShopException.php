<?php
/**
 * Created by PhpStorm.
 * User: zww
 * Date: 16/5/3
 * Time: 下午5:15.
 */

namespace app\common\exception;

use Exception;

class ShopException extends Exception
{
    public function __construct($errInfo)
    {
        if (is_array($errInfo)) {
            if (!array_key_exists('errNo', $errInfo)) {
                $errInfo = [
                    'errNo'  => $errInfo[0],
                    'errMsg' => $errInfo[1],
                ];
            }
        } elseif (is_string($errInfo)) {
            $errInfo = [
                'errNo'  => 10001,
                'errMsg' => $errInfo,
            ];
        }
        parent::__construct($errInfo['errMsg'], $errInfo['errNo']);
    }
}
