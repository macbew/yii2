<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $email
 * @property string|null $date_create
 * @property string $pass
 * @property string|null $status
 */
class Userss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'pass'], 'required'],
            [['date_create'], 'safe'],
            [['first_name', 'last_name', 'email', 'pass', 'status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'имя',
            'last_name' => 'фамилия',
            'email' => 'адрес почты',
            'date_create' => 'дата создания',
            'pass' => 'пароль',
            'status' => 'статус',
        ];
    }
}
