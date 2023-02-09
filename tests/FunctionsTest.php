<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSuccessDisplayCars()
    {
        //expected result of the test
        $expected = '<div class="car"><h1>Morris minor</h1>  889 : 4wd : 1980<img src="silly.jpg" /></div>';

        //create the input to get the expected output
        $input = [
            [
                'name' => 'Morris minor',
                'bhp' => '889',
                'drivetrain' => '4wd',
                'year' => '1980',
                'img_url' => 'silly.jpg',
            ]
        ];
        //run the real function by passing in the input and saving the output
        $case = displayCars($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplayCars()
    {
        $expected = '';
        $input = [
            [
                'bhp' => '889',
                'drivetrain' => '4wd',
                'year' => '1980',
                'img_url' => 'silly.jpg',
            ]
        ];
        $case = displayCars($input);
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplayCarsMissingYear()
    {
        $expected = '';
        $input = [
            [
                'name' => 'lkjsdlkj',
                'bhp' => '889',
                'drivetrain' => '4wd',
                'img_url' => 'silly.jpg',
            ]
        ];
        $case = displayCars($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayCars()
    {
        $this->expectException(TypeError::class);
        $input = 'hello';
        $case = displayCars($input);
    }
}