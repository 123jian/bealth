<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $aid
 * @property integer $uid
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $county
 * @property integer $mobile
 * @property integer $phone
 * @property string $address
 * @property string $email
 * @property integer $status
 * @property string $name
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'country', 'province', 'city', 'county', 'mobiles', 'address', 'name'], 'required'],
            [['uid', 'mobiles', 'phones', 'status'], 'integer'],
            [['country', 'province', 'city', 'county'], 'string', 'max' => 11],
            [['address', 'email', 'name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'uid' => 'Uid',
            'country' => 'Country',
            'province' => 'Province',
            'city' => 'City',
            'county' => 'County',
            'mobile' => 'Mobiles',
            'phone' => 'Phones',
            'address' => 'Address',
            'email' => 'Email',
            'status' => 'Status',
            'name' => 'Name',
        ];
    }
}
