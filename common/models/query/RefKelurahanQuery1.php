<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\RefKelurahan]].
 *
 * @see \common\models\RefKelurahan
 */
class RefKelurahanQuery1 extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\RefKelurahan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\RefKelurahan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
