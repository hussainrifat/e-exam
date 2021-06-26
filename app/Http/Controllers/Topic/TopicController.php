<?php

namespace App\Http\Controllers\Topic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
     /**
     * @name viewAllSubjects
     * @role all Subjects view
     * @param
     * @return  view with compact array
     *
     */
    
    public function viewAllTopics()
    {
        return view('admin.topic.topics');
    }



    public function viewInsertTopic()
    {
        return view('admin.topic.add-topic');

    }
}
