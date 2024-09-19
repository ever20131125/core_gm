<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGMUpdateAssetResp message
 */
class IDBGMUpdateAssetResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRFAILED = 2;
    const ARRERRORCODE = 3;
    const ARRSUCCESS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRFAILED => array(
            'name' => 'arrFailed',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ManageAsset'
        ),
        self::ARRERRORCODE => array(
            'name' => 'arrErrorCode',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRSUCCESS => array(
            'name' => 'arrSuccess',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ManageAsset'
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
        $this->values[self::ARRFAILED] = array();
        $this->values[self::ARRERRORCODE] = array();
        $this->values[self::ARRSUCCESS] = array();
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
     * Appends value to 'arrFailed' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ManageAsset $value Value to append
     *
     * @return null
     */
    public function appendArrFailed(\Xnhd\Core\Pb\Sdo\ManageAsset $value)
    {
        return $this->append(self::ARRFAILED, $value);
    }

    /**
     * Clears 'arrFailed' list
     *
     * @return null
     */
    public function clearArrFailed()
    {
        return $this->clear(self::ARRFAILED);
    }

    /**
     * Returns 'arrFailed' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageAsset[]
     */
    public function getArrFailed()
    {
        return $this->get(self::ARRFAILED);
    }

    /**
     * Returns true if 'arrFailed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFailed()
    {
        return count($this->get(self::ARRFAILED)) !== 0;
    }

    /**
     * Returns 'arrFailed' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFailedIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFAILED));
    }

    /**
     * Returns element from 'arrFailed' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageAsset
     */
    public function getArrFailedAt($offset)
    {
        return $this->get(self::ARRFAILED, $offset);
    }

    /**
     * Returns count of 'arrFailed' list
     *
     * @return int
     */
    public function getArrFailedCount()
    {
        return $this->count(self::ARRFAILED);
    }

    /**
     * Appends value to 'arrErrorCode' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrErrorCode($value)
    {
        return $this->append(self::ARRERRORCODE, $value);
    }

    /**
     * Clears 'arrErrorCode' list
     *
     * @return null
     */
    public function clearArrErrorCode()
    {
        return $this->clear(self::ARRERRORCODE);
    }

    /**
     * Returns 'arrErrorCode' list
     *
     * @return integer[]
     */
    public function getArrErrorCode()
    {
        return $this->get(self::ARRERRORCODE);
    }

    /**
     * Returns true if 'arrErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrErrorCode()
    {
        return count($this->get(self::ARRERRORCODE)) !== 0;
    }

    /**
     * Returns 'arrErrorCode' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrErrorCodeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRERRORCODE));
    }

    /**
     * Returns element from 'arrErrorCode' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrErrorCodeAt($offset)
    {
        return $this->get(self::ARRERRORCODE, $offset);
    }

    /**
     * Returns count of 'arrErrorCode' list
     *
     * @return int
     */
    public function getArrErrorCodeCount()
    {
        return $this->count(self::ARRERRORCODE);
    }

    /**
     * Appends value to 'arrSuccess' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ManageAsset $value Value to append
     *
     * @return null
     */
    public function appendArrSuccess(\Xnhd\Core\Pb\Sdo\ManageAsset $value)
    {
        return $this->append(self::ARRSUCCESS, $value);
    }

    /**
     * Clears 'arrSuccess' list
     *
     * @return null
     */
    public function clearArrSuccess()
    {
        return $this->clear(self::ARRSUCCESS);
    }

    /**
     * Returns 'arrSuccess' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageAsset[]
     */
    public function getArrSuccess()
    {
        return $this->get(self::ARRSUCCESS);
    }

    /**
     * Returns true if 'arrSuccess' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSuccess()
    {
        return count($this->get(self::ARRSUCCESS)) !== 0;
    }

    /**
     * Returns 'arrSuccess' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSuccessIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSUCCESS));
    }

    /**
     * Returns element from 'arrSuccess' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageAsset
     */
    public function getArrSuccessAt($offset)
    {
        return $this->get(self::ARRSUCCESS, $offset);
    }

    /**
     * Returns count of 'arrSuccess' list
     *
     * @return int
     */
    public function getArrSuccessCount()
    {
        return $this->count(self::ARRSUCCESS);
    }
}
}