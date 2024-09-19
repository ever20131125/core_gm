<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * StateData message embedded in ROSStateRptRobotNoti message
 */
class ROSStateRptRobotNoti_StateData extends \ProtobufMessage
{
    /* Field index constants */
    const LOGON = 1;
    const GETROLE = 2;
    const SELROLE = 3;
    const GETCHANNEL = 4;
    const SELCHANNEL = 5;
    const GETROOM = 6;
    const LOGINROOM = 7;
    const LOGOUTROOM = 8;
    const LOGOUTCHANNEL = 9;
    const LOGOUT = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOGON => array(
            'name' => 'logon',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::GETROLE => array(
            'name' => 'getrole',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::SELROLE => array(
            'name' => 'selrole',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::GETCHANNEL => array(
            'name' => 'getchannel',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::SELCHANNEL => array(
            'name' => 'selchannel',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::GETROOM => array(
            'name' => 'getroom',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::LOGINROOM => array(
            'name' => 'loginroom',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::LOGOUTROOM => array(
            'name' => 'logoutroom',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::LOGOUTCHANNEL => array(
            'name' => 'logoutchannel',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
        ),
        self::LOGOUT => array(
            'name' => 'logout',
            'required' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup'
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
        $this->values[self::LOGON] = null;
        $this->values[self::GETROLE] = null;
        $this->values[self::SELROLE] = null;
        $this->values[self::GETCHANNEL] = null;
        $this->values[self::SELCHANNEL] = null;
        $this->values[self::GETROOM] = null;
        $this->values[self::LOGINROOM] = null;
        $this->values[self::LOGOUTROOM] = null;
        $this->values[self::LOGOUTCHANNEL] = null;
        $this->values[self::LOGOUT] = null;
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
     * Sets value of 'logon' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setLogon(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::LOGON, $value);
    }

    /**
     * Returns value of 'logon' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getLogon()
    {
        return $this->get(self::LOGON);
    }

    /**
     * Returns true if 'logon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogon()
    {
        return $this->get(self::LOGON) !== null;
    }

    /**
     * Sets value of 'getrole' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setGetrole(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::GETROLE, $value);
    }

    /**
     * Returns value of 'getrole' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getGetrole()
    {
        return $this->get(self::GETROLE);
    }

    /**
     * Returns true if 'getrole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetrole()
    {
        return $this->get(self::GETROLE) !== null;
    }

    /**
     * Sets value of 'selrole' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setSelrole(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::SELROLE, $value);
    }

    /**
     * Returns value of 'selrole' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getSelrole()
    {
        return $this->get(self::SELROLE);
    }

    /**
     * Returns true if 'selrole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelrole()
    {
        return $this->get(self::SELROLE) !== null;
    }

    /**
     * Sets value of 'getchannel' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setGetchannel(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::GETCHANNEL, $value);
    }

    /**
     * Returns value of 'getchannel' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getGetchannel()
    {
        return $this->get(self::GETCHANNEL);
    }

    /**
     * Returns true if 'getchannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetchannel()
    {
        return $this->get(self::GETCHANNEL) !== null;
    }

    /**
     * Sets value of 'selchannel' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setSelchannel(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::SELCHANNEL, $value);
    }

    /**
     * Returns value of 'selchannel' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getSelchannel()
    {
        return $this->get(self::SELCHANNEL);
    }

    /**
     * Returns true if 'selchannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelchannel()
    {
        return $this->get(self::SELCHANNEL) !== null;
    }

    /**
     * Sets value of 'getroom' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setGetroom(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::GETROOM, $value);
    }

    /**
     * Returns value of 'getroom' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getGetroom()
    {
        return $this->get(self::GETROOM);
    }

    /**
     * Returns true if 'getroom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetroom()
    {
        return $this->get(self::GETROOM) !== null;
    }

    /**
     * Sets value of 'loginroom' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setLoginroom(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::LOGINROOM, $value);
    }

    /**
     * Returns value of 'loginroom' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getLoginroom()
    {
        return $this->get(self::LOGINROOM);
    }

    /**
     * Returns true if 'loginroom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginroom()
    {
        return $this->get(self::LOGINROOM) !== null;
    }

    /**
     * Sets value of 'logoutroom' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setLogoutroom(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::LOGOUTROOM, $value);
    }

    /**
     * Returns value of 'logoutroom' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getLogoutroom()
    {
        return $this->get(self::LOGOUTROOM);
    }

    /**
     * Returns true if 'logoutroom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogoutroom()
    {
        return $this->get(self::LOGOUTROOM) !== null;
    }

    /**
     * Sets value of 'logoutchannel' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setLogoutchannel(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::LOGOUTCHANNEL, $value);
    }

    /**
     * Returns value of 'logoutchannel' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getLogoutchannel()
    {
        return $this->get(self::LOGOUTCHANNEL);
    }

    /**
     * Returns true if 'logoutchannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogoutchannel()
    {
        return $this->get(self::LOGOUTCHANNEL) !== null;
    }

    /**
     * Sets value of 'logout' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value Property value
     *
     * @return null
     */
    public function setLogout(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup $value=null)
    {
        return $this->set(self::LOGOUT, $value);
    }

    /**
     * Returns value of 'logout' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_ActionGroup
     */
    public function getLogout()
    {
        return $this->get(self::LOGOUT);
    }

    /**
     * Returns true if 'logout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogout()
    {
        return $this->get(self::LOGOUT) !== null;
    }
}
}