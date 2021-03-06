<?php

namespace Phim\Color;

use Phim\Util\MathUtil;

trait HsvColorTrait
{

    protected $value = 0;

    /**
     * @return int
     */
    public function getValue()
    {

        return $this->value;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function withValue($value)
    {

        $color = clone $this;
        $color->value = MathUtil::capValue($value, 0.0, 1.0);
        return $color;
    }
}