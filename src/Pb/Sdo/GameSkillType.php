<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameSkillType enum
 */
final class GameSkillType
{
    const enmGameSkill_Field_Mask = 251658240;
    const enmGameSkill_Field_Player = 16777216;
    const enmGameSkill_Field_NPC = 33554432;
    const enmGameSkill_Field_Guild = 50331648;
    const enmGameSkill_Field_Pet = 67108864;
    const enmGameSkill_Field_Boss = 83886080;
    const enmGameSkill_Act_Mask = 15728640;
    const enmGameSkill_Act_Active = 1048576;
    const enmGameSkill_Act_Passive = 2097152;
    const enmGameSkill_Act_Cooperate = 3145728;
    const enmGameSkill_Att_Mask = 983040;
    const enmGameSkill_Att_Buffer = 65536;
    const enmGameSkill_Att_DefBuf = 131072;
    const enmGameSkill_Att_Attack = 196608;
    const enmGameSkill_Att_Defend = 262144;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameSkill_Field_Mask' => self::enmGameSkill_Field_Mask,
            'enmGameSkill_Field_Player' => self::enmGameSkill_Field_Player,
            'enmGameSkill_Field_NPC' => self::enmGameSkill_Field_NPC,
            'enmGameSkill_Field_Guild' => self::enmGameSkill_Field_Guild,
            'enmGameSkill_Field_Pet' => self::enmGameSkill_Field_Pet,
            'enmGameSkill_Field_Boss' => self::enmGameSkill_Field_Boss,
            'enmGameSkill_Act_Mask' => self::enmGameSkill_Act_Mask,
            'enmGameSkill_Act_Active' => self::enmGameSkill_Act_Active,
            'enmGameSkill_Act_Passive' => self::enmGameSkill_Act_Passive,
            'enmGameSkill_Act_Cooperate' => self::enmGameSkill_Act_Cooperate,
            'enmGameSkill_Att_Mask' => self::enmGameSkill_Att_Mask,
            'enmGameSkill_Att_Buffer' => self::enmGameSkill_Att_Buffer,
            'enmGameSkill_Att_DefBuf' => self::enmGameSkill_Att_DefBuf,
            'enmGameSkill_Att_Attack' => self::enmGameSkill_Att_Attack,
            'enmGameSkill_Att_Defend' => self::enmGameSkill_Att_Defend,
        );
    }
}
}