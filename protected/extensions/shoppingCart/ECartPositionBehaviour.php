<?php

/**
 * position in the cart
 *
 * @author pirrat <mrakobesov@gmail.com>
 * @version 0.9
 * @package ShoppingCart
 *
 * Can be used with non-AR models.
 */
class ECartPositionBehaviour extends CActiveRecordBehavior {
     public $log;
     public $categories;
     public $uoptions = array();

    /**
     * Positions number
     * @var int
     */
    private $quantity = 0;
    /**
     * Update model on session restore?
     * @var boolean
     */
    private $refresh = true;

    /**
     * Position discount sum
     * @var float
     */
    private $discountPrice = 0.0;

    public function getUoptions() {
        return $this->uoptions;
    }
    
    public function setUoptions($newUoptions) {
        $this->uoptions = $newUoptions;
    }


    /**
     * Returns total price for all units of the position
     * @param bool $withDiscount
     * @return float
     *
     */
    public function getSumPrice($withDiscount = true) {
        $fullSum = $this->getOwner()->getPrice() * $this->quantity;
/*      $uoptions_sum = 0;
        foreach ($this->uoptions as $uoptions) {
            $uoptions = rtrim($uoptions, "s");
            $uoptions = str_replace("p", "+", $uoptions);
            $uoptions = str_replace("m", "-", $uoptions);
            //$uoptions = str_replace("s", ",", $uoptions);
            $uoptions = explode('s', $uoptions);
            foreach ($uoptions as $uoption){
                $delemiter = $operation = @$uoption[1];
                $uoption = explode($delemiter, $uoption);
                $uoptions_sum += (int)$uoption[1];
            }
        }
        //die($uoptions_sum);
        $fullSum += $uoptions_sum;*/
        if ($withDiscount)
            $fullSum -= $this->discountPrice;
        return $fullSum;
    }

    /**
     * Returns quantity.
     * @return int
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Updates quantity.
     *
     * @param int quantity
     */
    public function setQuantity($newVal) {
        $this->quantity = $newVal;
    }

    /**
     * Magic method. Called on session restore.
     */
    public function __wakeup() {
        if ($this->refresh === true)
            $this->getOwner()->refresh();
    }

    /**
     * If we need to refresh model on restoring session.
     * Default is true.
     * @param boolean $refresh
     */
    public function setRefresh($refresh) {
        $this->refresh = $refresh;
    }

    /**
     * Add $price to position discount sum
     * @param float $price
     * @return void
     */
    public function addDiscountPrice($price) {
        $this->discountPrice += $price;
    }

    /**
     * Set position discount sum
     * @param float $price
     * @return void
     */
    public function setDiscountPrice($price) {
        $this->discountPrice = $price;
    }
}
