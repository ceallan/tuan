<?php

class TeamModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'team.models.*',
			'team.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
            //return Yii::app()->user->checkAccess('admin') && parent::beforeControllerAction($controller, $action);
			return true;
		}
		else
			return false;
	}
}
