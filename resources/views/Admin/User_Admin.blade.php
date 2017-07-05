
        
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
                                        <th style="width: 25%;">EMAIL</th>            
                                        {{-- <th style="width: 22%; background-color: #ff7f00;">PASSWORD</th> --}}
                                        <th style="width: 15%;"> PHONE   </th>
                                        <th style="width: 30%;">ADDRESS</th>
                                        <th style="width: 5%">GROUP</th>
                                        <th>EDIT/DELETE</th>
                                </thead>
                                <tbody>
                                    @foreach($user as $users )
                                        <tr id="row{{$users->id}}">
                                            <div id="row1{{ $users->id }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td id="id{{$users->id}}">{{$users->id}}</td>
                                                {{-- <td id="image{{$users->id}}"><img src="images/{{ $users->image }}" style="width: 90px; height: 90px"></td> --}}
                                                <td id="name{{$users->id}}">{{$users->full_name}}</td>
                                                <td id="email{{$users->id}}">{{$users->email}}</td>
                                                {{-- <td id="password{{$users->id}}"><input type="password" value="{{$users->password}}"></td> --}}
                                                <td id="phone{{$users->id}}">{{$users->phone}}</td>
                                                <td id="address{{$users->id}}">{{$users->address}}</td>
                                                <td id="group{{$users->id}}">{{$users->group}}</td>
                                                <td>
                                                    <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $users->id  }}" onclick="editRow({{ $users->id }})"></button>
                                                    <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $users->id  }}" onclick="delete_row('{{ $users->id}}');"></button>
                                                </td>
                                            </div>
                                        </tr>

                                        <div id="editRowPro{{ $users->id }}" class="form">
                                            <p class="form_title">Edit User</p>
                                            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
                                            <form id="formEdit{{ $users->id }}" enctype="multipart/form-data" method="post" class="horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">ID</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{ $users->id }}" name="id" class="form-control" readonly >
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
                                                                <input type="text" name="edit_name" id="edit_name{{ $users->id }}" value="{{ $users->full_name }}" required=""  class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="email">Email</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="email" value="{{$users->email}}" name="edit_des" id="edit_email{{ $users->id }}" disabled="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="phone">Phone</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="{{$users->phone}}" name="edit_phone" id="edit_phone{{ $users->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="address">Address</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{$users->address}}" name="edit_address" id="edit_address{{ $users->id }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="group">Group</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{ $users->group }}" name="edit_group" id="edit_group{{ $users->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button  type="button" id="saveEdit" value="{{ $users->id }}" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
        
                                        
                                    
                                    @endforeach
                                </tbody>
                            </table>    
                                {{-- <button type="button" class="btn btn-success" style="height:40px;width: 150px;  float:right; border-radius: 5px; margin-top: 25px;" id="viewpdf_allproduct">Xuất file pdf</button>  --}}  

                            <div id="addRowPro" class="form">
                                <p class="form_title">Add User</p>
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
                                            <label class="email">Email</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="new_email" name="new_email" class="form-control" placeholder="Enter your email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="password">Password</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="new_password" name="new_password" class="form-control" placeholder="Enter your password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="phone">Phone</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="new_phone" name="new_phone" class="form-control" placeholder="Enter your phone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="address">Address</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="new_address" name="new_address" class="form-control" placeholder="Enter your address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label class="group">Group</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="new_group" name="new_group" class="form-control" placeholder="Enter your group">
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
                                        
                            <div>{{ $user->links() }}</div>
                        
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
                        var route="{{ route('Delete_User') }}";

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
                var email=document.getElementById("edit_email"+id).value;
                // var password=document.getElementById("edit_password"+id).value;
                var phone=document.getElementById("edit_phone"+id).value;
                var address=document.getElementById("edit_address"+id).value;
                var group=document.getElementById("edit_group"+id).value;

                var route=" {{ route('Edit_User') }} ";
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
                        document.getElementById("name"+id).innerHTML=name;
                        document.getElementById("email"+id).innerHTML=email;
                        // document.getElementById("password"+id).innerHTML=password;
                        document.getElementById("phone"+id).innerHTML=phone;
                        document.getElementById("address"+id).innerHTML=address;
                        document.getElementById("group"+id).innerHTML=group;
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
                var email=document.getElementById("new_email").value;
                // var password=document.getElementById("new_password").value;
                var phone=document.getElementById("new_phone").value;
                var address=document.getElementById("new_address").value;
                var group=document.getElementById("new_group").value;

                var flag = true;
                // if (name=='') {
                //     $('#name_err').text('Tên sản phẩm không được để trống');
                //     flag= false;
                // }
                // if (unit_price=='' || unit_price) {
                //     $('#name_err').text('Tên sản phẩm không được để trống');
                //     flag= false;
                // }
                var route="{{ route('Insert_User') }}";
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
                            var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td><td id='name"+id+"'>"+name+"</td><td id='email"+id+"'>"+email+"</td><td id='phone"+id+"'>"+phone+"</td><td id='address"+id+"'>"+address+"</td><td id='group"+id+"'>"+group+"</td><td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px;' id='edit_button"+id+"' onclick='editRow("+id+")'></button> <button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'></button></td></tr>                                 <div id='editRowPro"+id+"' class='form'>                                                                   <p class='form_title'>Edit User</p>                                                                        <a href='#' class='close'><img src='close.png' class='img-close' title='Close Window' alt='Close' /></a>   <form id='formEdit"+id+"' enctype='multipart/form-data' method='post'>                                     <input type='hidden' name='_token' value='{{ csrf_token() }}'>                                             <div class='row'><label>ID</label><input type='text' name='id' value='"+id+"' readonly></div>              <div class='row'><label>Name</label><input type='text' name='edit_name' id='edit_name"+id+"' value='"+name+"' required=''></div>                                                                                      <div class='row'><label> Email</label><input type='email' value='"+email+"' name='edit_des' id='edit_email"+id+"' disabled=''></div>                                                                                  <div class='row'><label>Phone</label><input type='number' value='"+phone+"' name='edit_phone' id='edit_phone"+id+"' required=''></div>                                                                   <div class='row'><label>Address</label><input type='text' value='"+address+"' name='edit_address' id='edit_address"+id+"'></div>                                                                             <div class='row'><label>Group</label><input type='text' value='"+group+"' name='edit_group' id='edit_group"+id+"' required=''></div><br><button  type='button' id='saveEdit' value='"+id+"' class='button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit' style='border-radius: 10px;''>  Save</button></form></div>";                        

                        document.getElementById("new_name").value="";
                        document.getElementById("new_email").value="";
                        document.getElementById("new_password").value="";
                        document.getElementById("new_phone").value="";
                        document.getElementById("new_address").value="";
                        document.getElementById("new_group").value="";
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



                            
