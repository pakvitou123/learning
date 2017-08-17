<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>ការកំណត់គណនីទូទៅ</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('formedit') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-1">
                                <h4>ឈ្មោះ</h4>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                <h4>Email</h4>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                <h4>Photo</h4>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="name" >

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>