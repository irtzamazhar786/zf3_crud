<?php

namespace Post\Model;

use Zend\Db\TableGateWay\TableGateWayInterface;

class PostTable
{
	protected $tableGateway;

	function __construct(TableGateWayInterface $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll(){
		return $this->tableGateway->select();
	}
}

?>
