<?php

declare(strict_types=1);

namespace atk4\ui\Table\Column\FilterModel;

use atk4\ui\Table\Column;

class TypeTime extends Column\FilterModel
{
    public function init(): void
    {
        parent::init();

        $this->op->values = [
            '=' => '=',
            '!=' => '!=',
            '<' => '<',
            '<=' => '< or equal',
            '>' => '>',
            '>=' => '> or equal',
            'between' => 'Between',
        ];

        $this->op->default = '=';
        $this->value->type = 'time';
        $this->addField('range', ['ui' => ['caption' => ''], 'type' => 'time']);
    }

    public function setConditionForModel($m)
    {
        $filter = $this->recalData();
        if (isset($filter['id'])) {
            switch ($filter['op']) {
                case 'between':
                    $d1 = $filter['value'];
                    $d2 = $filter['range'];
                    if ($d2 >= $d1) {
                        $value = $m->persistence->typecastSaveField($m->getField($filter['name']), $d1);
                        $value2 = $m->persistence->typecastSaveField($m->getField($filter['name']), $d2);
                    } else {
                        $value = $m->persistence->typecastSaveField($m->getField($filter['name']), $d2);
                        $value2 = $m->persistence->typecastSaveField($m->getField($filter['name']), $d1);
                    }
                    $m->addCondition($m->expr('[field] between [value] and [value2]', ['field' => $m->getField($filter['name']), 'value' => $value, 'value2' => $value2]));

                    break;
                default:
                    $m->addCondition($filter['name'], $filter['op'], $filter['value']);
            }
        }

        return $m;
    }

    public function getFormDisplayRules()
    {
        return [
            'range' => ['op' => 'isExactly[between]'],
        ];
    }
}