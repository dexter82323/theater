<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "show".
 *
 * @property int $id_show
 * @property string|null $title
 * @property int|null $id_genre
 * @property string|null $date_show
 * @property string|null $duration
 * @property int|null $id_director
 * @property int|null $id_troup
 * @property int|null $id_music_group
 * @property int|null $id_decor
 *
 * @property Genre $genre
 * @property MusicGroup $musicGroup
 * @property Troup $troup
 * @property Director $director
 * @property Decor $decor
 * @property Ticket[] $tickets
 */
class Show extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'show';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_genre', 'id_director', 'id_troup', 'id_music_group', 'id_decor'], 'integer'],
            [['date_show'], 'safe'],
            [['title', 'duration'], 'string', 'max' => 45],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['id_genre' => 'id_genre']],
            [['id_music_group'], 'exist', 'skipOnError' => true, 'targetClass' => MusicGroup::className(), 'targetAttribute' => ['id_music_group' => 'id_music_group']],
            [['id_troup'], 'exist', 'skipOnError' => true, 'targetClass' => Troup::className(), 'targetAttribute' => ['id_troup' => 'id_troup']],
            [['id_director'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['id_director' => 'id_director']],
            [['id_decor'], 'exist', 'skipOnError' => true, 'targetClass' => Decor::className(), 'targetAttribute' => ['id_decor' => 'id_decor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_show' => 'Id Show',
            'title' => 'Title',
            'id_genre' => 'Id Genre',
            'date_show' => 'Date Show',
            'duration' => 'Duration',
            'id_director' => 'Id Director',
            'id_troup' => 'Id Troup',
            'id_music_group' => 'Id Music Group',
            'id_decor' => 'Id Decor',
        ];
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id_genre' => 'id_genre']);
    }

    /**
     * Gets query for [[MusicGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusicGroup()
    {
        return $this->hasOne(MusicGroup::className(), ['id_music_group' => 'id_music_group']);
    }

    /**
     * Gets query for [[Troup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTroup()
    {
        return $this->hasOne(Troup::className(), ['id_troup' => 'id_troup']);
    }

    /**
     * Gets query for [[Director]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['id_director' => 'id_director']);
    }

    /**
     * Gets query for [[Decor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDecor()
    {
        return $this->hasOne(Decor::className(), ['id_decor' => 'id_decor']);
    }

    /**
     * Gets query for [[Tickets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['id_show' => 'id_show']);
    }
}
