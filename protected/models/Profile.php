<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property string $phone
 * @property string $gender
 * @property string $date_of_birth
 * @property string $highest_qualification
 * @property string $current_employer
 * @property string $personal_site
 * @property string $linkedin_profile_url
 * @property string $uploaded_cv_name
 * @property string $description
 * @property string $date_update
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Profile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profile the static model class
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
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, name, phone, gender, date_of_birth, highest_qualification, current_employer, personal_site, linkedin_profile_url, uploaded_cv_name, description, date_update', 'required'),
			array('user_id, phone', 'length', 'max'=>10),
			array('name', 'length', 'max'=>255),
			array('gender', 'length', 'max'=>6),
			array('highest_qualification, personal_site, linkedin_profile_url, uploaded_cv_name', 'length', 'max'=>200),
			array('current_employer', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, name, phone, gender, date_of_birth, highest_qualification, current_employer, personal_site, linkedin_profile_url, uploaded_cv_name, description, date_update', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'name' => 'Name',
			'phone' => 'Phone',
			'gender' => 'Gender',
			'date_of_birth' => 'Date Of Birth',
			'highest_qualification' => 'Highest Qualification',
			'current_employer' => 'Current Employer',
			'personal_site' => 'Personal Site',
			'linkedin_profile_url' => 'Linkedin Profile Url',
			'uploaded_cv_name' => 'Uploaded Cv Name',
			'description' => 'Description',
			'date_update' => 'Date Update',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('highest_qualification',$this->highest_qualification,true);
		$criteria->compare('current_employer',$this->current_employer,true);
		$criteria->compare('personal_site',$this->personal_site,true);
		$criteria->compare('linkedin_profile_url',$this->linkedin_profile_url,true);
		$criteria->compare('uploaded_cv_name',$this->uploaded_cv_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date_update',$this->date_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}