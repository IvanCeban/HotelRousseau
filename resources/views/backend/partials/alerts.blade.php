{{--
                @if ( session('error'))
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session()->get('error') }}
                    </div>
                @endif

                @if ( session('success'))
                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if ( session('info'))
                    <div class="alert alert-info fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session()->get('info') }}
                    </div>
                @endif

                @if ( session('warning'))
                    <div class="alert alert-warning fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session()->get('warning') }}
                    </div>
                @endif

--}}

