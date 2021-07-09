$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  

    // $('.category').on('change', function() {

    //     var category_id = this.value;
    //     var formdata = new FormData();
    //     formdata.append('category_id', category_id);

    //     $.ajax({
    //         processData: false,
    //         contentType: false,
    //         type: 'post',
    //         data: formdata,
    //         url: 'get_sub_category',
    //         success: function(data) {


    //             $('.sub_category').html(data);


    //         }
    //     })

    // });

  

})


// Delete A Subject
function subject_delete(id){
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
