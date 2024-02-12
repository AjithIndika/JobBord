<!-- End Page Title -->



<div class="card">





    <div class="card-header">
        <strong class="card-title">New Category </strong>
 </div>
    <div class="card-body">


        <div class="col-lg-6">
            <div class="card mt-3">
                <div class="card-header">
                    <strong></strong>
                </div>
                <div class="card-body card-block">
                    <form  wire:submit.prevent="submit">
                    <div class="has-success form-group">



          <input type="text" id="inputIsValid" wire:model.lazy="category_Name" class="form-control-success form-control mt-3">
                    </div>
                    <button type="submit" > SAve </button>


                    <button type="button" wire:click="alertSuccess" class="btn btn-success">Success Alert</button>


                </form>

                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>

    </div>

    <script>
        $(document).ready(function(){
            toastr.options = {
                              //  "closeButton": true,
                                "progressBar": true,
                                "positionClass": "toastr-top-right"
                            }
        });

            window.addEventListener('success', event => {toastr.success(event.detail.message);});

            </script>

           @stack('scripts')

           
</div>













