<?php
class cities extends database
{
    public $id;
    public $zipcode;
    public $name;
    private $db;

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function selectCitiesList()
    {
        $query = 'SELECT id, zipcode, name 
        FROM cities
        WHERE zipcode LIKE :zipcode;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':zipcode', $this->zipcode . '%', PDO::PARAM_STR);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
}
