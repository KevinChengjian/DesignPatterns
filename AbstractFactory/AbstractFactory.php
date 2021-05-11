<?php

/**
 * Interface AbstractFactory
 */
interface AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA;

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB;
}

/**
 * Class ConcreteFactoryA
 */
class ConcreteFactoryA implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ProductAA();
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ProductBA();
    }
}


/**
 * Class ConcreteFactoryB
 */
class ConcreteFactoryB implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ProductAB();
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ProductBB();
    }
}


/**
 * Interface AbstractProductA
 */
interface AbstractProductA
{
    public function some(): string;
}

/**
 * Class ProductAA
 */
class ProductAA implements AbstractProductA
{
    /**
     * @return string
     */
    public function some(): string
    {
        return "AA some....\n";
    }
}

/**
 * Class ProductAB
 */
class ProductAB implements AbstractProductA
{
    /**
     * @return string
     */
    public function some(): string
    {
        return "AB some....\n";
    }
}


/**
 * Interface AbstractProductB
 */
interface AbstractProductB
{
    public function doSome(): string;
}


/**
 * Class ProductBA
 */
class ProductBA implements AbstractProductB
{
    /**
     * @return string
     */
    public function doSome(): string
    {
        return "BA do some...\n";
    }
}

/**
 * Class ProductBB
 */
class ProductBB implements AbstractProductB
{
    /**
     * @return string
     */
    public function doSome(): string
    {
        return "BB do some...\n";
    }
}


function Test(AbstractFactory $factory)
{
    echo $factory->createProductA()->some();
    echo $factory->createProductB()->doSome();
}

Test(new ConcreteFactoryA());
Test(new ConcreteFactoryB());