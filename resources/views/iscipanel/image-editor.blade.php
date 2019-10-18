<script src="{{asset('js/jquery.cropit.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



<style>
    .cropit-preview {
        background-color: #ffffff;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 100% !important;
        margin-top: 7px;
        width: 250px;
        height: 250px;
    }
    .cropit-preview-image-container {
        cursor: move;
    }

    .cropit-preview-background {
        opacity: .2;
        cursor: auto;
    }

    .image-size-label {
        margin-top: 10px;
    }
    input {
        display: block;
    }

    #result-data{
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        word-wrap: break-word;
        background-color: transparent;
    }

</style>

<div class="change-photo">

    <div class="image-editor" style="margin-left: auto;margin-right: auto; display: table;">
        <input type="file" class="cropit-image-input">
        <div class="cropit-preview"></div>
        <div class="image-size-label">
            Resmi Boyutlandırın
        </div>
        <input type="range" class="cropit-image-zoom-input" style="width: 250px;">
        <div class="row" >
            <div class="col-sm-10 text-center m--margin-top-15">
            <button type="button" class="rotate-ccw" style="text-align: center"> <i class="fa fa-undo" aria-hidden="true"></i></button>
            <button type="button" class="rotate-cw" style="text-align: center"><i class="fa fa-repeat" aria-hidden="true"></i></button>
            </div>
        </div>
        <input type="hidden" name="image-data" class="hidden-image-data" />
        <code id="result-data"></code>


    </div>
</div>






<script >
    $(document).ready(function() {
        $('.image-editor').cropit({'minZoom':2,
            'smallImage':'allow',



        });
        $('form').submit(function() {
            // Move cropped image data to hidden input
            var imageData = $('.image-editor').cropit('export');
            $('.hidden-image-data').val(imageData);
            // Print HTTP request params
            var formValue=$(this).serialize();
            $('#result-data').text(formValue)
            // Prevent the form from actually submitting
            return true;
        });




        $('.rotate-cw').click(function() {
            $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
            $('.image-editor').cropit('rotateCCW');
        });

    });
</script>


@section('image-editor')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="{{asset('js/jquery.cropit.js')}}"></script>


@endsection