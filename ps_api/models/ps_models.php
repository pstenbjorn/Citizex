<?php
class getElection
{
	public $election_id;
	public $election_date;
	public $jurisdiction;
	public $election_title;
	
	public function toArray() 
	{
		return array(
				'election_id' => $this->election_id,
				'election_date' => $this->election_date,
				'jurisdiction' => $this->jurisdiction,
				'election_title' => $this->election_title
		);		
	}
	
}

class getTheme {
	public $theme_id;
	public $theme_name;
	public $theme_title;
	public $theme_content;
	
	public function toView()
	{
		return array(
			'theme_id'=> $this->theme_id,
			'theme_name'=> $this->theme_name,
			'theme_title'=> $this->theme_title,
			'theme_content'=> $this->theme_content				
		);
	
	}
}

?>
