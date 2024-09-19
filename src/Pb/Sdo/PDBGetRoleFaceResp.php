<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleFaceResp message
 */
class PDBGetRoleFaceResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRMYFACEID = 3;
    const ARRFAVORFACE = 4;
    const ARRDEFAULTMALEFACE = 5;
    const ARRDEFAULTMALEPAINT = 6;
    const ARRDEFAULTFEMALEFACE = 7;
    const ARRDEFAULTFEMALEPAINT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMYFACEID => array(
            'name' => 'arrMyFaceID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFAVORFACE => array(
            'name' => 'arrFavorFace',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDEFAULTMALEFACE => array(
            'name' => 'arrDefaultMaleFace',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDEFAULTMALEPAINT => array(
            'name' => 'arrDefaultMalePaint',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDEFAULTFEMALEFACE => array(
            'name' => 'arrDefaultFeMaleFace',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDEFAULTFEMALEPAINT => array(
            'name' => 'arrDefaultFeMalePaint',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRMYFACEID] = array();
        $this->values[self::ARRFAVORFACE] = array();
        $this->values[self::ARRDEFAULTMALEFACE] = array();
        $this->values[self::ARRDEFAULTMALEPAINT] = array();
        $this->values[self::ARRDEFAULTFEMALEFACE] = array();
        $this->values[self::ARRDEFAULTFEMALEPAINT] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrMyFaceID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMyFaceID($value)
    {
        return $this->append(self::ARRMYFACEID, $value);
    }

    /**
     * Clears 'arrMyFaceID' list
     *
     * @return null
     */
    public function clearArrMyFaceID()
    {
        return $this->clear(self::ARRMYFACEID);
    }

    /**
     * Returns 'arrMyFaceID' list
     *
     * @return integer[]
     */
    public function getArrMyFaceID()
    {
        return $this->get(self::ARRMYFACEID);
    }

    /**
     * Returns true if 'arrMyFaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMyFaceID()
    {
        return count($this->get(self::ARRMYFACEID)) !== 0;
    }

    /**
     * Returns 'arrMyFaceID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMyFaceIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMYFACEID));
    }

    /**
     * Returns element from 'arrMyFaceID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMyFaceIDAt($offset)
    {
        return $this->get(self::ARRMYFACEID, $offset);
    }

    /**
     * Returns count of 'arrMyFaceID' list
     *
     * @return int
     */
    public function getArrMyFaceIDCount()
    {
        return $this->count(self::ARRMYFACEID);
    }

    /**
     * Appends value to 'arrFavorFace' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrFavorFace($value)
    {
        return $this->append(self::ARRFAVORFACE, $value);
    }

    /**
     * Clears 'arrFavorFace' list
     *
     * @return null
     */
    public function clearArrFavorFace()
    {
        return $this->clear(self::ARRFAVORFACE);
    }

    /**
     * Returns 'arrFavorFace' list
     *
     * @return integer[]
     */
    public function getArrFavorFace()
    {
        return $this->get(self::ARRFAVORFACE);
    }

    /**
     * Returns true if 'arrFavorFace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFavorFace()
    {
        return count($this->get(self::ARRFAVORFACE)) !== 0;
    }

    /**
     * Returns 'arrFavorFace' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFavorFaceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFAVORFACE));
    }

    /**
     * Returns element from 'arrFavorFace' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrFavorFaceAt($offset)
    {
        return $this->get(self::ARRFAVORFACE, $offset);
    }

    /**
     * Returns count of 'arrFavorFace' list
     *
     * @return int
     */
    public function getArrFavorFaceCount()
    {
        return $this->count(self::ARRFAVORFACE);
    }

    /**
     * Appends value to 'arrDefaultMaleFace' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDefaultMaleFace($value)
    {
        return $this->append(self::ARRDEFAULTMALEFACE, $value);
    }

    /**
     * Clears 'arrDefaultMaleFace' list
     *
     * @return null
     */
    public function clearArrDefaultMaleFace()
    {
        return $this->clear(self::ARRDEFAULTMALEFACE);
    }

    /**
     * Returns 'arrDefaultMaleFace' list
     *
     * @return integer[]
     */
    public function getArrDefaultMaleFace()
    {
        return $this->get(self::ARRDEFAULTMALEFACE);
    }

    /**
     * Returns true if 'arrDefaultMaleFace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDefaultMaleFace()
    {
        return count($this->get(self::ARRDEFAULTMALEFACE)) !== 0;
    }

    /**
     * Returns 'arrDefaultMaleFace' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDefaultMaleFaceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDEFAULTMALEFACE));
    }

    /**
     * Returns element from 'arrDefaultMaleFace' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDefaultMaleFaceAt($offset)
    {
        return $this->get(self::ARRDEFAULTMALEFACE, $offset);
    }

    /**
     * Returns count of 'arrDefaultMaleFace' list
     *
     * @return int
     */
    public function getArrDefaultMaleFaceCount()
    {
        return $this->count(self::ARRDEFAULTMALEFACE);
    }

    /**
     * Appends value to 'arrDefaultMalePaint' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDefaultMalePaint($value)
    {
        return $this->append(self::ARRDEFAULTMALEPAINT, $value);
    }

    /**
     * Clears 'arrDefaultMalePaint' list
     *
     * @return null
     */
    public function clearArrDefaultMalePaint()
    {
        return $this->clear(self::ARRDEFAULTMALEPAINT);
    }

    /**
     * Returns 'arrDefaultMalePaint' list
     *
     * @return integer[]
     */
    public function getArrDefaultMalePaint()
    {
        return $this->get(self::ARRDEFAULTMALEPAINT);
    }

    /**
     * Returns true if 'arrDefaultMalePaint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDefaultMalePaint()
    {
        return count($this->get(self::ARRDEFAULTMALEPAINT)) !== 0;
    }

    /**
     * Returns 'arrDefaultMalePaint' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDefaultMalePaintIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDEFAULTMALEPAINT));
    }

    /**
     * Returns element from 'arrDefaultMalePaint' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDefaultMalePaintAt($offset)
    {
        return $this->get(self::ARRDEFAULTMALEPAINT, $offset);
    }

    /**
     * Returns count of 'arrDefaultMalePaint' list
     *
     * @return int
     */
    public function getArrDefaultMalePaintCount()
    {
        return $this->count(self::ARRDEFAULTMALEPAINT);
    }

    /**
     * Appends value to 'arrDefaultFeMaleFace' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDefaultFeMaleFace($value)
    {
        return $this->append(self::ARRDEFAULTFEMALEFACE, $value);
    }

    /**
     * Clears 'arrDefaultFeMaleFace' list
     *
     * @return null
     */
    public function clearArrDefaultFeMaleFace()
    {
        return $this->clear(self::ARRDEFAULTFEMALEFACE);
    }

    /**
     * Returns 'arrDefaultFeMaleFace' list
     *
     * @return integer[]
     */
    public function getArrDefaultFeMaleFace()
    {
        return $this->get(self::ARRDEFAULTFEMALEFACE);
    }

    /**
     * Returns true if 'arrDefaultFeMaleFace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDefaultFeMaleFace()
    {
        return count($this->get(self::ARRDEFAULTFEMALEFACE)) !== 0;
    }

    /**
     * Returns 'arrDefaultFeMaleFace' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDefaultFeMaleFaceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDEFAULTFEMALEFACE));
    }

    /**
     * Returns element from 'arrDefaultFeMaleFace' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDefaultFeMaleFaceAt($offset)
    {
        return $this->get(self::ARRDEFAULTFEMALEFACE, $offset);
    }

    /**
     * Returns count of 'arrDefaultFeMaleFace' list
     *
     * @return int
     */
    public function getArrDefaultFeMaleFaceCount()
    {
        return $this->count(self::ARRDEFAULTFEMALEFACE);
    }

    /**
     * Appends value to 'arrDefaultFeMalePaint' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDefaultFeMalePaint($value)
    {
        return $this->append(self::ARRDEFAULTFEMALEPAINT, $value);
    }

    /**
     * Clears 'arrDefaultFeMalePaint' list
     *
     * @return null
     */
    public function clearArrDefaultFeMalePaint()
    {
        return $this->clear(self::ARRDEFAULTFEMALEPAINT);
    }

    /**
     * Returns 'arrDefaultFeMalePaint' list
     *
     * @return integer[]
     */
    public function getArrDefaultFeMalePaint()
    {
        return $this->get(self::ARRDEFAULTFEMALEPAINT);
    }

    /**
     * Returns true if 'arrDefaultFeMalePaint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDefaultFeMalePaint()
    {
        return count($this->get(self::ARRDEFAULTFEMALEPAINT)) !== 0;
    }

    /**
     * Returns 'arrDefaultFeMalePaint' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDefaultFeMalePaintIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDEFAULTFEMALEPAINT));
    }

    /**
     * Returns element from 'arrDefaultFeMalePaint' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDefaultFeMalePaintAt($offset)
    {
        return $this->get(self::ARRDEFAULTFEMALEPAINT, $offset);
    }

    /**
     * Returns count of 'arrDefaultFeMalePaint' list
     *
     * @return int
     */
    public function getArrDefaultFeMalePaintCount()
    {
        return $this->count(self::ARRDEFAULTFEMALEPAINT);
    }
}
}