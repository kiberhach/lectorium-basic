<?php

namespace app\controllers;

class MainpageController extends \yii\web\Controller
{
	public $layout = 'test2';
	
    public function actionIndex()
    {
        return $this->render('index');
    }

}
/*
Здравствуйте, меня зовут Хидирхан, я научный сотрудник в московском политехническом университете. 
Около месяца назад мы отправляли в вашу компанию анкету по импортозамещению научного оборудования.
На данном этапе мы готовим отчет в министерство образования России по вопросу импортозамещения научного оборудорвания,
хотелось бы узнать ждать от вас ответа или нет. 

где хотим отразить мнение вашей 
компании по проблемам импортозамещения научного оьорудования, а также мерам поддержки, которые должны приниматься со стороны государства данной отрасли,
*/