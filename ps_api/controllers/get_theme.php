<?php
class get_theme
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
		$theme = new getTheme();
		$theme->theme_id = $this->_params['theme_id'];
		$theme->theme_name = $this->_params['theme_name'];
		$theme->theme_title = $this->_params['theme_title'];
		$theme->theme_content = $this->_params['theme_content'];
			
		return $theme->toView();
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