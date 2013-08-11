<?php

/**
 * This is the model class for table "job".
 *
 * The followings are the available columns in table 'job':
 * @property string $id
 * @property string $job_title
 * @property string $company_name
 * @property string $company_url
 * @property string $company_logo
 * @property string $description
 * @property string $minimum_qualification
 * @property string $desirable_qualifications
 * @property string $salary_currency
 * @property integer $salary_range_start
 * @property integer $salary_range_end
 * @property string $perks_offered
 * @property integer $active
 * @property string $date_updated
 */
class Job extends CActiveRecord
{
    public $company_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Job the static model class
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
		return 'job';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_title, company_name, company_logo, description, minimum_qualification, desirable_qualifications, salary_currency, salary_range_start, salary_range_end, perks_offered', 'required'),
			
                        array('salary_range_start, salary_range_end, active', 'numerical', 'integerOnly'=>true),
			array('job_title, company_name, company_url, company_logo', 'length', 'max'=>255),
                        array('company_logo','file','types'=>'jpg,gif,png'),
			array('salary_currency', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, job_title, company_name, company_url, company_logo, description, minimum_qualification, desirable_qualifications, salary_currency, salary_range_start, salary_range_end, perks_offered, active, date_updated', 'safe', 'on'=>'search'),
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
			'job_title' => 'Job Title',
			'company_name' => 'Company Name',
			'company_url' => 'Company Url',
			'company_logo' => 'Company Logo',
			'description' => 'Description',
			'minimum_qualification' => 'Minimum Qualification',
			'desirable_qualifications' => 'Desirable Qualifications',
			'salary_currency' => 'Salary Currency',
			'salary_range_start' => 'Salary Range Start',
			'salary_range_end' => 'Salary Range End',
			'perks_offered' => 'Perks Offered',
			'active' => 'Active',
			'date_updated' => 'Date Updated',
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
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_url',$this->company_url,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('minimum_qualification',$this->minimum_qualification,true);
		$criteria->compare('desirable_qualifications',$this->desirable_qualifications,true);
		$criteria->compare('salary_currency',$this->salary_currency,true);
		$criteria->compare('salary_range_start',$this->salary_range_start);
		$criteria->compare('salary_range_end',$this->salary_range_end);
		$criteria->compare('perks_offered',$this->perks_offered,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('date_updated',$this->date_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}