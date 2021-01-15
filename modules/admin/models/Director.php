<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property int $id_director
 * @property string|null $name_director
 * @property string|null $gender
 * @property int|null $age
 *
 * @property Show[] $shows
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name_director', 'gender'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_director' => 'Id Director',
            'name_director' => 'Name Director',
            'gender' => 'Gender',
            'age' => 'Age',
        ];
    }

    /**
     * Gets query for [[Shows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['id_director' => 'id_director']);
    }
}
