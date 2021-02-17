<?php

//鳥綱
abstract class AbstractAves
{
    abstract public function eyes();

    abstract public function wings();

    abstract public function chirp();

}
//飛 trait 
trait FlyTrait
{
    public function fly()
    {
        echo "fly";
    }
}

//游泳trait
trait SwimTrait
{
    public function swim()
    {
        echo "swim";
    }
}
// 企鵝科 在鳥綱的下面
class Spheniscidae extends AbstractAves
{
    use SwimTrait;
    public function eyes()
    {
        echo "look";
    }

    public function wings()
    {
        echo "wave";
    }

    public function chirp()
    {
        echo "bee~";
    }

}

// 國王企鵝 實際物種
$king_penguin=new Spheniscidae;
// 鷹科
class Accipitridae extends AbstractAves
{
    // 會飛
    use FlyTrait;
    //有眼睛
    public function eyes()
    {
        echo "look_vary_long";
    }
    //有翅嗙
    public function wings()
    {
        echo "wave_fast";
    }

    public function chirp()
    {
        echo "poooooooo";
    }

}
// 
$elanus_leucurus=new Accipitridae; 
$elanus_leucurus->fly();


//$king_penguin->swim();


