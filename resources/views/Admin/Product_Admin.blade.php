
        
            @extends("Admin.Admin")
            @section('Admin.Content_Admin')
            
        <section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 id="header">
                                    PRODUCT
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
                            
                            <input type="hidden" id="typeRequest" value="{{ $typepro }}">
                           
                            @if($typepro==0)
                             <table border="1" class="table table-striped table-nonfluid" align="center" id="product_table" >
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                        <th style="width: 3%; background-color: #ff7f00;">ID</th>
                                        <th style="width: 8%; background-color: #ff7f00;" >IMAGE</th>
                                        <th style="width: 25%; background-color: #ff7f00;">NAME</th>
                                        <th style="width: 8%; background-color: #ff7f00;">TYPE PRODUCT</th>            
                                        <th style="width: 22%; background-color: #ff7f00;">DESCRIPTION</th>
                                        <th style="width: 8%; background-color: #ff7f00;">  UNIT PRICE   </th>
                                        <th style="width: 10%; background-color: #ff7f00;">PROMOTION PRICE</th>
                                        <th style="width: 5%;background-color: #ff7f00;">UNIT</th>
                                        <th style="background-color: #ff7f00;">EDIT/DELETE</th>
                                </thead>
                                <tbody>
                                    @foreach($product as $pro )
                                        <tr id="row{{$pro->id}}">
                                            <div id="row1{{ $pro->id }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td id="id{{$pro->id}}">{{$pro->id}}</td>
                                                <td id="image{{$pro->id}}"><img src="images/{{ $pro->image }}" style="width: 90px; height: 90px"></td>
                                                <td id="name{{$pro->id}}">{{$pro->name}}</td>
                                                <td id="type_name{{$pro->id}}">{{$pro->type_name}}</td>
                                                <td id="description{{$pro->id}}">{{$pro->description}}</td>
                                                <td id="unit_price{{$pro->id}}">{{number_format($pro->unit_price)}} vnd</td>
                                                <td id="pro_price{{$pro->id}}">{{number_format($pro->promotion_price)}} vnd</td>
                                                
                                                <td id="unit{{$pro->id}}">{{$pro->unit}}</td>
                                                {{-- <td>{{$pro->created_at}}</td> --}}
                                                {{-- <td id="updated_at{{$pro->id}}">{{$pro->updated_at}}</td> --}}
                                                <td>
                                                    <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $pro->id  }}" onclick="editRow({{ $pro->id }})"></button>
                                                    <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $pro->id  }}" onclick="delete_row('{{ $pro->id}}');"></button>
                                                </td>
                                            </div>
                                        </tr>
                                        
                                        
                                        {{-- Edit Product --}}
                                        <div id="editRowPro{{ $pro->id }}" class="form">
                                            <p class="form_title">Edit Product</p>
                                            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
                                            <form id="formEdit{{ $pro->id }}" enctype="multipart/form-data" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">ID</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{ $pro->id }}" name="id" class="form-control" readonly >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="name">Name Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="edit_name" id="edit_name{{ $pro->id }}" value="{{ $pro->name }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="type">Type Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="selectpicker form-control" name="edit_type" id="edit_type{{ $pro->id }}" >
                                                                    @foreach($type_product as $type)
                                                                        <option name="{{ $type->name }}" value="{{ $type->id }}" >{{ $type->name }}</option>
                                                                        @if($pro->type_name==$type->name )
                                                                            <option selected="selected" name="{{ $type->name }}"" value="{{ $type->id }}" >{{ $type->name }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
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
                                                                <input type="text" value="{{$pro->description}}" name="edit_des" id="edit_description{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="unit-price">Unit Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="{{$pro->unit_price}}" name="edit_unit_price" id="edit_unit_price{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="romotion-price">Promotion Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="{{$pro->promotion_price}}" name="edit_pro_price" id="edit_pro_price{{ $pro->id }}" required="" class="form-control">
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
                                                                <input type="file" value="{{$pro->image}}" name="edit_image" id="edit_image{{ $pro->id }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="unit">Unit</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{$pro->unit}}" name="edit_unit" id="edit_unit{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button  type="button" id="saveEdit" value="{{ $pro->id }}" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        {{-- End Edit --}}
                                    @endforeach
                                </tbody>
                            </table>    
                                <button type="button" class="btn btn-success" style="height:40px;width: 150px;  float:right; border-radius: 5px; margin-top: 25px;" id="viewpdf_allproduct">Xuất file pdf</button>   

                            @else
                             <table border="1" class="table table-striped table-nonfluid" align="center" id="product_table" >
                                <thead>
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                                    <th style="width: 5%;; background-color: #ff7f00;">ID</th>
                                    <th style="width: 8%; background-color: #ff7f00;">IMAGE</th>
                                    <th style="width: 30%; background-color: #ff7f00;">NAME</th>           
                                    <th style="width: 30%; background-color: #ff7f00;">DESCRIPTION</th>
                                    <th style="width: 8%; background-color: #ff7f00;">  UNIT PRICE   </th>
                                    <th style="width: 5%; background-color: #ff7f00;">PROMOTION PRICE</th>
                                    <th style="width: 5%; background-color: #ff7f00;">UNIT</th>
                                    <th style="width: 9%; background-color: #ff7f00;">EDIT/DELETE</th>
                                </thead>
                                <tbody>
                                    @foreach($product as $pro )
                                        <tr id="row{{$pro->id}}">
                                            <div id="row1{{ $pro->id }}">
                                                <td id="id{{$pro->id}}">{{$pro->id}}</td>
                                                <td id="image{{$pro->id}}"><img src="images/{{ $pro->image }}" style="width: 90px; height: 90px"></td>
                                                <td id="name{{$pro->id}}">{{$pro->name}}</td>
                                                <td id="description{{$pro->id}}">{{$pro->description}}</td>
                                                <td id="unit_price{{$pro->id}}">{{number_format($pro->unit_price)}} vnd</td>
                                                <td id="pro_price{{$pro->id}}">{{number_format($pro->promotion_price)}} vnd</td>
                                                <td id="unit{{$pro->id}}">{{$pro->unit}}</td>
                                                {{-- <td>{{$pro->created_at}}</td> --}}
                                                {{-- <td id="updated_at{{$pro->id}}">{{$pro->updated_at}}</td> --}}
                                                <td>
                                                    <button class="btn btn-info btn-lg glyphicon glyphicon-hand-right" style="border-radius: 10px;" id="edit_button{{ $pro->id  }}" onclick="editRow({{ $pro->id }})"></button>
                                                    <button class="btn btn-warning btn-lg glyphicon glyphicon-trash" style="border-radius: 10px" id="delete_button{{ $pro->id  }}" onclick="delete_row('{{ $pro->id}}');"></button>
                                                </td>
                                            </div>
                                        </tr>
                                        {{-- Edit Product --}}
                                        <div id="editRowPro{{ $pro->id }}" class="form">
                                            <p class="form_title">Edit Product</p>
                                            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
                                            <form id="formEdit{{ $pro->id }}" enctype="multipart/form-data" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">ID</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{ $pro->id }}" name="id" class="form-control" readonly >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" >
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="name">Name Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="edit_name" id="edit_name{{ $pro->id }}" value="{{ $pro->name }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" id="rowType{{ $pro->id }}">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="type">Type Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="hidden" name="edit_type" value="{{ $pro->id_type }}" class="form-control">
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
                                                                <input type="text" value="{{$pro->description}}" name="edit_des" id="edit_description{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="unit-price">Unit Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="{{$pro->unit_price}}" name="edit_unit_price" id="edit_unit_price{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="romotion-price">Promotion Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="{{$pro->promotion_price}}" name="edit_pro_price" id="edit_pro_price{{ $pro->id }}" required="" class="form-control">
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
                                                                <input type="file" value="{{$pro->image}}" name="edit_image" id="edit_image{{ $pro->id }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="unit">Unit</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="{{$pro->unit}}" name="edit_unit" id="edit_unit{{ $pro->id }}" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button  type="button" id="saveEdit" value="{{ $pro->id }}" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- End Edit --}}
                                    @endforeach
                                

                                </tbody>    
                            </table>
                                 <button type="button" class="btn btn-success" style="height:40px;width: 150px;  float:right; border-radius: 5px; margin-top: 25px;" id="viewpdf_all{{ $typepro }}">Xuất file pdf</button>
                            @endif
                            
                            {{-- Add Product --}}
                            <div id="addRowPro" class="form">
                                            <p class="form_title">Add Product</p>
                                            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>


                                            <form id="new_form" enctype="multipart/form-data" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="name">Name Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="new_name" id="new_name" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="type">Type Product</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="selectpicker form-control" name="new_type" id="new_type" >
                                                                    @foreach($type_product as $type)
                                                                        <option name="{{ $type->name }}" class="{{ $type->id }}" value="{{ $type->id }}">{{ $type->name }}</option>
                                                                    @endforeach
                                                                </select> 
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
                                                        <label class="unit-price">Unit Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" name="new_unit_price" id="new_unit_price" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="romotion-price">Promotion Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" name="new_pro_price" id="new_pro_price" class="form-control">
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
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="unit">Unit</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="new_unit" id="new_unit" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button type="button" id="saveAdd" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save" style="border-radius: 10px;">  Insert</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        {{-- End Add --}}
                            <div>{{ $product->links() }}</div>
                        
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
            $("#viewpdf_allproduct").click(function(){

                 var route="{{route('viewPDF','type=0')}}";
                  window.location.replace(route);
            });
             $("#viewpdf_all"+{{$typepro}}).click(function(){
                var typepro={{$typepro}}
                var route="{{route('viewPDF','type=typepro')}}";
                route=route.replace('typepro',typepro);
                window.location.replace(route);
            });
            function editRow(id){
                var typeRequest = document.getElementById("typeRequest").value;
                if (typeRequest!=0) {
                    $('#rowType'+id).hide();
                }
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
                        var image = $('#row'+id).find('td:nth-child(7)').text();
                        var route="{{ route('Delete_Product') }}";

                        $.ajax({
                        url:route,
                        type:'get',
                        data:{
                            id:id,
                            imageFile:image,
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
                var typeRequest = document.getElementById("typeRequest").value;
                if (typeRequest==0) {
                    var type= $("#edit_type"+id).find(":selected").attr('name');
                }
                var name=document.getElementById("edit_name"+id).value;
                var description=document.getElementById("edit_description"+id).value;
                var unit_price=document.getElementById("edit_unit_price"+id).value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
;
                var pro_price=document.getElementById("edit_pro_price"+id).value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
;
                var image=document.getElementById("edit_image"+id).value.toString();
                image=image.substr(12);
                var unit=document.getElementById("edit_unit"+id).value;

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
                        document.getElementById("name"+id).innerHTML=name;
                        if (typeRequest==0) {
                            document.getElementById("type_name"+id).innerHTML=type;
                        }
                        document.getElementById("description"+id).innerHTML=description;
                        document.getElementById("unit_price"+id).innerHTML=unit_price+" vnd";
                        document.getElementById("pro_price"+id).innerHTML=pro_price+" vnd";
                        document.getElementById("image"+id).innerHTML="<img src='images/"+image+"' style='width: 90px; height: 90px' />";
                        document.getElementById("unit"+id).innerHTML=unit;
                        // document.getElementById("updated_at"+id).innerHTML=updated_at[0]['updated_at'];
                        document.getElementById("edit_button"+id).style.display="inline";
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
                var typeRequest = document.getElementById("typeRequest").value;
                if(typeRequest==0){
                    var type=$("#new_type").find(":selected").attr('name');
                }
                var description=document.getElementById("new_description").value;
                var unit_price=document.getElementById("new_unit_price").value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
;
                var pro_price=document.getElementById("new_pro_price").value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
;
                var image=document.getElementById("new_image").value.toString();
                image=image.substr(12);
                var unit=document.getElementById("new_unit").value;

                var flag = true;
                // if (name=='') {
                //     $('#name_err').text('Tên sản phẩm không được để trống');
                //     flag= false;
                // }
                // if (unit_price=='' || unit_price) {
                //     $('#name_err').text('Tên sản phẩm không được để trống');
                //     flag= false;
                // }
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
                        var id=data[0]['id'];
                        var created_at=data[0]['created_at'];
                        var updated_at=data[0]['updated_at'];
                        var table=document.getElementById("product_table");
                        var table_len=(table.rows.length)-1;
                        if(typeRequest!=0){ 
                            var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td><td id='image"+id+"'><img src='images/"+image+"' style='width: 90px; height: 90px'/></td><td id='name"+id+"'>"+name+"</td><td id='description"+id+"'>"+description+"</td><td id='unit_price"+id+"'>"+unit_price+"</td><td id='pro_price"+id+"'>"+pro_price+"</td><td id='unit"+id+"'>"+unit+"</td><td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px;' id='edit_button"+id+"' onclick='editRow("+id+")'></button> <button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'></button></td></tr>";
                        }else{
                            var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='id"+id+"'>"+id+"</td><td id='image"+id+"'><img src='images/"+image+"' style='width: 90px; height: 90px'/></td><td id='name"+id+"'>"+name+"</td><td id='type_name"+id+"'>"+type+"</td><td id='description"+id+"'>"+description+"</td><td id='unit_price"+id+"'>"+unit_price+" vnd</td><td id='pro_price"+id+"'>"+pro_price+" vnd</td><td id='unit"+id+"'>"+unit+"</td><td><button class='btn btn-info btn-lg glyphicon glyphicon-hand-right' style='border-radius: 10px;' id='edit_button"+id+"' onclick='editRow("+id+")'></button> <button class='btn btn-warning btn-lg glyphicon glyphicon-trash' style='border-radius: 10px' id='delete_button"+id+"' onclick='delete_row("+id+");'></button></td></tr>";
                        }
                        

                        document.getElementById("new_name").value="";
                        document.getElementById("new_type").value="";
                        document.getElementById("new_description").value="";
                        document.getElementById("new_unit_price").value="";
                        document.getElementById("new_pro_price").value="";
                        document.getElementById("new_image").value="";
                        document.getElementById("new_unit").value="";
                        alert('Thêm sản phẩm thành công');
                        var formBox = $('#addRowPro');
                        $(formBox).fadeOut('400', function() {
                            $('#over').remove(); 
                        });
                    },
                    error:function() {
                        alert('thất bại');
                    },

                });
                
            });

    </script>
    @endsection



                            
