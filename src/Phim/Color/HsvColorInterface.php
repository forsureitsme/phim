<?php

namespace Phim\Color;

interface HsvColorInterface extends HsColorInterface
{

    public function getValue();
    public function withValue($value);
}