<?php

namespace eperencanaan\models\query;

/**
 * This is the ActiveQuery class for [[\eperencanaan\models\TaForumLingkunganMedia]].
 *
 * @see \eperencanaan\models\TaForumLingkunganMedia
 */
class TaForumLingkunganMediaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \eperencanaan\models\TaForumLingkunganMedia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \eperencanaan\models\TaForumLingkunganMedia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
