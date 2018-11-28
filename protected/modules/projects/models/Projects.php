<?php

/**
 * This is the model class for table "{{products}}".
 *
 * The followings are the available columns in table '{{products}}':
 * @property string $id
 * @property string $title
 * @property string $code
 * @property string $max_size
 * @property string $image
 * @property string $date
 * @property string $cat_id
 * @property integer $type
 *
 * The followings are the available model relations:
 * @property ProductCategories $cat
 */
class Projects extends CActiveRecord
{
    const TYPE_PRODUCT = 0;
    const TYPE_PROJECT = 1;

    public static $typeLabels = [
        self::TYPE_PRODUCT => 'محصول',
        self::TYPE_PROJECT=> 'پروژه',
    ];
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{products}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('date', 'default', 'value' => time(), 'on' => 'insert'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('title, image', 'length', 'max'=>255),
			array('code, max_size', 'length', 'max'=>128),
			array('date', 'length', 'max'=>20),
			array('cat_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, code, max_size, image, date, cat_id, type', 'safe', 'on'=>'search'),
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
			'cat' => array(self::BELONGS_TO, 'ProductCategories', 'cat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'شناسه',
			'title' => 'عنوان',
			'code' => 'کد',
			'max_size' => 'ابعاد',
			'image' => 'تصویر',
			'date' => 'تاریخ ثبت',
			'cat_id' => 'دسته بندی',
			'type' => 'Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('max_size',$this->max_size,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('cat_id',$this->cat_id,true);
        $criteria->compare('type', self::TYPE_PROJECT);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * @return CDbCriteria
     */
    public static function validQuery($limit = false)
    {
        $criteria = (new CDbCriteria())->compare('type', self::TYPE_PROJECT);
        if ($limit)
            $criteria->limit = $limit;
        return $criteria;
    }
}
