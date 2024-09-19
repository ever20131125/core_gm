<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MarriageCertificateInfo message
 */
class MarriageCertificateInfo extends \ProtobufMessage
{
    /* Field index constants */
    const LOVERID = 1;
    const LOVERGENDER = 2;
    const LOVERLEVEL = 3;
    const LOVERNAME = 4;
    const MARRIAGECOUNT = 5;
    const MARRIAGECERTIFICATE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOVERID => array(
            'name' => 'loverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'loverGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERLEVEL => array(
            'name' => 'loverLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERNAME => array(
            'name' => 'loverName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MARRIAGECOUNT => array(
            'name' => 'marriageCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MARRIAGECERTIFICATE => array(
            'name' => 'marriageCertificate',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MarriageCertificate'
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
        $this->values[self::LOVERID] = null;
        $this->values[self::LOVERGENDER] = self::$fields[self::LOVERGENDER]['default'];
        $this->values[self::LOVERLEVEL] = null;
        $this->values[self::LOVERNAME] = null;
        $this->values[self::MARRIAGECOUNT] = null;
        $this->values[self::MARRIAGECERTIFICATE] = array();
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
     * Sets value of 'loverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverID($value)
    {
        return $this->set(self::LOVERID, $value);
    }

    /**
     * Returns value of 'loverID' property
     *
     * @return integer
     */
    public function getLoverID()
    {
        $value = $this->get(self::LOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverID()
    {
        return $this->get(self::LOVERID) !== null;
    }

    /**
     * Sets value of 'loverGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverGender($value)
    {
        return $this->set(self::LOVERGENDER, $value);
    }

    /**
     * Returns value of 'loverGender' property
     *
     * @return integer
     */
    public function getLoverGender()
    {
        $value = $this->get(self::LOVERGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverGender()
    {
        return $this->get(self::LOVERGENDER) !== null;
    }

    /**
     * Sets value of 'loverLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverLevel($value)
    {
        return $this->set(self::LOVERLEVEL, $value);
    }

    /**
     * Returns value of 'loverLevel' property
     *
     * @return integer
     */
    public function getLoverLevel()
    {
        $value = $this->get(self::LOVERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverLevel()
    {
        return $this->get(self::LOVERLEVEL) !== null;
    }

    /**
     * Sets value of 'loverName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoverName($value)
    {
        return $this->set(self::LOVERNAME, $value);
    }

    /**
     * Returns value of 'loverName' property
     *
     * @return string
     */
    public function getLoverName()
    {
        $value = $this->get(self::LOVERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loverName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverName()
    {
        return $this->get(self::LOVERNAME) !== null;
    }

    /**
     * Sets value of 'marriageCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMarriageCount($value)
    {
        return $this->set(self::MARRIAGECOUNT, $value);
    }

    /**
     * Returns value of 'marriageCount' property
     *
     * @return integer
     */
    public function getMarriageCount()
    {
        $value = $this->get(self::MARRIAGECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'marriageCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarriageCount()
    {
        return $this->get(self::MARRIAGECOUNT) !== null;
    }

    /**
     * Appends value to 'marriageCertificate' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MarriageCertificate $value Value to append
     *
     * @return null
     */
    public function appendMarriageCertificate(\Xnhd\Core\Pb\Sdo\MarriageCertificate $value)
    {
        return $this->append(self::MARRIAGECERTIFICATE, $value);
    }

    /**
     * Clears 'marriageCertificate' list
     *
     * @return null
     */
    public function clearMarriageCertificate()
    {
        return $this->clear(self::MARRIAGECERTIFICATE);
    }

    /**
     * Returns 'marriageCertificate' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MarriageCertificate[]
     */
    public function getMarriageCertificate()
    {
        return $this->get(self::MARRIAGECERTIFICATE);
    }

    /**
     * Returns true if 'marriageCertificate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarriageCertificate()
    {
        return count($this->get(self::MARRIAGECERTIFICATE)) !== 0;
    }

    /**
     * Returns 'marriageCertificate' iterator
     *
     * @return \ArrayIterator
     */
    public function getMarriageCertificateIterator()
    {
        return new \ArrayIterator($this->get(self::MARRIAGECERTIFICATE));
    }

    /**
     * Returns element from 'marriageCertificate' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MarriageCertificate
     */
    public function getMarriageCertificateAt($offset)
    {
        return $this->get(self::MARRIAGECERTIFICATE, $offset);
    }

    /**
     * Returns count of 'marriageCertificate' list
     *
     * @return int
     */
    public function getMarriageCertificateCount()
    {
        return $this->count(self::MARRIAGECERTIFICATE);
    }
}
}