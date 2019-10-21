<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epl_fixtures".
 *
 * @property int $id
 * @property string $home_team
 * @property string $away_team
 * @property string $match_time
 * @property string $match_date
 * @property string $match_tip
 * @property string $match_status
 * @property int $home_result
 * @property int $away_result
 */
class EplFixtures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'epl_fixtures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['match_time', 'match_date'], 'required'],
            [['match_time', 'match_date'], 'safe'],
            [['match_status', 'home_result', 'away_result'], 'integer'],
            [['home_team', 'away_team', 'match_tip'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'home_team' => 'Home Team',
            'away_team' => 'Away Team',
            'match_time' => 'Match Time',
            'match_date' => 'Match Date',
            'match_tip' => 'Match Tip',
            'match_status' => 'Match Status',
            'home_result' => 'Home Result',
            'away_result' => 'Away Result',
        ];
    }
}
