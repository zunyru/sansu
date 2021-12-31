<?php

namespace Sansu\SaveModel\Fields;

class StringField extends Field
{
    public function execute(): mixed
    {
        return $this->value;
    }
}
