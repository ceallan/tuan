<?php

class IndexController extends Controller
{
    public function init()
	{
        parent::init();
		$this->layout = null;
	}

	public function actionIndex()
	{
        //var_dump($this);exit;
        $this->renderPartial('index');
		//$this->render('index');
	}
}