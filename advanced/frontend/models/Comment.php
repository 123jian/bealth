<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $com_id
 * @property string $uname
 * @property integer $goods_id
 * @property string $content
 * @property integer $com_time
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uname', 'goods_id', 'content', 'com_time'], 'required'],
            [['goods_id', 'com_time'], 'integer'],
            [['content'], 'string'],
            [['uname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'com_id' => 'Com ID',
            'uname' => 'Uname',
            'goods_id' => 'Goods ID',
            'content' => 'Content',
            'com_time' => 'Com Time',
        ];
    }
}
