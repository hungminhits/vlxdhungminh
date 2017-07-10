
            @extends("Admin.Admin")
            @section('Admin.Content_Admin')
            
        <section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="header">
                                    USER
                                    {{-- <small>You can edit any columns except header/footer</small> --}}
                            </h2>
                        </div>
                        <div class="body">     

                        <div>
                            <button id="addRow" onclick="addRow()"  class="btn btn-primary glyphicon glyphicon-plus-sign" style="height: 60px; width: 60px; border-radius: 10px"></button>
                        </div> 
                        <div style="float: right;">
                            <input type="text" id="search" placeholder="Search" style="width: 200px; height: 50px"></input>
                            <br><br>
                        </div>
                        <br>
                             <table border="1" class="table table-admin table-striped table-nonfluid" align="center" id="product_table" >
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                        <th style="width: 5%">ID</th>
                                        {{-- <th style="width: 8%; background-color: #ff7f00;" >IMAGE</th> --}}
                                        <th style="width: 20%;">NAME</th>
                                        <th style="width: 20%;">Description</th>
                                        <th style="width: 25%;">Image</th>            
                                        {{-- <th style="width: 22%; background-color: #ff7f00;">PASSWORD</th> --}}
                                        <th>EDIT/DELETE</th>
                                </thead>
                                <tbody>
                                    @foreach($typeproduct as $tp)
                                        <tr id="row{{$tp->id }}">
                                            <div id="row1{{$tp->id }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td id="id{{$tp->id }}">{{$tp->id }}</td>
                                                 <td id="name{{ $tp->id }}">{{ $tp->name }}</td>
                                                {{-- <td id="image{{$users->id}}"><img src="images/{{ $users->image }}" style="width: 90px; height: 90px"></td> --}}
                                                <td id="Description{{ $tp->id }}">{{ $tp->description }}</td>
                                                <td id="Image{{$tp->id}}">{{$tp->image}}</td>
                                                <td>
                                                    <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $tp->id  }}" onclick="editRow({{ $tp->id }})"></button>
                                                    <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $tp->id  }}" onclick="delete_row('{{ $tp->id  }}');"></button>
                                                </td>
                                            </div>
                                        </tr>

                                        <div id="editRowPro{{ $tp->id  }}" class="form">
                                            <p class="form_title">Edit Type</p>
                                            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
                                            <form id="formEdit{{ $tp->id  }} enctype="multipart/form-data" method="post" class="horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">ID</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{ $tp->id  }}" name="id" class="form-control" readonly >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="name">Name</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="edit_name" id="edit_name{{ $tp->id  }}" value="{{ $tp->name }}" required=""  class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                   <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="image">Image</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" value="{{$tp->image}}" name="edit_image" id="edit_image{{$tp->id}}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="description">Description</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{$tp->description}}" name="edit_des" id="edit_description{{ $tp->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button  type="button" id="saveEdit" value="{{ $tp->id }}" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>    
                                {{-- <button type="button" class="btn btn-success" style="height:40px;width: 150px;  float:right; border-radius: 5px; margin-top: 25px;" id="viewpdf_allproduct">Xuất file pdf</button>  --}}  

                            <div id="addRowPro" class="form">
                                <p class="form_title">Add Type</p>
                                <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
                                <form enctype="multipart/form-data" method="post" id="new_form" name="new_form" class="horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="name">Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="new_name" name="new_name" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="description">Description</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="new_des" id="new_description" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                   
                                  <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="image">Image</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" name="new_image" id="new_image" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="button" id="saveAdd" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;">  Save</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>       
                            <div>{{  $typeproduct->links() }}</div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            function editRow(id){
                var formBox = $('#editRowPro'+id);
                $(formBox).fadeIn("slow");

                // thêm phần tử id="over" vào cuối thẻ body
                $('body').append('<div id="over"></div>');
                $('#over').fadeIn(300);
        
            }
            function addRow(){
                var formBox = $('#addRowPro');
                $(formBox).fadeIn("slow");

                // thêm phần tử id="over" vào cuối thẻ body
                $('body').append('<div id="over"></div>');
                $('#over').fadeIn(300);
        
            }
             $(document).on('click', "a.close, #over", function() { 
                $('#over, .form').fadeOut(300 , function() {
                    $('#over').remove();  
                }); 
                return false;
            });

            $("#search").on("keyup", function() {
                var value = $(this).val();

                $("table tr").each(function(index) {
                    if (index !== 0) {

                        $row = $(this);

                        var id = $row.find("td:nth-child(2)").text();

                        if (id.indexOf(value) !== 0) {
                            $row.hide();
                            
                        }
                        else {
                            $row.show();
                            $('#new_row').hide();
                        }
                    }
                });
            });

            function delete_row(id)
            {
                ssi_modal.confirm({
                content: 'Are you sure you want to exit?',
                okBtn: {
                className:'btn btn-primary'
                },
                cancelBtn:{
                className:'btn btn-danger'
                }
                },function (result) {
                    if(result)
                    {
                        // var image = $('#row'+id).find('td:nth-child(7)').text();
                        var route="{{ route('Delete_TypeProduct') }}";

                        $.ajax({
                        url:route,
                        type:'get',
                        data:{
                            id:id,
                            // imageFile:image,
                        },
                        success:function() {  
                             $('#row'+id).hide();
                            alert('Xóa thành công');
                        }
                        });
                        
                    }
                    else
                        ssi_modal.notify('error', {content: 'Result: ' + result});
                }
            );
            }

            $('.saveEdit').click(function() {
                var id=$(this).val();
                var name=document.getElementById("edit_name"+id).value;
                var description=document.getElementById("edit_description"+id).value;
                // var password=document.getElementById("edit_password"+id).value;
                var image=document.getElementById("edit_image"+id).value.toString();
                image=image.substr(12);
                var route=" {{ route('Edit_Product') }} ";
                var form = $('form#formEdit'+id)[0];
                var form_data = new FormData(form);
                
                $.ajax
                ({
                    type:'post',
                    url:route,
                    data:form_data,
                    processData: false,
                    contentType: false,
                    success:function() {
                        // var updated_at = data;
                        document.getElementById("description"+id).innerHTML=description;
                        document.getElementById("name"+id).innerHTML=name;
                        // document.getElementById("password"+id).innerHTML=password;
                        document.getElementById("image"+id).innerHTML="<img src='images/"+image+"' style='width: 90px; height: 90px' />";
                        // document.getElementById("edit_button"+id).style.display="inline";
                        alert('Cập nhập thành công');
                        
                    },
                    error:function() {
                       alert('lỗi khi cập nhập');
                    },
                });
                var formBox = $('#editRowPro'+id);
                        $(formBox).fadeOut('400', function() {
                            $('#over').remove(); 
                        });
            
            });
            $('#saveAdd').click(function() 
            {
                var name=document.getElementById("new_name").value;
                var description=document.getElementById("new_description").value;
                // var password=document.getElementById("new_password").value;
               
                var image=document.getElementById("new_image").value.toString();
                image=image.substr(12);

                var route="{{ route('Insert_Product') }}";
                var form = $('form#new_form')[0];
                var form_data = new FormData(form);
                $.ajax
                ({
                    type:'post',
                    url:route,
                    processData: false,
                    contentType: false,
                    data:form_data,
                    success:function(data) {
                        // console.log(data);
               
                        var id=data;
                        var table=document.getElementById("product_table");
                        var table_len=(table.rows.length);
                            var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td></td><td id='image"+id+"'><img src='images/"+image+"' style='width: 90px; height: 90px'/></td><td id='name"+id+"'>"+name+"</td><td id='description"+id+"'>"+description+"</td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px;' id='edit_button"+id+"' onclick='editRow("+id+")'></button> <button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'></button></td></tr>                                 <div id='editRowPro"+id+"' class='form'>                                                                   <p class='form_title'>Edit Type</p>                                                                        <a href='#' class='close'><img src='close.png' class='img-close' title='Close Window' alt='Close' /></a>   <form id='formEdit"+id+"' enctype='multipart/form-data' method='post'>                                     <input type='hidden' name='_token' value='{{ csrf_token() }}'>                                             <div class='row'><label>ID</label><input type='text' name='id' value='"+id+"' readonly></div>              <div class='row'><label>Name</label><input type='text' name='edit_name' id='edit_name"+id+"' value='"+name+"' required=''></div>                                                                                      <div class='row'><label> description</label><input type='email' value='"+description+"' name='edit_des' id='edit_email"+id+"' disabled=''></div>                                                                                  <div class='row'><label>Image</label><input type='file' value='"+image+"' name='edit_image' id='edit_image"+id+"' required=''></div>                                                           <br><button  type='button' id='saveEdit' value='"+id+"' class='button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit' style='border-radius: 10px;''>  Save</button></form></div>";                        

                        document.getElementById("new_name").value="";
                        document.getElementById("new_description").value="";
                        document.getElementById("new_image").value="";
                        alert('Thêm user thành công');
                        var formBox = $('#addRowPro');
                        $(formBox).fadeOut('400', function() {
                            $('#over').remove(); 
                        });
                    },
                    error:function() {
                        alert('Thêm user thất bại');
                    },

                });
                
            });

    </script>
    @endsection



                            


                            