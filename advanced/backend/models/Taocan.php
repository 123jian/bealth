<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taocan".
 *
 * @property integer $id
 * @property integer $goods_id
 * @property string $taocan_id
 * @property string $yprice
 * @property string $xprice
 * @property string $zhe
 */
class Taocan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taocan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id'], 'integer'],
            [['taocan_id', 'yprice', 'xprice', 'zhe'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'taocan_id' => 'Taocan ID',
            'yprice' => 'Yprice',
            'xprice' => 'Xprice',
            'zhe' => 'Zhe',
        ];
    }
}
