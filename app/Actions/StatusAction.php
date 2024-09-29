<?php

namespace App\Actions;

class StatusAction
{
    public static function status($column, $model)
    {
        $model->$column = $model->status === 0 ? 1 : 0;
        if ($model->save()) {
            if ($model->$column === 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
