<?php namespace App\Interfaces;

Interface CounterInterface
{
    public function increment();
    public function decrement();
    public function getValue();
}