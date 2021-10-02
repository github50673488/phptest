<?php

class Car
{
    /**
     * @param $seats
     * @param $doors
     * @param $engine
     * @param $brand
     */
    public function __construct($seats, $doors, $engine, $brand)
    {
        $this->seats = $seats;
        $this->doors = $doors;
        $this->engine = $engine;
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     * @return Car
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     * @return Car
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     * @return Car
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }
    const WHEELS = 4;   // 汽车都是4个轮子
    var $seats;         // 座位
    var $doors;         // 门
    var $engine;        // 发动机
    var $brand;         // 品牌
}