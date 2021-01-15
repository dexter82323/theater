<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "hall".
 *
 * @property int $id_hall
 * @property int|null $amount_seats
 *
 * @property Ticket[] $tickets
 */
class Hall extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hall';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount_seats'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hall' => 'Id Hall',
            'amount_seats' => 'Amount Seats',
        ];
    }

    /**
     * Gets query for [[Tickets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['id_hall' => 'id_hall']);
    }
}
