
$(document).ready(function()
{
 	var sids = getCookie('sids');

 	if(sids == null)
 	{
 		setCookie('sids','',7);
 		sids ='';
 	}
 		
	  $('#mua_hang').click(function()
	  {
	  	var soluonghang = 0;
	  	
	    var id=$(this).attr('value');
	    var name =  $('a#name_sanpham'+id).attr('value');
	    var image = $('img#image'+id).attr('src');
	    var route="{{route('buy','id_sp')}}";
  		route = route.replace('id_sp',id); 
	    var soluonghang=$('#soluong').attr('soluong');
      	soluonghang=parseInt(soluonghang+$('#id'+id).attr('soluong'))+1;
      	alert(soluonghang);
	    var aids = []; // array for id
	    if(sids == '')
	    {
	    	aids.push(id);
	    	aids.push(name);
	    	aids.push(image);
	    	aids.push(soluonghang);
	    	
	    	

	    	setCookie('sids',aids,7);// a week
	    }
	    else
	    {
	    	aids = sids.split(',');
	    	//remove dupicate
	    	for(var i =0 ; i < aids.length;i++)
	    	{
	    		if(id == aids[i])
	    		{
	    			return;
	    		}
	    	}
	    	 aids.push(id);
	    	 aids.push(name);
	    	 aids.push(image);
	    	
            setCookie('sids',aids.toString(),7);
	    }

	    
	  });
 });
	

  
  // /$('#myModal').append("<div class='modal fadei in' role='dialog' style='display: none;''><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-label='Close' style='position: relative; z-index: 9;'><span aria-hidden='true'>×</span></button><h4 class='modal-title'><span><i class='fa fa-check' aria-hidden='true'></i></span>Thêm vào giỏ hàng thành công</h4></div><div class='modal-body'><div class='media'><div class='media-left'><div class='thumb-1x1'><img width='70px' src='//bizweb.dktcdn.net/thumb/small/100/069/071/products/3.jpg' alt='Căn hộ 3PN  ở Pearl Plaza'></div></div><div class='media-body'><div class='product-title'>Căn hộ 3PN  ở Pearl Plaza</div><div class='product-new-price'><span>3.000.000.000 đ</span></div></div></div><button class='btn btn-block btn-outline-red' data-dismiss='modal'>Tiếp tục mua hàng</button><a href='/checkout' class='btn btn-block btn-radius'>Tiến hành thanh toán »</a></div></div></div></div>")

  


  // var id=$(this).attr('value');
  // var image = $('img#image'+id).attr('src');
  // var name =  $('a#name_sanpham'+id).attr('value');
  // var soluong = 0;
  // var sp = [];
  // sp[id] = id;
  // sp[image] = image;
  // sp[name] = name;
  // sp[sl] = soluong;


  //Dom HTMLM Image

  //var route="{{route('buy','id_sp')}}";
  //route = route.replace('id_sp',id);
  /*
  var soluonghang=$('#soluong').attr('soluong');
      soluonghang=parseInt(soluonghang+$('#id'+id).attr('soluong'))+1;

  var tongtien= $('#price').attr('tongtien');   
  var gia=$('#gia'+id).attr('giamgia');
        if(gia==0)
      {
        gia=$('#gia'+id).attr('dongia');
      }
    tongtien = tongtien + soluonghang*gia;
       

      $.ajax({
        url: route,
        type:'get',
        data: null,
        success:function(data){          
          if(soluonghang>0)
          {

            document.getElementById('cart-img-photo'+id).innerHTML = "<img src=" + image + "/>";
            document.getElementById('cart-name'+id).innerHTML = name;
            document.getElementById('id'+id).innerHTML=soluonghang;
            document.getElementById('gia'+id).innerHTML=gia;

          }
            
          else 
         {


         }



        }

      })
  */
	function setCookie(name, value, expires)
  {
      var today = new Date();
        today.setTime(today.getTime());
        if (expires) {
            expires = expires * 1000 * 60 * 60 * 24;
        }
        var expires_date = new Date(today.getTime() + (expires));

        document.cookie = name + "=" + escape(value) + ((expires) ? ";expires=" 
        	+ expires_date.toGMTString() : "");

      

  }
  function getCookie(name)
  {
    var start = document.cookie.indexOf(name + "=");
        var len = start + name.length + 1;
        if ((!start) && (name != document.cookie.substring(0, name.length))) {
            return null;
        }
        if (start == -1) return null;
        var end = document.cookie.indexOf(";", len);
        if (end == -1) end = document.cookie.length;
        return unescape(document.cookie.substring(len, end));

  }

  function deleteCookie(name)
  {
    setCookie(name,"",-1);
  }


 

