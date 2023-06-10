<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($faqsdata) ? 'Edit' : 'Create ' }} FAQs Details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($faqsdata))
            {!! Form::open([
                'url' => route('faqs.update', $faqsdata->id),
                'method' => 'PATCH',
                'id' => 'faqs-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('faqs.store'), 'method' => 'POST', 'id' => 'faqs-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('category', 'Category', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {{Form::select('category',config('constants.FAQS_CATEGORIES'), isset($faqsdata) ? $faqsdata->category : old('category'),['placeholder' => 'Pick Category','class' => 'form-control'])}}
                        @error('category')
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
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', isset($faqsdata) ? $faqsdata->title : old('title'), ['class' => 'form-control']) !!}
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
                        {!! Form::textarea('description', isset($faqsdata) ? $faqsdata->description : old('description'), [
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
                    <div class="form-group">
                        
                         {!! Form::label('is_active', 'Activity', ['style' => 'justify-content: right']) !!}<span class="required">*</span><br>
                    
                        <div class="form-check form-check-inline">
                            {{Form::radio('is_active','N',['class'=>'form-control'])}}
                            <label class="form-check-label ml-2" for="is_active">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            {{Form::radio('is_active','Y',['class'=>'form-control'])}}
                            <label class="form-check-label ml-2" for="is_active">Active</label>
                        </div>
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
{!! JsValidator::formRequest('App\Http\Requests\FaqsRequest', '#faqs-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#faqs-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#faqs-form')[0]);
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
