<?php

class DefaultController extends Controller
{
    public function init()
	{
        parent::init();
		$this->layout = $this->module->layout;
	}

	public function actionIndex()
	{
        //var_dump(CHtml::encode($_GET['locate']));
		$this->render('index',array('locate'=>1111111));
	}
}