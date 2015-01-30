<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $goods_id
 * @property integer $cat_id
 * @property string $goods_name
 * @property integer $goods_number
 * @property integer $goods_price
 * @property string $goods_desc
 * @property string $goods_img
 * @property integer $goods_status
 * @property integer $goods_addtime
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'goods_number', 'goods_price', 'goods_status', 'goods_addtime'], 'integer'],
            [['goods_desc'], 'string'],
            [['goods_name', 'goods_img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'cat_id' => 'Cat ID',
            'goods_name' => 'Goods Name',
            'goods_number' => 'Goods Number',
            'goods_price' => 'Goods Price',
            'goods_desc' => 'Goods Desc',
            'goods_img' => 'Goods Img',
            'goods_status' => 'Goods Status',
            'goods_addtime' => 'Goods Addtime',
        ];
    }
}
