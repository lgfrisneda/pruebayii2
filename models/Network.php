<?php

namespace app\models;

class Network extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'networks';
    }

    public function upload()
    {
        $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
        return true;
    }

}