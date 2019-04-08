<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testFindTitleName(){
        $title = new title();
        $titleList= $title->getAllTitle();

        $this->assertCount(6, $titleList);
    }
    public function testFindLastTitle(){
        $title = new title();
        $titleList= $title->getAllTitle();
//        $item= count($titleList);
        $this->assertContains('Professor',$titleList);
    }

}
