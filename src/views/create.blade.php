@extends('inspire::layouts.app')
@section('content')
@include('inspire::layouts.navbar')
@include('inspire::layouts.sidebar')
<main id="main-container">
      <!-- Hero -->
      <div class="bg-body-light ">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Admins<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Add Admin</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a style="color:black" href="">Admins</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

   <!-- END Hero -->
   <div class="content">
    <div class="block block-rounded">
      <div class="block-header">

             <h3 class="block-title ">Add Admin</h3>


        </div>
         <div class="block-content block-content-full">

            <form action="{{ route('store') }}" method="POST" >
                @csrf
                @method('post')




            <!-- Name -->
                <div class="form-outline mb-4 col-8">
              <label>Author</label>
                <input type="text"   name="author"   required  value="{{ old('author') }}" class="form-control form-control-lg"
                  placeholder="Enter Name" />
              </div>


                  <div class="form-outline mb-4 col-8">
              <label>Quote</label>
                <input type="text"   name="quote"     value="{{ old('quote') }}" class="form-control form-control-lg"
                  placeholder="Enter Name" />
              </div>


              <div class="form-group pt-2">
                <a href="{{ url('list') }}"><button type="button" class="btn btn-secondary">Back</button></a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>


         </div>



        </div></div>
        </div>

   @endsection
   @section('script')
     <script>


function myPassword() {
  var x = document.getElementById("password1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myConfirmPassword() {
  var x = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


  $('.crop').hide();
  $('#reset').hide();
  function readURL(input) {
  if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
      $('.crop').show();
  $('#blah').attr('src', e.target.result)
  };
  reader.readAsDataURL(input.files[0]);
  setTimeout(initCropper, 1000);
  }
  }

 function initCropper(){
  var image = document.getElementById('blah');
  var cropper = new Cropper(image, {
  aspectRatio: 1.81 / 1,
  crop: function(e) {
  }
  });
  if (cropper.element.classList.contains("cropper-hidden"))
      {
          cropper.element.cropper.destroy();
          var cropper = new Cropper(image, {
              aspectRatio: 1.81 / 1,
              crop: function(e) {}
          });
      }
  document.getElementById('crop_button').addEventListener('click', function(){
  var imgurl =  cropper.getCroppedCanvas().toDataURL();
  var img = document.createElement("img");
  img.src = imgurl;
  img.style.cssText = "width:951px;height:525px;margin: 2rem;";
  document.getElementById("cropped_result").appendChild(img);
  $('#cropped_image').val(imgurl);
  $('#reset').show();
  $('#crop_button').hide();

  document.getElementById('reset').addEventListener('click', function(){
      document.getElementById("cropped_result").appendChild(img).remove();
      $('#reset').hide();
      $('#crop_button').show();
  });
  });
  }

     </script>
</main>
   @endsection
