<?php

namespace App;

class Custom
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function addCustom($store, $item) {
        $this->items['item'] = $item;
        $this->items['store'] = $store;
        $this->totalPrice = 'TBC';
        $this->totalQty++;
    }

    public function removeCustom() {
        $this->totalQty--;
        $this->totalPrice = 0;
        unset($this->items);
    }
}