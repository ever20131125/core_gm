<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RecordKind enum
 */
final class RecordKind
{
    const enmRecordKind_Normal = 0;
    const enmRecordKind_Fresh = 1;
    const enmRecordKind_CWin = 2;
    const enmRecordKind_CLose = 3;
    const enmRecordKind_Suspect = 4;
    const enmRecordKind_Cheat = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRecordKind_Normal' => self::enmRecordKind_Normal,
            'enmRecordKind_Fresh' => self::enmRecordKind_Fresh,
            'enmRecordKind_CWin' => self::enmRecordKind_CWin,
            'enmRecordKind_CLose' => self::enmRecordKind_CLose,
            'enmRecordKind_Suspect' => self::enmRecordKind_Suspect,
            'enmRecordKind_Cheat' => self::enmRecordKind_Cheat,
        );
    }
}
}