<?php

namespace Tests;

use Exercises\Cart\Cart;
use Exercises\Product\IProduct;
use Exercises\User\User;
use PHPUnit\Framework\TestCase;

class ExerciseFourTest extends TestCase
{
    private Cart $cart;

    public function setUp(): void
    {
        $user = $this->createStub(User::class);
        $this->cart = new Cart($user);
    }

    public function testIfGetsUserObject(): void
    {
        $this->assertInstanceOf(User::class, $this->cart->getUser());
    }

    public function testIfAddsAProduct(): void
    {
        $product = $this->createMock(IProduct::class);
        $this->assertTrue($this->cart->addProduct($product));
    }

    public function testIfRemovesAProduct(): void
    {
        $product = $this->createMock(IProduct::class);
        $product->method('getValue')
            ->willReturn(15.00);
        $product->method('getQuantity')
            ->willReturn(1);

        $this->cart->addProduct($product);

        $this->assertTrue($this->cart->removeProduct($product));
        $this->assertEquals(0.00, $this->cart->getTotalCartValue());
    }

    public function testIfUpdatesAProduct(): void
    {
        $product = $this->createMock(IProduct::class);
        $product->method('getValue')
            ->willReturn(15.00);
        $product->method('getQuantity')
            ->willReturnOnConsecutiveCalls(1, 2, 3);

        $this->cart->addProduct($product);
        $this->assertEquals(15.00, $this->cart->getTotalCartValue());

        $this->cart->updateProduct($product);
        $this->assertEquals(45.00, $this->cart->getTotalCartValue());
    }

    public function testIfUpdatesToZeroProduct(): void
    {
        $product = $this->createMock(IProduct::class);
        $product->method('getValue')
            ->willReturn(15.00);
        $product->method('getQuantity')
            ->willReturn(0);

        $this->cart->updateProduct($product);
        $this->assertCount(0, $this->cart->getProducts());
    }

    public function testIfItGetsProducts(): void
    {
        $product1 = $this->createMock(IProduct::class);
        $product2 = $this->createMock(IProduct::class);

        $this->cart->addProduct($product1);
        $this->cart->addProduct($product2);

        $this->assertEquals(2, count($this->cart->getProducts()));
    }

    public function testGetTotalCartValue(): void
    {
        $product = $this->createMock(IProduct::class);
        $product->method('getValue')
            ->willReturn(20.00);
        $product->method('getQuantity')
            ->willReturn(1);

        $this->cart->addProduct($product);

        $this->assertEquals(20.00, $this->cart->getTotalCartValue());
    }

}