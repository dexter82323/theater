<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $id_actor
 * @property string|null $name_actor
 * @property string|null $gender
 * @property string|null $age
 * @property string|null $photo
 *
 * @property TroupActor[] $troupActors
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_actor', 'gender', 'age'], 'string', 'max' => 45],
            [['photo'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_actor' => 'Id Actor',
            'name_actor' => 'Name Actor',
            'gender' => 'Gender',
            'age' => 'Age',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[TroupActors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTroupActors()
    {
        return $this->hasMany(TroupActor::className(), ['id_actor' => 'id_actor']);
    }
}
