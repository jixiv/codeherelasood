$(function(){
    var facultyObject = $('#faculty');
    var departmentObject = $('#department');

    //$("#faculty").text(facultyObject ? ("Price of: " + facultyObject + " " + "$" + facultyObject) : "");

    //console.log(this.facultyObject);

    facultyObject.on('change', function(){

        var facultyId = $(this).val();
        var id = facultyId.split("|");
        //var facultyId = JSON.parse( $(this).val() );
        //console.log(faculty);
  
            departmentObject.html('<option value="">.Select.</option>');
      
        $.get('get_department.php?fac_id=' + id[0], function(data){
            
            var result = JSON.parse(data);
            //console.log(result);
            $.each(result, function(index, item){

                departmentObject.append(
                    $('<option value="$result["dept_name"]"></option>').val(item.dept_name).html(item.dept_name)

                );
            });
        });
    });
});


    // facultyObject.append(
    //$('<option value="$result["fac_name"]"></option>').val(item.fac_name).html(item.fac_name)
    //);