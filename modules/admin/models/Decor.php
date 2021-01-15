<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "decor".
 *
 * @property int $id_decor
 * @property string|null $discription
 *
 * @property Show[] $shows
 * @property Supply[] $supplies
 */
class Decor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'decor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['discription'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_decor' => 'Id Decor',
            'discription' => 'Discription',
        ];
    }

    /**
     * Gets query for [[Shows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['id_decor' => 'id_decor']);
    }

    /**
     * Gets query for [[Supplies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['id_decor' => 'id_decor']);
    }
}
