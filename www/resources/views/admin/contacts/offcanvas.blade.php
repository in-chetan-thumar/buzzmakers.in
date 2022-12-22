<div class="offcanvas offcanvas-end" style="width: 45% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($contactData) ? 'View' : 'Create Fresh' }} Contact
            Details
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('name', 'Name', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->name }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->email }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->phone }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('website', 'Website', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->website }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('budget', 'Budget', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->budget }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('documents', 'Documents', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->documents }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('reference', 'Reference', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->reference }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('services', 'Services', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->services }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('competitors', 'Competitors', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->competitors }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('website', 'Project Details', ['style' => 'justify-content: right']) !!}
                        <br>
                        {{ $contactData->project }}
                    </div>
                </div>
            </div>
            <div class="float-end">
                @if ($contactData->documents)
                    @can('contacts.export')
                        <a href={{ route('contacts.document.download', $contactData->documents) }} class="btn btn-primary">
                            &nbsp;Download Document</a>
                    @endcan
                @endif

            </div>
        </div>
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
