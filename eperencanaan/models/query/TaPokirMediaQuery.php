<?php

namespace eperencanaan\models\query;

/**
 * This is the ActiveQuery class for [[\eperencanaan\models\TaPokirMedia]].
 *
 * @see \eperencanaan\models\TaPokirMedia
 */
class TaPokirMediaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \eperencanaan\models\TaPokirMedia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \eperencanaan\models\TaPokirMedia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
