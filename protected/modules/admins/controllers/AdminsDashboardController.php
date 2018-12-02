<?php

class AdminsDashboardController extends Controller
{
    /**
     * @return array actions type list
     */
    public static function actionsType()
    {
        return array(
            'backend' => array(
                'index'
            )
        );
    }

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'checkAccess - index', // perform access control for CRUD operations
        );
    }

    public function actionIndex()
    {
        Yii::app()->getModule('contact');

        $messagesCriteria = new CDbCriteria();
        $messagesCriteria->compare('t.seen', 0);

        $statistics = [
            'messages' => ContactMessages::model()->count($messagesCriteria),
            'products' => Products::model()->count(Products::validQuery()),
            'projects' => Projects::model()->count(Projects::validQuery()),
        ];

        $this->render('index', compact('statistics'));
    }
}