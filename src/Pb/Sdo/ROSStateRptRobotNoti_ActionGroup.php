<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActionGroup message embedded in ROSStateRptRobotNoti message
 */
class ROSStateRptRobotNoti_ActionGroup extends \ProtobufMessage
{
    /* Field index constants */
    const ACTIONS = 1;
    const SUCCEEDS = 2;
    const FAILEDS = 3;
    const TIMEOUTS = 4;
    const TIMEINTERVAL = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTIONS => array(
            'name' => 'actions',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUCCEEDS => array(
            'name' => 'succeeds',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAILEDS => array(
            'name' => 'faileds',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMEOUTS => array(
            'name' => 'timeouts',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMEINTERVAL => array(
            'name' => 'timeinterval',
            'required' => true,
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
        $this->values[self::ACTIONS] = null;
        $this->values[self::SUCCEEDS] = null;
        $this->values[self::FAILEDS] = null;
        $this->values[self::TIMEOUTS] = null;
        $this->values[self::TIMEINTERVAL] = null;
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
     * Sets value of 'actions' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActions($value)
    {
        return $this->set(self::ACTIONS, $value);
    }

    /**
     * Returns value of 'actions' property
     *
     * @return integer
     */
    public function getActions()
    {
        $value = $this->get(self::ACTIONS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actions' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActions()
    {
        return $this->get(self::ACTIONS) !== null;
    }

    /**
     * Sets value of 'succeeds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSucceeds($value)
    {
        return $this->set(self::SUCCEEDS, $value);
    }

    /**
     * Returns value of 'succeeds' property
     *
     * @return integer
     */
    public function getSucceeds()
    {
        $value = $this->get(self::SUCCEEDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'succeeds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSucceeds()
    {
        return $this->get(self::SUCCEEDS) !== null;
    }

    /**
     * Sets value of 'faileds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFaileds($value)
    {
        return $this->set(self::FAILEDS, $value);
    }

    /**
     * Returns value of 'faileds' property
     *
     * @return integer
     */
    public function getFaileds()
    {
        $value = $this->get(self::FAILEDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'faileds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFaileds()
    {
        return $this->get(self::FAILEDS) !== null;
    }

    /**
     * Sets value of 'timeouts' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeouts($value)
    {
        return $this->set(self::TIMEOUTS, $value);
    }

    /**
     * Returns value of 'timeouts' property
     *
     * @return integer
     */
    public function getTimeouts()
    {
        $value = $this->get(self::TIMEOUTS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeouts' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeouts()
    {
        return $this->get(self::TIMEOUTS) !== null;
    }

    /**
     * Sets value of 'timeinterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeinterval($value)
    {
        return $this->set(self::TIMEINTERVAL, $value);
    }

    /**
     * Returns value of 'timeinterval' property
     *
     * @return integer
     */
    public function getTimeinterval()
    {
        $value = $this->get(self::TIMEINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeinterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeinterval()
    {
        return $this->get(self::TIMEINTERVAL) !== null;
    }
}
}