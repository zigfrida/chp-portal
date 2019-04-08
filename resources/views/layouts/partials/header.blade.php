
<div class="container">
    <section class="section">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" >
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                     <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/about">Who We Are</a>
                    <a class="navbar-item">Facts</a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">More</a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">People</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">Originate</a>
                            <a class="navbar-item">Speciality Lending</a>
                        </div>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link ">
                        {{-- <img class="nav-profilepic" src="https://static.wixstatic.com/media/1bfda4_6f8ae00a346644a89245f331fc6c6b8e~mv2_d_3476_5214_s_4_2.jpeg?dn="> --}}
                        <span>{{ auth()->user()->name }}</span>
                    </div>
                    <div class="navbar-dropdown">
                        @if (auth()->user()->isAdmin())
                            <a class="navbar-item" href="/admin">
                                Admin Page
                            </a>
                        @else
                            <a class="navbar-item" href="/{{auth()->user()->id}}/portfolio">
                                My Portfolio
                            </a>
                        @endif
                        <hr class="navbar-divider">
                                    {{-- if I remove this href it doesn't seemingly affect the logout - what gives? --}}
                        <a class="navbar-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">@csrf</form>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</div>
