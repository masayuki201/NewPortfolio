<?php

namespace App\Services;

use App\Models\Video;
use App\Models\Target;
use http\Env\Request;


class ListService implements ListServiceInterface
{
    public function getListPage($request)
    {
        // フォームから検索文字列と選択カテゴリーidを取得
        $select_target_id = $request->select_target_id;

        // クエリビルダで検索を行う(カテゴリーid検索)
        $query = Video::query();
        if (isset($select_target_id)) {
            $query->where('target_id', $select_target_id);
        }

        // 並べ替えてページネイトする
        $searches = $query->orderByRaw('id asc')->paginate(50);

        // DBに登録されているtargetを取得する(Viewのプルダウンリストで使用)
        $targetGrades = Target::all();

        // viewに渡すデータ
        $params = [
            'searches' => $searches,
            'targetGrades' => $targetGrades,
            'select_target_id' => $select_target_id,
        ];
        return $params;
    }

}
