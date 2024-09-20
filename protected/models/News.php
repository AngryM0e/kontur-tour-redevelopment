<?php

class News extends CActiveRecord
{
   
	/**
	 * Returns the static model of the specified AR class.
	 * @return Donor the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, text', 'required'),
			//array('donor', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, page, title, meta_d, meta_k, text', 'safe', 'on'=>'search'),
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
			'name' => 'Название',
			'page' => 'Краткое описание',
			'title' => 'Заголовок',
            'meta_d' => 'Мета-данные',
            'meta_k' => 'Ключевые слова',
            'text' => 'Основной текст',
            'creation_date' => 'Дата',
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
		$criteria->compare('name',$this->name);
		$criteria->compare('page',$this->page);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('meta_d',$this->meta_d,true);
		$criteria->compare('meta_k',$this->meta_k);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('creation_date',$this->creation_date);


		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
   

        protected function beforeSave(){
        if(parent::beforeSave()){
            if($this->isNewRecord){
                $this->creation_date = date("Y-m-d");
            }
            return true;
        }else
        return false;
    }

}