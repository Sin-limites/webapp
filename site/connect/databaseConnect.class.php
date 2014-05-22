<?php


//MYSQL CONNECTION CLASS


class databaseConnect {
    
    protected $host = null;
    protected $user = null;
    protected $pw = null;
    protected $db = null;
    protected $connection = null;
//    protected $tabel = null;
    protected $dsn;
    
    
    public function __construct($host=false, $user=false, $pw=false, $db=false)
    {        
        if($host && $user && $pw && $db /*&& $tabel*/){
            $this->host = $host;
            $this->user = $user;
            $this->pw = $pw;
            $this->db = $db;
//            $this->tabel = $tabel;
            $this->dsn = 'mysql:dbname='.$db.';'.$host;
        }
    }
    
    
    public function connect()
    {
        $this->connection = mysql_connect($this->host, $this->user, $this->pw);
        $select = mysql_select_db($this->db, $this->connection);
    }

  
    public function end()
    {
        mysql_close();
    }
    
}