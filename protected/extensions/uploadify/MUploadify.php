<?php
class MUploadify extends CInputWidget{
    private $_options=array();
    private $_name;
    private $_id;
    public $sessionKey='SESSION_ID';
    public $uploadButton;
    public $uploadButtonOptions=array();
    public $uploadButtonTagname='a';
    public $uploadButtonText='Загрузить файл на сервер';
    private $_basePath;
    /**
     * register the required scripts and style
     */
    function init(){
        Yii::app()->getClientScript()
            ->registerCoreScript('jquery')
            ->registerScriptFile($this->getBaseUrl().'/swfobject.js',CClientScript::POS_END)
            ->registerScriptFile($this->getBaseUrl().'/jquery.uploadify.v2.1.4.js',CClientScript::POS_END)
            ->registerCssFile($this->getBaseUrl().'/uploadify.css');
        
        return parent::init();
    }
    function run(){
		
        $this->defineNameId();        
        $this->setBaseOptions();
        
		if($this->hasModel())
			echo CHtml::activeFileField($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::fileField($this->_name,$this->value,$this->htmlOptions);
        
        if($this->uploadButton===true || ($this->uploadButton===null && (!isset($this->_options['auto']) || $this->_options['auto']==false)))
            echo $this->createUploadButton();
        
        Yii::app()->getClientScript()->registerScript(get_class($this).'-'.$this->getInputId(),
            "$('#{$this->inputId}').uploadify(".CJavaScript::encode($this->_options).");"
        ,CClientScript::POS_END);
    }
    /**
     * @return string the url to the uploadify assets folder 
     */
    function getBaseUrl(){
        if($this->_basePath===null)
            $this->_basePath=Yii::app()->getAssetManager()->publish(dirname(__FILE__).DIRECTORY_SEPARATOR.'assets');
        return $this->_basePath;
    }
    /**
     * define the default options of uploadify
     * be sure that user can override these options
     * 
     * @return void
     */
    protected function setBaseOptions(){
        $this->_options=array_merge(array(
            'script'=>Yii::app()->getController()->createUrl(''),
            'uploader'=>$this->getBaseUrl().'/uploadify.swf',
            'expressInstall'=>$this->getBaseUrl().'/expressInstall.swf',
            'cancelImg'=>$this->getBaseUrl().'/cancel.png',
            'fileDataName'=>$this->hasModel() ? get_class($this->model)."[{$this->attribute}]" : $this->getInputName(),
            'buttonText'=>Yii::t('application','Select file'),
            //'buttonImg'=>'/cancel.png',
            'scriptData'=>array($this->getInputName()=>' '),
            'folder'=>$this->getBaseUrl()
        ),$this->_options);
        
        $this->_options['scriptData'][$this->sessionKey]=session_id();
    }
    
    /**
     * creates the button to trigger the upload
     * 
     * @return string
     */
    protected function createUploadButton(){
        if(!isset($this->uploadButtonOptions['onclick']))
            $this->uploadButtonOptions['onclick']="javascript:$('#{$this->inputId}').uploadifyUpload()";
        if(!isset($this->uploadButtonOptions['href']))
            $this->uploadButtonOptions['href']='#';
        return CHtml::tag(
            $this->uploadButtonTagname,
            $this->uploadButtonOptions,
            $this->uploadButtonText
        );
    }
    /**
     * override defaults __get method to allow get options easier
     * 
     * @param mixed $name
     * @return mixed
     */
    function __get($name){
        try{
            return parent::__get($name);
        }catch(exception $e){
            if(isset($this->_options[$name]))
                return $this->_options[$name];
            throw $e;
        }
    }
    /**
     * override defaults __set method to allow set options easier
     * 
     * @param mixed $name
     * @param mixed $value
     * @return mixed
     */
    function __set($name,$value){
        try{
            return parent::__set($name,$value);
        }catch(exception $e){
            return $this->_options[$name]=$value;
        }
    }
    /**
     * the id of the input
     * 
     * @return string
     */
    protected function getInputId(){
        if($this->_id===null)
            $this->defineNameId();
        return $this->_id;
    }
    /**
     * the name of the input
     * 
     * @return string
     */
    protected function getInputName(){
        if($this->_name===null)
            $this->defineNameId();
        return $this->_name;
    }
    /**
     * set the name and id of the input
     * 
     * @return void
     */
    protected function defineNameId(){
        list($name,$id)=$this->resolveNameID();
        $this->_id=$this->htmlOptions['id']=$id;
		$this->_name=$this->htmlOptions['name']=$name;
    }
    /**
     * An object containing name/value pairs with additional information that should be sent to the back-end script when processing a file upload.
     * The data is json encoded and can be later retrieved by json decoding $_POST['attribute'] or $_POST['model']['attribute'] 
     * 
     * @param mixed $value
     * @return void
     */
    function setScriptData($value){
        $this->_options['scriptData'][$this->getInputName()]=CJSON::encode($value);
    }
    /**
     * An object containing name/value pairs with additional information that should be sent to the back-end script when processing a file upload.
     * The data is json encoded and can be later retrieved by json decoding $_POST['attribute'] or $_POST['model']['attribute']
     * 
     * @return string the option scriptData 
     */
    function getScriptData(){
        return CJSON::decode($this->_options['scriptData'][$this->getInputName()]);
    }
    /**
     * The path to the back-end script that will process the file uploads.
     * The path can be either an array or a string. see CHtml::normalizeUrl
     * 
     * @param mixed $value
     * @return void
     */
    function setScript($value){
        $this->_options['script']=CHtml::normalizeUrl($value);
    }
    /**
     * The path to the back-end script that checks for pre-existing files on the server.
     * The path can be either an array or a string. see CHtml::normalizeUrl
     * 
     * @param mixed $value
     * @return void
     */
    function setCheckScript($value){
        $this->_options['checkScript']=CHtml::normalizeUrl($value);
    }
}