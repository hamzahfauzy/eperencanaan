<?php

namespace eperencanaan\models\query;

/**
 * This is the ActiveQuery class for [[\eperencanaan\models\RefStandardSatuan]].
 *
 * @see \eperencanaan\models\RefStandardSatuan
 */
class RefStandardSatuanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \eperencanaan\models\RefStandardSatuan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \eperencanaan\models\RefStandardSatuan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
