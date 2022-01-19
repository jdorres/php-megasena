<?php 

use PHPUnit\Framework\TestCase;
use MegaSolid\Jogo;

class JogoTest extends TestCase
{
    protected function setUp(): void
    {
        $this->jogo = new Jogo();    
    }

    public function testMakeJogoMustReturnArray()
    {
        $this->assertIsArray($this->jogo->makeJogo());
    }

    public function testMakeJogoMustReturnSixItens()
    {
        $result = $this->jogo->makeJogo();
        $this->assertEquals(6, count($result));
    }

    public function testMakeJogoAllItensAreNumeric()
    {
        $result = $this->jogo->makeJogo();

        foreach($result as $item){
            $this->assertTrue(is_numeric($item));
        }
    }

    //representados por dois digitos
}
