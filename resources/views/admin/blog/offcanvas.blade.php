<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($blogdata) ? 'Edit' : 'Create Fresh' }} Blog Details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($blogdata))
            {!! Form::open([
                'url' => route('blog-list.update', $blogdata->id),
                'method' => 'PATCH',
                'id' => 'blog-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('blog-list.store'), 'method' => 'POST', 'id' => 'blog-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', isset($blogdata) ? $blogdata->title : old('title'), ['class' => 'form-control']) !!}
                        @error('title')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('description', 'Description', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::textarea('description', isset($blogdata) ? $blogdata->description : old('description'), [
                            'class' => 'form-control',
                        ]) !!}
                        @error('description')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group ">
                        {{-- {{Form::checkbox('is_article','Y',($blogdata->is_article == 'Y') ? TRUE : FALSE,['class'=>'form-check-input'])}} --}}
                        {{ Form::checkbox('is_article', 'Y', (isset($blogdata) and $blogdata->is_article == 'Y') ? true : false, ['class' => 'form-check-input']) }}
                        {{ Form::label('lbl_article', 'Article') }}
                        <br>
                        {{ Form::checkbox('is_featured', 'Y', (isset($blogdata) and $blogdata->is_featured == 'Y') ? true : false, ['class' => 'form-check-input']) }}
                        {{ Form::label('lbl_featured', 'Featured') }}
                        <br>
                        {{ Form::checkbox('is_conversation', 'Y', (isset($blogdata) and $blogdata->is_conversation == 'Y') ? true : false, ['class' => 'form-check-input']) }}
                        {{ Form::label('lbl_conversation', 'Conversation') }}


                        @error('description')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('image', 'Select Image', ['style' => 'justify-content: right']) !!}
                        <span class="required">*</span>
                        {{-- <span class="required">@if (!isset($blogdata))*@endif</span> --}}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'image']) !!}
                        @error('image')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\BlogRequest', '#blog-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#blog-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#blog-form')[0]);

        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function(data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        $(".divtable").html(data.view);
                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();
                        //location.reload();
                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
