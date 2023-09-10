<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\mysql;
use yii\db\Query;

class DataBase extends DAO
{
    public string $link;
    public static function tableName()
    {
        return 'new_db';
    }
}