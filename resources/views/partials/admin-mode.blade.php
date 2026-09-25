@auth

<div class="admin-mode-bar">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

                <span class="admin-title">

                    <i class="bi bi-shield-lock-fill"></i>

                    MODE ADMINISTRATOR

                </span>

                <span class="admin-description ms-lg-2">

                    Anda sedang mengelola website sekolah

                </span>

            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="btn btn-light text-primary fw-bold"
            >

                <i class="bi bi-speedometer2"></i>

                Dashboard Admin

            </a>

        </div>

    </div>

</div>

@endauth