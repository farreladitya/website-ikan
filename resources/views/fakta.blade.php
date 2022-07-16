@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('head')
{{-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/jx8bu33q2vocfbq0qvzimbauu2jtc5mtw6vlvumvxmbmqewv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
{{-- <script>
    $(document).ready(function() {

        $('#technig').summernote({

            height:300,

        });

    });
</script> --}}

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
<script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
@endsection
@section('isikonten')
<style>
    img {
        max-width: 200px;
        max-height: 200px;
        padding: 5px;
        vertical-align: middle;
        text-align: center;
        object-fit: cover;
    }
    .divs {
        line-height: 200px;
    }
</style>
<div style="background-color: #C6DADA">
    <div class="row">
        <div class="col-6">
            <h1 class="font-weight-bold" style="margin-left:75px; margin-top: 70px; font-size:48px"> Manfaat sisa-sisa Ikan {{$ikan->nama_ikan}} </h1>
        </div>
        <div class="col-6 my-auto text-center">
            <img src="{{URL::asset('/images/SeekPng3.png')}}" width="60%" style="max-width: unset; max-height: unset; padding: unset; ">
        </div>
    </div>
</div>
<form action="/faktaikan/{{$ikan->ikan_id}}" method="POST">
    @csrf
    <div class="container p-3 mt-5" style="background-color: white;">
        <div class="form-group">
            <textarea placeholder="Bagikan cara memanfaatkan sisa-sisa ikan {{$ikan->nama_ikan}}" style="border: none; outline: none; font-size:18px" class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="row">
            {{-- <div class="col-10 mx-4 my-auto">
                <input type="text" placeholder="Tambah konteks" style="height:34px;">
                <span class="font-weight-bold" style="background-color:white; color: #253368;padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block;">Mudah Pengelohaan</span>
                <span class="button font-weight-bold" onclick="/" style="background-color:#253368;color: white;border-radius: 0px 5px 5px 0px; padding: 5px 17px;margin-left: -5px;">+</span>
            </div> --}}
        </div>
        <div class="divs"></div>
        <div class="row">
            <div class="col">
                <div class="text-right">
                    <button type="submit" class="button buttonmasuk mt-2" style="width: 130px;">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>
<livewire:fakta />
<script>
    document.getElementsByTagName('input')[0].addEventListener('change', function(event) {
        var file = event.target.files[0];
        var fileReader = new FileReader();
        if (file.type.match('image')) {
            fileReader.onload = function() {
                var img = document.createElement('img');
                img.src = fileReader.result;
                document.getElementsByClassName('divs')[0].appendChild(img);
            };
            fileReader.readAsDataURL(file);
        } else {
            fileReader.onload = function() {
                var blob = new Blob([fileReader.result], {type: file.type});
                var url = URL.createObjectURL(blob);
                var video = document.createElement('video');
                var timeupdate = function() {
                    if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                        video.pause();
                    }
                };
                video.addEventListener('loadeddata', function() {
                    if (snapImage()) {
                        video.removeEventListener('timeupdate', timeupdate);
                    }
                });
                var snapImage = function() {
                    var canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                    var image = canvas.toDataURL();
                    var success = image.length > 100000;
                    if (success) {
                        var img = document.createElement('img');
                        img.src = image;
                        document.getElementsByClassName('divs')[0].appendChild(img);
                        URL.revokeObjectURL(url);
                    }
                    return success;
                };
                video.addEventListener('timeupdate', timeupdate);
                video.preload = 'metadata';
                video.src = url;
                // Load video in Safari / IE11
                video.muted = true;
                video.playsInline = true;
                video.play();
            };
            fileReader.readAsArrayBuffer(file);
        }
    });
</script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste  advtable tableofcontents tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }});
    </script>
    @endsection

    @section('faktaactive')
    class='navbar navbar-brand active'
    @endsection
