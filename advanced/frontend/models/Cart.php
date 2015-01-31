<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property integer $cart_id
 * @property integer $uid
 * @property integer $goods_id
 * @property string $goods_name
 * @property integer $goods_price
 * @property integer $goods_number
 * @property integer $status
 * @property integer $addtime
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'goods_id', 'goods_name', 'goods_price', 'goods_number', 'status', 'addtime'], 'required'],
            [['uid', 'goods_id', 'goods_price', 'goods_number', 'status', 'addtime'], 'integer'],
            [['goods_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cart_id' => 'Cart ID',
            'uid' => 'Uid',
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_price' => 'Goods Price',
            'goods_number' => 'Goods Number',
            'status' => 'Status',
            'addtime' => 'Addtime',
        ];
    }
}
