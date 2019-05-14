<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poll_options".
 *
 * @property int $id
 * @property int $poll_id
 * @property string $name
 * @property string $created
 * @property string $modified
 * @property string $status
 *
 * @property Polls $poll
 * @property PollVotes[] $pollVotes
 */
class PollOptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poll_options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['poll_id', 'name', 'created', 'modified'], 'required'],
            [['poll_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['poll_id'], 'exist', 'skipOnError' => true, 'targetClass' => Polls::className(), 'targetAttribute' => ['poll_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'poll_id' => 'Poll ID',
            'name' => 'Name',
            'created' => 'Created',
            'modified' => 'Modified',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoll()
    {
        return $this->hasOne(Polls::className(), ['id' => 'poll_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollVotes()
    {
        return $this->hasMany(PollVotes::className(), ['poll_option_id' => 'id']);
    }
}
