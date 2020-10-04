<?php
include 'dbh.inc.php';
include 'Complain.inc.php';
include_once 'observable.inc.php';
class CollectionOfComplains extends Connection implements observable
{
    private $cntUnseen;
    private $cltOfCmls = array();
    /**
     * @var Admin
     */
    private $admin;

    public function __construct()
    {
        $this->cntUnseen = 0;
        $sql = "SELECT * FROM `complains`";
        $stmt = (new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        foreach ($results as $result) {
            array_push($this->cltOfCmls,new Complain($result['station'], $result['title'], $result['complain']));
        }
    }

    
    public function notify():void{
        if($this->admin instanceof Admin){
            $this->admin->update($this->cntUnseen);
        }
    }

    public function countUnseenComplains()
    {
        # return total number of unseen complains yet...
        $stmt = (new Connection)->connect()->prepare(" SELECT seen FROM complains WHERE seen = '0'");
        $stmt->execute();

        /* Return number of rows that were deleted */
        $cntUnseen =  $stmt->rowCount();
        if ($cntUnseen != $this->cntUnseen) {
            $this->notify();
            $this->cntUnseen = $cntUnseen;
        }
        return $cntUnseen;
    }


    public function getLast3complainAdmin()
    {
        # return last 3 complain from data database to display in header
        $sql = " SELECT * FROM complains
        WHERE seen = '0'  
        ORDER BY id DESC 
        LIMIT 3";
        $stmt = (new Connection)->connect()->prepare($sql);
        if($stmt->execute()){
        return $stmt->fetchAll();
        }
    }

    /**
     * Set the value of admin
     *
     * @param  Admin  $admin
     *
     * @return  self
     */ 
    public function setAdmin(Admin $admin):void
    {
        $this->admin = $admin;
    }
}
?>