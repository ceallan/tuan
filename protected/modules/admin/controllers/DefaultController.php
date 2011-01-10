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
		$this->render('index');
	}
}