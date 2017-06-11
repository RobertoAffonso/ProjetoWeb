<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 04/06/17
 * Time: 21:03
 */

namespace AppBundle\Service;


class MarkdownTransformer
{
    public function parse($str)
    {
        return strtoupper($str);
    }
}