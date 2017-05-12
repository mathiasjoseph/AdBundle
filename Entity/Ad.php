<?php

namespace Miky\Bundle\AdBundle\Entity;

use Miky\Bundle\MediaBundle\Annotation\MediaProperty;
use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Doctrine\ORM\Mapping as ORM;
use Miky\Component\Ad\Model\Ad as BaseAd;
use Miky\Bundle\CoreBundle\Annotation\CommonModelAnnotation;

/**
 * Ad
 * @CommonModelAnnotation(timeProperties="enabledAt")
 */
class Ad extends BaseAd implements CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @MediaProperty()
     */
    protected $clan;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * @param mixed $clan
     */
    public function setClan($clan)
    {
        $this->clan = $clan;
    }


}
