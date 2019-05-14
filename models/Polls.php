<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polls".
 *
 * @property int $id
 * @property string $subject
 * @property string $created
 * @property string $modified
 * @property string $status
 *
 * @property PollOptions[] $pollOptions
 * @property PollVotes[] $pollVotes
 */
class Polls extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'polls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject', 'created', 'modified'], 'required'],
            [['created', 'modified'], 'safe'],
            [['status'], 'string'],
            [['subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'Subject',
            'created' => 'Created',
            'modified' => 'Modified',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollOptions()
    {
        return $this->hasMany(PollOptions::className(), ['poll_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollVotes()
    {
        return $this->hasMany(PollVotes::className(), ['poll_id' => 'id']);
    }
}
