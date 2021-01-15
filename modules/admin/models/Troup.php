<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "troup".
 *
 * @property int $id_troup
 * @property string|null $title
 * @property string|null $head
 *
 * @property Show[] $shows
 * @property TroupActor[] $troupActors
 */
class Troup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'troup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'head'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_troup' => 'Id Troup',
            'title' => 'Title',
            'head' => 'Head',
        ];
    }

    /**
     * Gets query for [[Shows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['id_troup' => 'id_troup']);
    }

    /**
     * Gets query for [[TroupActors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTroupActors()
    {
        return $this->hasMany(TroupActor::className(), ['id_troup' => 'id_troup']);
    }
}
