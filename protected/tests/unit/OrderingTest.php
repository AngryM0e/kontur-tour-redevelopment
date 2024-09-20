<?php

class OrderingTest extends CTestCase{
    
    public function testGetDataProvider() {
        Yii::import("application.modules.Shop.controllers.OrderingController");
        $controller = new OrderingController(1);
        
        $this->assertTrue($controller->getDataProvider() instanceof CArrayDataProvider);
    }
    
}