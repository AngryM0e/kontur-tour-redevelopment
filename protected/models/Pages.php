<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property integer $url
 * @property string $meta_title
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $text
 * @property integer $sort_num
 * @property integer $leftm_sort
 * @property integer $disp
 */
class Pages extends CActiveRecord
{
        public $disp;
        public $disp_left;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pages the static model class
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
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('meta_title, url, title, description, keywords, text', 'required'),
			array('meta_title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id,url, meta_title, title, description, keywords, text, sort_num, disp, disp_left', 'safe', 'on'=>'search'),
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
            'url'=> 'Адрес страницы',
			'meta_title' => 'TITLE: Заголовок страницы',
			'title' => 'Заголовок',
			'description' => 'meta: Описание',
			'keywords' => 'meta: Ключевые',
			'text' => 'Основной текст',
            'sort_num' => 'Порядковый номер в меню',
            'leftm_sort' => 'Порядковый номер в левом меню',
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
        $criteria->order = "sort_num ASC";

		$criteria->compare('id',$this->id);
        $criteria->compare('url',$this->url);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('text',$this->text,true);
        $criteria->compare('sort_num',$this->sort_num,true);
        $criteria->compare('leftm_sort',$this->leftm_sort,true);
        $criteria->compare('disp',$this->disp,true);
        $criteria->compare('disp_left',$this->disp_left,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}