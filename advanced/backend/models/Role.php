<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $rname
 * @property integer $status
 * @property integer $node_cat
 * @property integer $node_goods
 * @property integer $node_role
 * @property integer $node_user
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rname'], 'required'],
            [['status', 'node_cat', 'node_goods', 'node_role', 'node_user'], 'integer'],
            [['rname'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rname' => 'Rname',
            'status' => 'Status',
            'node_cat' => 'Node Cat',
            'node_goods' => 'Node Goods',
            'node_role' => 'Node Role',
            'node_user' => 'Node User',
        ];
    }
}
