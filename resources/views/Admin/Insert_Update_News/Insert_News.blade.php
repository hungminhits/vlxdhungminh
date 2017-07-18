@extends('Admin.Admin')
@section('Admin.Content_Admin')
<section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 id="header">
                                        NEW NEWS
                                        {{-- <small>You can edit any columns except header/footer</small> --}}
                                </h2>
                            </div>
                            @if($id==0)
                                <div class="body" >     
                                    <form enctype="multipart/form-data"  id="add-form" method="post" action="{{route('InsertNews')}}">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                 <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Title:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="" name="title" class="form-control" style="border-top: 1px solid black;" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="image">Image:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" value="" name="image" id="image" class="form-control" style="border-top: 1px solid black;" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Description</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea name="description"  id="ckeditor1" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Content:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea name="content"  id="ckeditor" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="" ></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                      CKEDITOR.replace( 'ckeditor');
                                                    </script>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Loại Tin tức</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select id="category_id_news" name ="category_id_news">
                                                                    @foreach($typenews as $type)
                                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             <button  type="submit" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                             
                                    </form>                 
                                </div>
                            @else
                                <div class="body" >     

                                <form enctype="multipart/form-data"  id="add-form" method="post" action="{{route('UpdateNews',"id=$id")}}">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Title:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" value="{{$news[0]->title}}" name="title" class="form-control" style="border-top: 1px solid black;" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="image">Image:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="file" name="image" id="image" class="form-control" style="border-top: 1px solid black;" > <img  width="250px" height="250px;" src="images/news/{{$news[0]->image}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Description</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea name="description" id="ckeditor1" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="">{{$news[0]->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Content:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea name="content"  id="ckeditor" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="" >{{$news[0]->content}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    var editor = CKEDITOR.replace( 'ckeditor');
                                                </script>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Loại Tin tức</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select id="category_id_news" name ="category_id_news">
                                                                @foreach($typenews as $type)
                                                                    <option  id="{{$type->id}}" value="{{$type->id}}">{{$type->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <script type="text/javascript">
                                                            var id={{$news[0]->Category_ID}};
                                                            $('#'+id).attr('selected','selected');
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                         <button  type="submit" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                         
                                </form>                 
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
</section>
                                        
@endsection