<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\mysql;
use yii\db\Query;

class DataBase extends ActiveRecord
{
    public string $link;
    public static function tableName()
    {
        return 'new_db';
    }
}

class BaseData1 extends ActiveRecord {
    public  function getPerson(){
        return $this->hasMany(DataBase::class,['car_id'=>'person_id'])||$this->hasMany(DataBase::class,['work_id'=>'person_id']);
    }
}

class BaseData2 extends ActiveRecord{
    public  function getCar(){
        return $this->hasMany(DataBase::class,['person_id'=>'car_id'])||$this->hasMany(DataBase::class,['person_id'=>'work_id']);
    }
}

class BaseData3 extends  ActiveRecord{
    public  function BD2(){
        return $this->hasMany(DataBase::class,['work_id'=>'person_id'])||$this->hasMany(DataBase::class,['work_id'=>'car_id']);
    }
}