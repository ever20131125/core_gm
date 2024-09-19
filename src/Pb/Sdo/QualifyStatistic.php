<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyStatistic message
 */
class QualifyStatistic extends \ProtobufMessage
{
    /* Field index constants */
    const QUALIFYINFO = 1;
    const TITLEINFO = 2;
    const ARRSTATISTIC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUALIFYINFO => array(
            'name' => 'qualifyInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyInfo'
        ),
        self::TITLEINFO => array(
            'name' => 'titleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::ARRSTATISTIC => array(
            'name' => 'arrStatistic',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchStatistic'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::QUALIFYINFO] = null;
        $this->values[self::TITLEINFO] = null;
        $this->values[self::ARRSTATISTIC] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'qualifyInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyInfo $value Property value
     *
     * @return null
     */
    public function setQualifyInfo(\Xnhd\Core\Pb\Sdo\QualifyInfo $value=null)
    {
        return $this->set(self::QUALIFYINFO, $value);
    }

    /**
     * Returns value of 'qualifyInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyInfo
     */
    public function getQualifyInfo()
    {
        return $this->get(self::QUALIFYINFO);
    }

    /**
     * Returns true if 'qualifyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQualifyInfo()
    {
        return $this->get(self::QUALIFYINFO) !== null;
    }

    /**
     * Sets value of 'titleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::TITLEINFO, $value);
    }

    /**
     * Returns value of 'titleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getTitleInfo()
    {
        return $this->get(self::TITLEINFO);
    }

    /**
     * Returns true if 'titleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitleInfo()
    {
        return $this->get(self::TITLEINFO) !== null;
    }

    /**
     * Appends value to 'arrStatistic' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchStatistic $value Value to append
     *
     * @return null
     */
    public function appendArrStatistic(\Xnhd\Core\Pb\Sdo\MatchStatistic $value)
    {
        return $this->append(self::ARRSTATISTIC, $value);
    }

    /**
     * Clears 'arrStatistic' list
     *
     * @return null
     */
    public function clearArrStatistic()
    {
        return $this->clear(self::ARRSTATISTIC);
    }

    /**
     * Returns 'arrStatistic' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchStatistic[]
     */
    public function getArrStatistic()
    {
        return $this->get(self::ARRSTATISTIC);
    }

    /**
     * Returns true if 'arrStatistic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStatistic()
    {
        return count($this->get(self::ARRSTATISTIC)) !== 0;
    }

    /**
     * Returns 'arrStatistic' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStatisticIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATISTIC));
    }

    /**
     * Returns element from 'arrStatistic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchStatistic
     */
    public function getArrStatisticAt($offset)
    {
        return $this->get(self::ARRSTATISTIC, $offset);
    }

    /**
     * Returns count of 'arrStatistic' list
     *
     * @return int
     */
    public function getArrStatisticCount()
    {
        return $this->count(self::ARRSTATISTIC);
    }
}
}