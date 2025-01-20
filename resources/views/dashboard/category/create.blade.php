@include('dashboard.header')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">إنشاء حساب</h1>
                            </div>
                            <form class="user" action="{{route('categories.store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="الاسم" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="profile_theme" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="نوع الملف الشخصي" required>
                                    </div>
                                    <div class="col-sm-6 my-3 mb-sm-0">
                                       <button class="btn btn-primary btn-sm my-3">حفظ الحساب</button>
                                    </div>
                                </div>


                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('dashboard.footer')
