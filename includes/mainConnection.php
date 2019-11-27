
<?php
class mainConnection {
    const BR = '<br />';

    var $servername;
    var $dbname;
    var $searchboxresult;
    
    
    function getServerName()
    {
        return $this->servername;
    }
    
    function setServerName($serverN)
    {
        $this->servername = $serverN;
    }


    function getDatabaseName()
    {
        return $this->dbname;
    }
    
    function setDatabaseName($databaseN)
    {
        $this->dbname = $databaseN;
    }

    
    function getSearchBoxResult()
    {
        return $this->searchboxresult;
    }
    
    function setSearchBoxResult($searchResult)
    {
        $this->searchboxresult = $searchResult;
    }

    public function show_connection(){
           echo $this->getServerName().self::BR;
           echo $this->servername.self::BR;
           echo $this->getDatabaseName().self::BR;
           echo $this->dbname.self::BR;
           echo $this->getSearchBoxResult().self::BR;
           echo $this->searchboxresult.self::BR;
     }
}

$mainConnection = new mainConnection;
$mainConnection-> setServerName('localhost');
//$connection-> servername = $mainConnection->getServerName();
//$mainConnection-> dbname = 'swapbook';
$mainConnection-> setDatabaseName('swapbook');
//$mainConnection-> searchboxresult = 'successful';
$mainConnection-> setSearchBoxResult('successful');

$mainConnection->show_connection();

?>