<?php
class get_election
{
	private $_params;

	public function __construct($params)
	{
		$this->_params = $params;
	}

	public function createAction()
	{
		//create a new todo item
	}

	public function readAction()
	{
		//read all the todo items
		$election = new getElection();
		$election->election_id = $this->_params['election_id'];
		$election->election_date = $this->_params['election_date'];
		$election->election_title = $this->_params['election_title'];
		$election->jurisdiction = $this->_params['jurisdiction'];
			
		return $election->toArray();
	}

	public function updateAction()
	{
		//update a todo item
	}

	public function deleteAction()
	{
		//delete a todo item
	}
}
?>