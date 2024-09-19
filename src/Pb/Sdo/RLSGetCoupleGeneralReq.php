<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleGeneralReq message
 */
class RLSGetCoupleGeneralReq extends \ProtobufMessage
{
    /* Field index constants */
    const NSORTTYPE = 1;
    const NMEMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSORTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SortType::enmSortType_None,
            'name' => 'nSortType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMEMBER => array(
            'name' => 'nMember',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::NSORTTYPE] = self::$fields[self::NSORTTYPE]['default'];
        $this->values[self::NMEMBER] = array();
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
     * Sets value of 'nSortType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSortType($value)
    {
        return $this->set(self::NSORTTYPE, $value);
    }

    /**
     * Returns value of 'nSortType' property
     *
     * @return integer
     */
    public function getNSortType()
    {
        $value = $this->get(self::NSORTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSortType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSortType()
    {
        return $this->get(self::NSORTTYPE) !== null;
    }

    /**
     * Appends value to 'nMember' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNMember($value)
    {
        return $this->append(self::NMEMBER, $value);
    }

    /**
     * Clears 'nMember' list
     *
     * @return null
     */
    public function clearNMember()
    {
        return $this->clear(self::NMEMBER);
    }

    /**
     * Returns 'nMember' list
     *
     * @return integer[]
     */
    public function getNMember()
    {
        return $this->get(self::NMEMBER);
    }

    /**
     * Returns true if 'nMember' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMember()
    {
        return count($this->get(self::NMEMBER)) !== 0;
    }

    /**
     * Returns 'nMember' iterator
     *
     * @return \ArrayIterator
     */
    public function getNMemberIterator()
    {
        return new \ArrayIterator($this->get(self::NMEMBER));
    }

    /**
     * Returns element from 'nMember' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNMemberAt($offset)
    {
        return $this->get(self::NMEMBER, $offset);
    }

    /**
     * Returns count of 'nMember' list
     *
     * @return int
     */
    public function getNMemberCount()
    {
        return $this->count(self::NMEMBER);
    }
}
}