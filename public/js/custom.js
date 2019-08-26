$(document).ready(function() {
    $('.select2').select2();
});

function show_country($id){
    $('#country option').remove();
    $('#state option').remove();
    $('#city option').remove();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/country',
        data : {id: $id},
        success: function (data){
            all_option = '<option value="0">Select Country</option>';
            data.forEach(element => {
                all_option = all_option + '<option value="' + element['id'] + '">' + element['name']+'</option>';    
            });
            
            $('#country').append(all_option);
            
        },
        error: function(data){

        }
    });
}
function show_state($id){
    $('#state option').remove();
    $('#city option').remove();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/state',
        data : {id: $id},
        success: function (data){
            all_option = '<option value="0">Select State</option>';
            data.forEach(element => {
                all_option = all_option + '<option value="' + element['id'] + '">' + element['name']+'</option>';    
            });
            
            $('#state').append(all_option);
            
        },
        error: function(data){

        }
    });
}
function show_city($id){
    $('#city option').remove();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/city',
        data : {id: $id},
        success: function (data){
            all_option = '<option value="0">Select City</option>';
            data.forEach(element => {
                all_option = all_option + '<option>' + element['name']+'</option>';    
            });
            
            $('#city').append(all_option);
            
        },
        error: function(data){

        }
    });

}
