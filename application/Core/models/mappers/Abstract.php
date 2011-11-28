<?php 

abstract class Core_Model_Mapper_Abstract
{
    
    protected $_dbTable = null;

    public function find($id)
    {
        $rowSet = $this->_getDbTable()->find($id);
        if (!$row = $rowSet->current()){
            throw new Zend_Db_Table_Exception('Enregistrement inexistant', 404);
        }
        return $this->_rowToObject($row);
    }
    
    public function getList()
    {
        $rowSet = $this->_getDbTable()->fetchAll();
        $objectList = array();
        foreach ($rowSet as $row) {
           $objectList[] = $this->_rowToObject($row);
        }
        return $objectList;
    }
    
    abstract protected function _rowToObject(Zend_Db_Table_Row $row);
    
    protected function _getDbTable()
    {
        if (null === $this->_dbTable) {
            $className = str_replace('Mapper', 'DbTable', get_class($this));
            $this->_dbTable = new $className;
        }
        return $this->_dbTable;
    }
    
}