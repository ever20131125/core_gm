<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetSystemRecommendPlayerResp message
 */
class RLSGetSystemRecommendPlayerResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRRECOMMENDLIST = 2;
    const ARRONLINEDEGREE = 3;
    const ARRLABELDEGREE = 4;
    const ARRRECOMMENDPOINT = 5;
    const ARRINTIMACY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRRECOMMENDLIST => array(
            'name' => 'arrRecommendList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRONLINEDEGREE => array(
            'name' => 'arrOnlineDegree',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLABELDEGREE => array(
            'name' => 'arrLabelDegree',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRECOMMENDPOINT => array(
            'name' => 'arrRecommendPoint',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINTIMACY => array(
            'name' => 'arrIntimacy',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRRECOMMENDLIST] = array();
        $this->values[self::ARRONLINEDEGREE] = array();
        $this->values[self::ARRLABELDEGREE] = array();
        $this->values[self::ARRRECOMMENDPOINT] = array();
        $this->values[self::ARRINTIMACY] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrRecommendList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRecommendList($value)
    {
        return $this->append(self::ARRRECOMMENDLIST, $value);
    }

    /**
     * Clears 'arrRecommendList' list
     *
     * @return null
     */
    public function clearArrRecommendList()
    {
        return $this->clear(self::ARRRECOMMENDLIST);
    }

    /**
     * Returns 'arrRecommendList' list
     *
     * @return integer[]
     */
    public function getArrRecommendList()
    {
        return $this->get(self::ARRRECOMMENDLIST);
    }

    /**
     * Returns true if 'arrRecommendList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRecommendList()
    {
        return count($this->get(self::ARRRECOMMENDLIST)) !== 0;
    }

    /**
     * Returns 'arrRecommendList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRecommendListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRECOMMENDLIST));
    }

    /**
     * Returns element from 'arrRecommendList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRecommendListAt($offset)
    {
        return $this->get(self::ARRRECOMMENDLIST, $offset);
    }

    /**
     * Returns count of 'arrRecommendList' list
     *
     * @return int
     */
    public function getArrRecommendListCount()
    {
        return $this->count(self::ARRRECOMMENDLIST);
    }

    /**
     * Appends value to 'arrOnlineDegree' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOnlineDegree($value)
    {
        return $this->append(self::ARRONLINEDEGREE, $value);
    }

    /**
     * Clears 'arrOnlineDegree' list
     *
     * @return null
     */
    public function clearArrOnlineDegree()
    {
        return $this->clear(self::ARRONLINEDEGREE);
    }

    /**
     * Returns 'arrOnlineDegree' list
     *
     * @return integer[]
     */
    public function getArrOnlineDegree()
    {
        return $this->get(self::ARRONLINEDEGREE);
    }

    /**
     * Returns true if 'arrOnlineDegree' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOnlineDegree()
    {
        return count($this->get(self::ARRONLINEDEGREE)) !== 0;
    }

    /**
     * Returns 'arrOnlineDegree' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOnlineDegreeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRONLINEDEGREE));
    }

    /**
     * Returns element from 'arrOnlineDegree' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOnlineDegreeAt($offset)
    {
        return $this->get(self::ARRONLINEDEGREE, $offset);
    }

    /**
     * Returns count of 'arrOnlineDegree' list
     *
     * @return int
     */
    public function getArrOnlineDegreeCount()
    {
        return $this->count(self::ARRONLINEDEGREE);
    }

    /**
     * Appends value to 'arrLabelDegree' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrLabelDegree($value)
    {
        return $this->append(self::ARRLABELDEGREE, $value);
    }

    /**
     * Clears 'arrLabelDegree' list
     *
     * @return null
     */
    public function clearArrLabelDegree()
    {
        return $this->clear(self::ARRLABELDEGREE);
    }

    /**
     * Returns 'arrLabelDegree' list
     *
     * @return integer[]
     */
    public function getArrLabelDegree()
    {
        return $this->get(self::ARRLABELDEGREE);
    }

    /**
     * Returns true if 'arrLabelDegree' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLabelDegree()
    {
        return count($this->get(self::ARRLABELDEGREE)) !== 0;
    }

    /**
     * Returns 'arrLabelDegree' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLabelDegreeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLABELDEGREE));
    }

    /**
     * Returns element from 'arrLabelDegree' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrLabelDegreeAt($offset)
    {
        return $this->get(self::ARRLABELDEGREE, $offset);
    }

    /**
     * Returns count of 'arrLabelDegree' list
     *
     * @return int
     */
    public function getArrLabelDegreeCount()
    {
        return $this->count(self::ARRLABELDEGREE);
    }

    /**
     * Appends value to 'arrRecommendPoint' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRecommendPoint($value)
    {
        return $this->append(self::ARRRECOMMENDPOINT, $value);
    }

    /**
     * Clears 'arrRecommendPoint' list
     *
     * @return null
     */
    public function clearArrRecommendPoint()
    {
        return $this->clear(self::ARRRECOMMENDPOINT);
    }

    /**
     * Returns 'arrRecommendPoint' list
     *
     * @return integer[]
     */
    public function getArrRecommendPoint()
    {
        return $this->get(self::ARRRECOMMENDPOINT);
    }

    /**
     * Returns true if 'arrRecommendPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRecommendPoint()
    {
        return count($this->get(self::ARRRECOMMENDPOINT)) !== 0;
    }

    /**
     * Returns 'arrRecommendPoint' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRecommendPointIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRECOMMENDPOINT));
    }

    /**
     * Returns element from 'arrRecommendPoint' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRecommendPointAt($offset)
    {
        return $this->get(self::ARRRECOMMENDPOINT, $offset);
    }

    /**
     * Returns count of 'arrRecommendPoint' list
     *
     * @return int
     */
    public function getArrRecommendPointCount()
    {
        return $this->count(self::ARRRECOMMENDPOINT);
    }

    /**
     * Appends value to 'arrIntimacy' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrIntimacy($value)
    {
        return $this->append(self::ARRINTIMACY, $value);
    }

    /**
     * Clears 'arrIntimacy' list
     *
     * @return null
     */
    public function clearArrIntimacy()
    {
        return $this->clear(self::ARRINTIMACY);
    }

    /**
     * Returns 'arrIntimacy' list
     *
     * @return integer[]
     */
    public function getArrIntimacy()
    {
        return $this->get(self::ARRINTIMACY);
    }

    /**
     * Returns true if 'arrIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrIntimacy()
    {
        return count($this->get(self::ARRINTIMACY)) !== 0;
    }

    /**
     * Returns 'arrIntimacy' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIntimacyIterator()
    {
        return new \ArrayIterator($this->get(self::ARRINTIMACY));
    }

    /**
     * Returns element from 'arrIntimacy' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrIntimacyAt($offset)
    {
        return $this->get(self::ARRINTIMACY, $offset);
    }

    /**
     * Returns count of 'arrIntimacy' list
     *
     * @return int
     */
    public function getArrIntimacyCount()
    {
        return $this->count(self::ARRINTIMACY);
    }
}
}