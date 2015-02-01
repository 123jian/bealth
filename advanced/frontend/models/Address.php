<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $aid
 * @property integer $uid
 * @property integer $country
 * @property integer $province
 * @property integer $city
 * @property integer $county
 * @property integer $mobile
 * @property integer $phone
 * @property string $address
 * @property string $email
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
            [['uid', 'country', 'province', 'city', 'county', 'mobile', 'address'], 'required'],
            [['uid', 'country', 'province', 'city', 'county', 'mobile', 'phone'], 'integer'],
            [['address', 'email'], 'string', 'max' => 100]
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
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'address' => 'Address',
            'email' => 'Email',
        ];
    }
}
