
<div class="container">
    <section class="section">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" width="200" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <a class="navbar-item">
                    Who We Are
                </a>

                <a class="navbar-item">
                    Facts
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                    More
                    </a>

                    <div class="navbar-dropdown">
                    <a class="navbar-item">
                        People
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Originate
                    </a>
                    <a class="navbar-item">
                        Speciality Lending
                    </a>
                    </div>
                </div>
                </div>

                    <h1 class="is-size-4" style="margin-top:10px;">{{ auth()->user()->name }}</h1>
                
            </div>
        </nav>
    </section>
</div>
