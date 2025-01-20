@include('dashboard.header')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">تسجيل مستخدم</h1>
                            </div>
                            <form class="user" action="{{ route('auth.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        placeholder="الاسم">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        placeholder="البريد الإلكتروني">
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                       @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="كلمة السر">
                                            @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                           @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirm_password"
                                            class="form-control form-control-user" id="exampleRepeatPassword"
                                            placeholder="تأكيد كلمة السر">
                                            @error('confirm_password')
                                            <p class="text-danger">{{ $message }}</p>
                                           @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    تسجيل الحساب
                                </button>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('dashboard.footer')
