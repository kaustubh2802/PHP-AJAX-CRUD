<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP AJAX CRUD</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->





    <!-- Modal -->
<div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data Using jQuery Ajax in Php without page reload</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="error-message">

                </div>
            </div>

            <div class="col-md-6">
                <label for="">First Name</label>
                <input type="text" class="form-control fname">
            </div>

            <div class="col-md-6">
                <label for="">Last Name</label>
                <input type="text" class="form-control lname">
            </div>

            <div class="col-md-6">
                <label for="">class</label>
                <input type="text" class="form-control class">
            </div>


            <div class="col-md-6">
                <label for="">section</label>
                <input type="text" class="form-control section">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Day 2: PHP -AJAX - CRUD | how to store data without page reload using jquery ajax in php
                    <!-- Day 1: Php Ajax Crud | how to fetch data from database from JQuery AJAX -->
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#Student_AddModal">
  Add</button></h4>



                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>class</th>
                            <th>section</th>
                            <th>Action</th>
                            </tr>
                        </thead>

                        <tbody class="studentdata">
                            


                        </tbody>
                     
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

 
<!-- https://code.jquery.com/jquery-3.7.1.min.js 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 


    <script>
        $(document).ready(function (){
            getdata(); 
            
            $('.student_add_ajax').click(function (e){
                e.preventDefault();

                var fname = $('.fname').val();
                var lname = $('.lname').val();
                var stud_class = $('.class').val();
                var section = $('.section').val();


                if(fname != '' & lname != '' & stud_class != '' & section = '' )
                {
                        $.ajax({
                            type: "POST",
                            url: "ajax-crud/code.php",
                            data: {
                                'checking_add':true,
                                'fname': fname ,
                                'lname':lname ,
                                'class': stud_class,
                                'section': section,

                            },
                            success: function (response){
                                console.log(response);
                            }
                            });
                }
                else{
                    // console.log("Enter all fields.");
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                        <strong>Hey !</strong> Enter all fields.\
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                        </div>\
                    ');
                }
                
                
            });
            
        });

        function getdata()
        {
            $.ajax({
                type: "GET",
                url: "ajax-crud/fetch.php",
                success: function (response){
                    // console.log(response);
                    //  it prints selects all the record from table and display it in the console
                    $.each(response, function(key, value){
                        // console.log(value['fname']);
                        $('.studentdata').append('<tr>'+
                                '<td>'+value['id']+'</td>\
                                <td>'+value['fname']+'</td>\
                                <td>'+value['lname']+'</td>\
                                <td>'+value['class']+'</td>\
                                <td>'+value['section']+'</td>\
                                <td>\
                                <a href="" class="badge btn-info">View</a>\
                                <a href="" class="badge btn-primary">Edit</a>\
                                <a href="" class="badge btn-danger">Delete</a>\
                                </td>\
                                </tr>');

                    });
                }
            });
        }

    </script>
  </body>
</html>

===========
<?php



$conn = mysqli_connect("localhost","root","","phpcrud");
if(isset($POST['checking_add']))
{
    
    echo $fname= $_POST['fname'];
    echo $lname= $_POST['lname'];
    echo $class= $_POST['class'];
    echo $section= $_POST['section'];

    $query= "INSERT INTO students(fname,lname,class,section) VALUES('$fname','$lname','$class','$section')";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        echo $return = "stored successfullly";

    }
    else{
        echo $return = "Something went  wrong";
    }
}

?>
==============



<?php

// echo $return ="welcome kaustubh";
// database : phpcrud, table : students
$conn = mysqli_connect("localhost","root","","phpcrud");
$query = "SELECT * FROM students";
$query_run= mysqli_query($conn, $query);

$result_array = [];


if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $row)
    {
        array_push($result_array, $row);
    }
    header('Content-type: application/json');
    echo json_encode($result_array);
}
else
{
    echo $return = "<h4> No Record is Found</h4>";
}
?>