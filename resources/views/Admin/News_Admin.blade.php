@extends('Admin.Admin')
@section("Admin.Content_Admin")
            
        <section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="header">
                                    NEWS
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
                                        <th style="width: 3%">ID</th>
                                        <th style="width: 3%">ID USER</th>
                                        <th style="width: 10%;">IMAGE</th> 
                                        <th style="width: 15%;">TITLE</th>
                                        <th style="width: 20%;">DESCRIPTION</th>
                                        <th style="width: 34%;">CONTENT</th> 
                                        <th style="width: 3%">CATEGORY ID NEWS</th>            
                                        <th>EDIT/DELETE</th>
                                </thead>
                                <tbody>
                                    @foreach($news as $new)
                                        <tr id="row{{$new->id }}">
                                            <div id="row1{{$new->id }}">
                                                <td id="id{{$new->id }}">{{$new->id }}</td>
                                                <td id="id_user{{$new->id }}">{{$new->id_user }}</td>
                                                <td id="image{{$new->id}}"><img id="img{{$new->id}}" src="images/news/{{$new->image}}" style="width: 100px; height: 100px"></td>
                                                <td id="title{{ $new->id }}">{{ $new->title }}</td>
                                                <td id="description{{ $new->id }}">{{ $new->description }}</td>
                                                <td id="content{{ $new->id }}">{{ $new->content }}</td>
                                                <td id="category_id{{ $new->id }}">{{ $new->Category_ID }}</td>
                                                <td>
                                                    <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $new->id  }}" onclick="editRow({{ $new->id }})"></button>
                                                    <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $new->id  }}" onclick="delete_row('{{ $new->id  }}');"></button>
                                                </td>
                                            </div>
                                        </tr>

                                      
                                    @endforeach
                                </tbody>
                            </table>    
                                {{-- <button type="button" class="btn btn-success" style="height:40px;width: 150px;  float:right; border-radius: 5px; margin-top: 25px;" id="viewpdf_allproduct">Xuất file pdf</button>  --}}  

                                 
                            {{-- <div>{{  $news->links() }}</div> --}}
                        
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

                        var id = $row.find("td:nth-child(4)").text();

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
                        // var image = $('#img'+id).attr("src");
                        var route="{{ route('DeleteNews') }}";
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

    </script>
@endsection