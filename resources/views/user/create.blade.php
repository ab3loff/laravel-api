
@include('components.start')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Добавить пользователя') }}</div>

                <div class="card-body">

                    <form id="create" method="POST" action="/users/create">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Добавить') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-6 offset-md-4">

                                    <div id="validation" class="">

                                    </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <a class="w-100 btn btn-danger mt-3" href="/"> На главную </a>
        </div>
    </div>


</div>

@include('components.end')
