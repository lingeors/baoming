<?php
/**
 * 对数据库操作进行简单的封装，供其他文件使用
 * 方便修改和添加
 */


//获取所有报名者的信息
function getAllData($db)
{
    $sql = 'select * from baoming';
    $re = $db->getAllData($sql);
    return $re;
}

function getCount($db)
{
    return $db->getCount('baoming');
}
