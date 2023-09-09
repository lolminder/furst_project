<?php

namespace app\controllers;

use app\models\DataBase;
use Yii;
use yii\web\Controller;

class DatabaseController extends Controller
{
    public function actionIndex()
    {

         Yii::$app->db->createCommand()->createTable('person',
            [
            'id' => 'fk',
            'name' => 'string',
            'age' => 'int',
            'hobby' => 'string'
        ]);
        Yii::$app->db->createCommand()->createTable('car',
            [
                'id' => 'fk',
                'name' => 'string',
                'age' => 'int',
                'power' => 'int'
            ]);

        Yii::$app->db->createCommand()->createTable('work',
            [
                'id' => 'fk',
                'name' => 'string',
                'age' => 'int',
                'cost' => 'int'
            ]);
        Yii::$app->db->createCommand('');
    }
}