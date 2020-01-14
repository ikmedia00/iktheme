<div class="box-profile mt-4">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="{{ asset('public/assets/img/iankonjo.jpg') }}" alt="">
    </div>

    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

    <p class="text-muted text-center text-sm">Video Editor | Journalist</p>

    <p class="mb-0 text-center"><b>SOSIAL MEDIA</b></p>

    <ul class="nav justify-content-center mb-3 mt-0">
        <li class=" nav-item">
            <a class="nav-link" href="#">
                <span style="font-size: 25px; color: #3b5998">
                    <i class="fab fa-facebook-square" title="Facebook"></i>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span style="font-size: 25px; color: #3f729b;">
                    <i class="fab fa-instagram" title="Instagram"></i>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span style="font-size: 25px; color: #00acee;">
                    <i class="fab fa-twitter-square" title="Twitter"></i>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span style="font-size: 25px; color: #c4302b;">
                    <i class="fab fa-youtube" title="Youtube"></i>
                </span>
            </a>
        </li>
    </ul>

    <div class="text-center">
        <button type="button" href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit Profil</button>
        <a href="" class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>