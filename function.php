<?php

use AlonePhp\Mail\MailHelper;

/**
 * 发送邮件
 * @param array $arr
 * @return bool
 */
function alone_mail(array $arr): bool {
    return MailHelper::send($arr);
}