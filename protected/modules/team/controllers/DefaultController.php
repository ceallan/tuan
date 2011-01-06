<?php

class DefaultController extends Controller
{
    public function init()
	{
		$this->layout = $this->module->layout;
	}

	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionAbc()
	{
		echo 111;exit;
	}
}