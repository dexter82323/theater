<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "musician".
 *
 * @property int $id_musician
 * @property string|null $name_musician
 * @property string|null $gender
 * @property int|null $age
 * @property string|null $photo
 *
 * @property MusicMusician[] $musicMusicians
 */
class Musician extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'musician';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name_musician', 'gender'], 'string', 'max' => 45],
            [['photo'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_musician' => 'Id Musician',
            'name_musician' => 'Name Musician',
            'gender' => 'Gender',
            'age' => 'Age',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[MusicMusicians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusicMusicians()
    {
        return $this->hasMany(MusicMusician::className(), ['id_musician' => 'id_musician']);
    }
}
