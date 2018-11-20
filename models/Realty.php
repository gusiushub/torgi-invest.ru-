<?php

namespace app\models;

//use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "realty".
 *
 * @property int $id
 * @property string $address
 * @property string $description
 * @property string $img
 */
class Realty extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'realty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'description', 'img'], 'required'],
            [['address', 'description', 'img'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }
}
