<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "music_group".
 *
 * @property int $id_music_group
 * @property string|null $title
 * @property string|null $cover
 *
 * @property MusicMusician[] $musicMusicians
 * @property Show[] $shows
 */
class MusicGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'music_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 45],
            [['cover'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_music_group' => 'Id Music Group',
            'title' => 'Title',
            'cover' => 'Cover',
        ];
    }

    /**
     * Gets query for [[MusicMusicians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusicMusicians()
    {
        return $this->hasMany(MusicMusician::className(), ['id_music_group' => 'id_music_group']);
    }

    /**
     * Gets query for [[Shows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['id_music_group' => 'id_music_group']);
    }
}
