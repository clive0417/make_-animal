<?php

//人科
abstract class AbstractHominidae
{
    abstract public function brains();

    abstract public function hands();

    abstract public function legs();

}

// 大猩猩在人科下面
class Gorilla extends AbstractHominidae
{
    public function brains()
    {
        echo "800cc";
    }

    public function hands()
    {
        echo "big";
    }

    public function legs()
    {
        echo "short";
    }

}

// 一隻大猩猩 實際動物
$one_gorilla=new Gorilla;
// 人類
class Homo extends AbstractHominidae
{
    public function brains()
    {
        echo "1500cc";
    }

    public function hands()
    {
        echo "small";
    }

    public function legs()
    {
        echo "long";
    }

}
// 
$takeshi=new Homo;
$nobita =new Homo;
$takeshi->brains();
$nobita->hands();


//$king_penguin->swim();


