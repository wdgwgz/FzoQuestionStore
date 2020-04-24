<?php
/**
 * Created by PhpStorm.
 * User: gemor
 * Date: 2020/4/24
 * Time: 16:56
 */

namespace FzoQuestionStore;

/**
 * 测试扩展，未完善
 *
 * Class FzoQuestionStore
 * @package FzoQuestionStore
 */
class FzoQuestionStore {

    function test(){
        return 'test';
    }

    /**
     * 获取所有内容 或者指定 栏目内容
     *
     * @param string $category_name
     * @return mixed
     */
    function getAll( $category_name = '', $limit = 50 ){

        $_m = FzoQuestionStoreModel::select(['title', 'content', 'category'])->orderBy('sort', 'desc');

        if ( $category_name ) {
            $_m->where('category_name', $category_name );
        }

        $result = $_m->limit( $limit )->get();
        
        return count( $result ) > 0 ? $result->toArray() : [];
    }

    /**
     * 获取所有栏目
     *
     * @return mixed
     *
     */
    function getAllCate(){
        $result = FzoQuestionStoreModel::select(\DB::raw("category, count(1) as total "))->groupBy('category')->get();
        return count( $result ) > 0 ? $result->toArray() : [];
    }

}