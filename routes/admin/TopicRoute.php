<?php

use App\Http\Controllers\Topic\TopicController;

Route::get('admin/topics',[TopicController::class,'viewAllTopics']);
Route::get('admin/add-topic',[TopicController::class,'viewInsertTopic']);
