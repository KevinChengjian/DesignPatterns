<?php

/**
 * Class Creator
 */
abstract class Creator
{
    /**
     * @return Product
     */
    abstract public function factoryMethod(): Product;

    /**
     * @return mixed
     */
    public function someOperation()
    {
        return $this->factoryMethod()->operation();
    }
}

/**
 * Class ConcreteCreatorA
 */
class ConcreteCreatorA extends Creator
{
    /**
     * @return Product
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProductA();
    }
}

/**
 * Class ConcreteCreatorB
 */
class ConcreteCreatorB extends Creator
{
    /**
     * @return Product
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProductB();
    }
}

/**
 * Interface Product
 */
interface Product
{
    public function operation();
}

/**
 * Class ConcreteProductA
 */
class ConcreteProductA implements Product
{
    /**
     * @return mixed
     */
    public function operation()
    {
        echo "ConcreteProductA\n";
    }
}


/**
 * Class ConcreteProductB
 */
class ConcreteProductB implements Product
{
    /**
     * @return mixed
     */
    public function operation()
    {
        echo "ConcreteProductB\n";
    }
}


/**
 * 测试
 *
 * @param Creator $creator
 * @return mixed
 */
function test(Creator $creator)
{
    return $creator->someOperation();
}


test(new ConcreteCreatorA());
test(new ConcreteCreatorB());















