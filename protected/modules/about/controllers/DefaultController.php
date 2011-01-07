<?php

class DefaultController extends Controller
{
    public function init()
	{
		$this->layout = $this->module->layout;
	}

	public function actionIndex()
	{
        $t = Yii::app()->getRequest()->getParam('t');
		if($t) {
            $doAction = 'action'.strtoupper($t[0]).strtolower(substr($t, 1));
            $this->$doAction();
        }
		$this->render('index');
	}

	public function actionContact()
	{
        echo 222;exit;
		$this->render('contact');
	}
}