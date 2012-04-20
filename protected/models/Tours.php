<?php

/**
 * This is the model class for table "che_tours".
 *
 * The followings are the available columns in table 'che_tours':
 * @property integer $id
 * @property integer $season
 * @property integer $num
 * @property integer $trnmt
 * @property integer $trnmt_ssn
 * @property string $descrip
 * @property integer $state
 * @property string $notes
 */
class Tours extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tours the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'che_tours';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, season, num, trnmt, trnmt_ssn, descrip', 'required'),
			array('id, season, num, trnmt, trnmt_ssn, state', 'numerical', 'integerOnly'=>true),
			array('descrip, notes', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, season, num, trnmt, trnmt_ssn, descrip, state, notes', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'season' => 'Season',
			'num' => 'Num',
			'trnmt' => 'Trnmt',
			'trnmt_ssn' => 'Trnmt Ssn',
			'descrip' => 'Descrip',
			'state' => 'State',
			'notes' => 'Notes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('season',$this->season);
		$criteria->compare('num',$this->num);
		$criteria->compare('trnmt',$this->trnmt);
		$criteria->compare('trnmt_ssn',$this->trnmt_ssn);
		$criteria->compare('descrip',$this->descrip,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}