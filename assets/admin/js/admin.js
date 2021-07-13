$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    fetch_subject();

    function fetch_subject(){

        $.ajax({
            processData: false,
            contentType: false,
            type: 'GET',
            url : 'get_subject',
            success: function(data) {
                
                $('#subject_name').html(data);
    
            }
        })
    }

    $('#subject_name').on('change', function() {

        //alert("Working");
        var subject_id = this.value;
        var formdata = new FormData();
        // alert(subject_id);
        formdata.append('subject_id', subject_id);

        $.ajax({
            processData: false,
            contentType: false,
            type: 'post',
            data: formdata,
            url: 'get_topic',
            success: function(data) {

                $('#topic_name').html(data);


            }
        })

    });


})


// Delete A Subject
function subject_delete(id){
    var conf = confirm('Are You Sure to delete this subject?');

    if (conf==true)
    {
        $.ajax({
            processData: false,
            contentType:false,
            type: 'GET',
            url: 'delete-subject/' +id,
            success:function(data)
            {
                alert('Subject Deleted Successfully');
                location.reload();
            }
        })
    }
}


// Change Subject Active Status

function subject_active_status(id){

    $.ajax({
        processData: false,
        contentType:false,
        type : 'GET',
        url : 'subject_active_status/' +id,
        success: function(data){

        }
    })

}



// Delete A Topic
function topic_delete(id){
    var conf = confirm('Are You Sure');

    if (conf==true)
    {
        $.ajax({
            processData: false,
            contentType:false,
            type: 'GET',
            url: 'delete-subject/' +id,
            success:function(data)
            {
                alert('Topic Deleted Successfully');
                location.reload();
            }
        })
    }
}


// Change Topic Active Status

function topic_active_status(id){

    $.ajax({
        processData: false,
        contentType:false,
        type : 'GET',
        url : 'topic_active_status/' +id,
        success: function(data){

        }
    })

}
