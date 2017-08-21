$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);                
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Department first</option>');
            
        }
    });
});
