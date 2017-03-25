<?php

namespace Miky\Bundle\AdBundle\Entity;

use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Doctrine\ORM\Mapping as ORM;
use Miky\Bundle\CoreBundle\Annotation\CommonModelAnnotation;

/**
 * Ad
 * @CommonModelAnnotation(name="ad", timeProperties="enabledAt")
 */
class Ad implements CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
