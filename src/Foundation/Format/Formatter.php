<?php

namespace Yish\Generators\Foundation\Format;

abstract class Formatter
{
    /**
     * @var bool
     * If you use FormatSuccessAndFailed, you can determine format success or failed.
     */
    protected $status = true;
}