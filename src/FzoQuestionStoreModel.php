<?php
/**
 * Created by PhpStorm.
 * User: gemor
 * Date: 2020/4/24
 * Time: 17:04
 */

namespace FzoQuestionStore;
use Illuminate\Database\Eloquent\Model;

class FzoQuestionStoreModel extends Model {

    protected $fillable = ['title,content,category,sort'];
    protected $table = 'question_store';
}