<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductLang;

/**
 * ProductLangSearch represents the model behind the search form of `common\models\ProductLang`.
 */
class ProductLangSearch extends ProductLang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prod', 'id_lang', 'idOld', 'id', 'tmp', 'steth', 'otsc', 'ophthalm', 'rumex', 'rumexbaltics', 'ropticsru', 'greenoptic', 'optica100', 'ropticskz', 'ropticsua', 'mednabor', '_id_prod', 'ropticsby', 'optica100Spb', 'leicaMicro'], 'integer'],
            [['name', 'item_product', 'title', 'meta_title', 'meta_descr', 'meta_keywords', 'url', 'url_manufacture', 'extra_text', 'description_mini', 'press_release', '_site_import'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductLang::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_prod' => $this->id_prod,
            'id_lang' => $this->id_lang,
            'idOld' => $this->idOld,
            'id' => $this->id,
            'tmp' => $this->tmp,
            'steth' => $this->steth,
            'otsc' => $this->otsc,
            'ophthalm' => $this->ophthalm,
            'rumex' => $this->rumex,
            'rumexbaltics' => $this->rumexbaltics,
            'ropticsru' => $this->ropticsru,
            'greenoptic' => $this->greenoptic,
            'optica100' => $this->optica100,
            'ropticskz' => $this->ropticskz,
            'ropticsua' => $this->ropticsua,
            'mednabor' => $this->mednabor,
            '_id_prod' => $this->_id_prod,
            'ropticsby' => $this->ropticsby,
            'optica100Spb' => $this->optica100Spb,
            'leicaMicro' => $this->leicaMicro,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'item_product', $this->item_product])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_descr', $this->meta_descr])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'url_manufacture', $this->url_manufacture])
            ->andFilterWhere(['like', 'extra_text', $this->extra_text])
            ->andFilterWhere(['like', 'description_mini', $this->description_mini])
            ->andFilterWhere(['like', 'press_release', $this->press_release])
            ->andFilterWhere(['like', '_site_import', $this->_site_import]);

        return $dataProvider;
    }
}
