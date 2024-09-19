<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASAchievementInfoNoti message
 */
class TASAchievementInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const INFOS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AchievementInfo'
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
        $this->values[self::INFOS] = array();
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
     * Appends value to 'infos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AchievementInfo $value Value to append
     *
     * @return null
     */
    public function appendInfos(\Xnhd\Core\Pb\Sdo\AchievementInfo $value)
    {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos()
    {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AchievementInfo[]
     */
    public function getInfos()
    {
        return $this->get(self::INFOS);
    }

    /**
     * Returns true if 'infos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfos()
    {
        return count($this->get(self::INFOS)) !== 0;
    }

    /**
     * Returns 'infos' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfosIterator()
    {
        return new \ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AchievementInfo
     */
    public function getInfosAt($offset)
    {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount()
    {
        return $this->count(self::INFOS);
    }
}
}