@include('dashboard.header')

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            @if (session()->get('error'))
              @include('dashboard.messages.errors')
            @endif
            @if (session()->get('success'))
            @include('dashboard.messages.success')
          @endif
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">تسجيل دخول مستخدم</h1>
                            </div>
                            <form class="user" action="{{ route('auth.authenticated') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        placeholder="البريد الإلكتروني">
                                </div>
                                <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="كلمة السر">
                                </div>
                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block mx-auto" style="width:150px !important;">
                                            تسجيل الدخول
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('dashboard.footer')
