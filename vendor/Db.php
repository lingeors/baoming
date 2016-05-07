<?php
/**
 * author: 信息部蓝伟滨
 * crete_time: 2016-03-11 16:06:08
 * version: 0.0.1;
 * descrition: 应组织部要求，对协会各自活动报名写一个报名录入系统和信息处理。
 * 主要功能为：报名信息输入，同步到数据库。所有数据包括数据库信息查看，修改。最后导出excel表格
 * 功能简单，数据处理基本安全，数据库处理暂时不封装。
 */


class Db
{
    protected static $_instance = null;
    protected $dbname = '';
    protected $dsn;
    protected $dbh;
    protected $dbtype;

    /**
     * 构造函数，设为私有，只在内部可以调用
     * @param [type] $dbtype   数据库类型
     * @param [type] $dbhost   [description]
     * @param [type] $dbname   [description]
     * @param [type] $dbpost   [description]
     * @param [type] $username [description]
     * @param [type] $pw       [description]
     * @param [type] $charset  [description]
     */
    private function __construct($dbtype, $dbhost, $dbname, $dbport, $username, $pw, $charset)
    {
        try {
            $this->dsn = $dbtype.':host='.$dbhost.';dbname='.$dbname.';port='.$dbport;
            $this->dbh = new PDO($this->dsn, $username, $pw);
            $this->dbh->exec('SET character_set_connection='.$charset.', character_set_results='.$charset.', character_set_client=binary');
        } catch (PDOExcetion $e) {
            $this->printError($e->getMessage());
        }
    }

    /**
     * 获取数据库连接实例
     * @param  [type] $dbtype   [description]
     * @param  [type] $dbhost   [description]
     * @param  [type] $dbname   [description]
     * @param  [type] $dbport   [description]
     * @param  [type] $username [description]
     * @param  [type] $pw       [description]
     * @param  [type] $charset  [description]
     * @return [type]           [description]
     */
    public static function getInstance($dbtype, $dbhost, $dbname, $dbport, $username, $pw, $charset)
    {
        if (static::$_instance === null) {
            static::$_instance = new self($dbtype, $dbhost, $dbname, $dbport, $username, $pw, $charset);
        }

        return static::$_instance;
    }


    protected function query($sql)
    {
        return $this->dbh->query($sql);
    }

    /**
     * 获取所有信息
     * @param  [type]  $sql   [description]
     * @param  boolean $debug [description]
     * @return [type]         [description]
     */
    public function getAllData($sql, $debug = false) 
    {
        if ($debug === false) {
            $recordset = $this->query($sql);
            $recordset->setFetchMode(PDO::FETCH_ASSOC);
            return $recordset->fetchAll();
        } else {
            $this->debug($sql);
        }
    }

    public function getSingleData($sql, $debug = false)
    {
        if ($debug === false) {
            $this->debug($sql);
        } else {
            $recordset = $this->query($sql);
            $recordset->setFetchMode(PDO::FETCH_ASSOC);
            return $recordset->fetch();
        }
    }   

    public function getCount($table)
    {
        $sql = "select * from {$table}";
        return $this->dbh->query($sql)->rowCount();
    }

    /**
     * 打印错误信息
     * @param  [type] $message 错误信息
     * @return [type]          [description]
     */
    protected function printError($message)
    {
        if (is_array($message)) {
            echo "<pre>";
            print_r($message);
        } else {
            echo "<font size='16px' color='red'>".$message."</font>";
        }
    }

    /**
     * 打印调试信息
     * @param  [type] $message [description]
     * @return [type]          [description]
     */
    protected function debug($message)
    {
        echo "<font size='16px' color='red'>".$message."</font>";
    }
}
    // $dns = "mysql:host=localhost;dbname=wuxie;port=3306";

