<?php

namespace Phim\Color;

use Phim\Util\MathUtil;

class HsvaColor extends HsvColor implements HsvaColorInterface
{
    use HsvaColorTrait;

    public function __construct($hue, $saturation, $value, $alpha)
    {

        parent::__construct($hue, $saturation, $value);;

        $this->alpha = MathUtil::capValue($alpha, 0.0, 1.0);
    }

    public function getRgba()
    {

        return $this->getRgb()->withAlphaSupport()->withAlpha($this->alpha);
    }

    public function getHsla()
    {

        return $this->getHsv()->withAlphaSupport()->withAlpha($this->alpha);
    }

    public function getHsva()
    {

        return new HslaColor($this->hue, $this->saturation, $this->value, $this->alpha);
    }

    public function getCssString()
    {

        $hue = round($this->hue, 2);
        $sat = round($this->saturation * 100, 2).'%';
        $val = round($this->value * 100, 2).'%';
        $alph = round($this->alpha, 2);
        return "hsva({$hue},{$sat},{$val},{$alph})";
    }

    public function __toString()
    {

        return "hsva({$this->hue},{$this->saturation},{$this->value},{$this->alpha})";
    }
}