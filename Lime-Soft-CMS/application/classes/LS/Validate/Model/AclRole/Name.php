<?php

class LS_Validate_Model_AclRole_Name extends Zend_Validate
{

	public function __construct()
	{
		$this->addValidator(new Zend_Validate_StringLength(array( 'min' => 1, 'max' => 16 )));
	}

}
