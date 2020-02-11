<?php

namespace Tests\DataProvider\ProductProvider\Tools;

use kollex\Dataprovider\Assortment\Tools\EnumMappingTool;
use PHPUnit\Framework\TestCase;

class EnumMappingToolTest extends TestCase
{
    public function testFieldToMapHasCorrectValueForMapping()
    {
        $this->assertEquals('CA', EnumMappingTool::map('packaging', 'case' ));
    }

    public function testFieldToMapNotExistingInMappingReturnNull()
    {
        $this->assertNull(EnumMappingTool::map('eeeeee', 'cccccc' ));
    }

    public function testFieldToMapHasValueNotExistingInMappingReturnNull()
    {
        $this->assertNull(EnumMappingTool::map('packaging', 'cccccc' ));
    }
}