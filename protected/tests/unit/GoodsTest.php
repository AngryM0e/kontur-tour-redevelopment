<?php
class GoodsTest extends CDbTestCase{
    private $product;
    public function __construct__(){
        $this->product = Goods::model()->findByPk(1);
    }
    public $fixtures = array(
        'goods'=>'Goods',
    );
    public function testRecord(){
        print __METHOD__;
        $product = Goods::model()->findByPk(1);
        $this->assertEquals($this->goods[0]['url'],$product->url);
        $this->assertEquals($this->goods[0]['category'],$product->category);
        $this->assertEquals($this->goods[0]['articul'],$product->articul);
        $this->assertEquals($this->goods[0]['name'],$product->name);
        $this->assertEquals($this->goods[0]['amount'],$product->amount);
        $this->assertEquals($this->goods[0]['description'],$product->description);
        $this->assertEquals($this->goods[0]['min_order'],$product->min_order);
        $this->assertFalse(is_array($this->goods[0]['promo']));
        $this->assertEquals($this->goods[0]['pictures'],$product->pictures);
        $this->assertFalse(is_array($this->goods[0]['options']));
        $this->assertEquals($this->goods[0]['recomended'],$product->recomended);
        $this->assertEquals($this->goods[0]['title'],$product->title);
        $this->assertEquals($this->goods[0]['meta_keywords'],$product->meta_keywords);
        $this->assertEquals($this->goods[0]['meta_description'],$product->meta_description);
        $this->assertEquals($this->goods[0]['disp'],$product->disp);
        $this->assertEquals($this->goods[0]['type_id'],$product->type_id);
        $this->assertEquals($this->goods[0]['note'],$product->note);
        $this->assertEquals($this->goods[0]['rating'],$product->rating);
        $this->assertEquals($this->goods[0]['leader'],$product->leader);
        $this->assertEquals($this->goods[0]['popularity'],$product->popularity);
        $this->assertEquals($this->goods[0]['cdate'],$product->cdate);
    }
    public function testGetPictureByIdx(){
        Yii::import("application.modules.Shop.controllers.GoodsController");
        $gc = new GoodsController(1);
        $pictures = serialize($this->product['pictures']);
        $pic = $gc->getPictureByIdx($pictures,0);
        $this->assertEquals($pic,null);
    }
}