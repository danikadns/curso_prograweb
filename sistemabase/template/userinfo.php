<?php
?>

<header class="p-3 mb-3 border-bottom fondoHeader">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="s" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="assets/img/logos/logo.jpeg" alt="mdo" width="100" height="90" class="rounded-circle">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <p><?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'] ?></p>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" >
            <input type="search" class="form-control" placeholder="Buscar..." area-label=>
        </form>
        <div class="dropdown text-end">
            <a href="a" class="d-block link-dark text-decoration-none droptown"
            data-bs-toogle="dropdown" aria-expanded="false">
            <img src="" alt="" width="50" height="50" class="rounded-circle">
        </a>
        <ul></ul>
        </div>
    </div>
</header>