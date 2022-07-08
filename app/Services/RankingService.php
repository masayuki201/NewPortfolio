<?php

namespace App\Services;

use App\Models\Video;


class RankingService implements RankingServiceInterface
{
    public function getRankingPage($request)
    {
        // 全ての登録済み動画を「$setVideo」とする
        $viewCountRanking = [];
        $setVideo = Video::all();

        // YouTube APIを使用し、再生回数を取得する
        foreach ($setVideo as $onlyVideo) {
            $video = $onlyVideo;
            $key_name = config('app.key_name');
            $get_api_url = "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$video->url&fields=items%2Fstatistics&key=$key_name";
            $json = file_get_contents($get_api_url);
            $getData = json_decode($json, true);
            foreach ((array)$getData['items'] as $key => $gDat) {
                $viewCountRanking[] = $gDat['statistics']['viewCount'];
            }
        }

        // 再生回数の多い順（降順）に並び替える
        arsort($viewCountRanking);


        // 再生回数とその$videoをくっつける
        foreach ($viewCountRanking as $key => $video) {
            $video = Video::where('id', $key + 1)->first();
            $arrayVideo[] = $video;
        }

        //　動画を再生回数の多い順に並び替えた$arrayVideo、
        //  動画のidに+1を加えた$viewCountRankingを格納する。
        $videoRanking = [
            'arrayVideo' => $arrayVideo,
            'viewCountRanking' => $viewCountRanking,
        ];

        return ($videoRanking);
    }

}
