<?php
namespace EnumGenerator\Parser;

use EnumGenerator\Parser;

class JsonParser extends Parser
{
    public function parse(): \stdClass
    {
        return json_decode(file_get_contents($this->filename), false);
    }
}
