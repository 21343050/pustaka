    <div class="position-relative flex items-center justify-content-center bg-primary py-5">
        <img src="images/logo.png" class="position-absolute" style="left: 8px; width: 120px; height: 120px;" alt="logo">
        <h2 style="color: red;">PERPUSTAKAAN <span class="text-white">INDONESIA</span></h2>
    </div>
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PERPUSTAKAAN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <?php

                                if (!isset($_SESSION)) {
                                    
                                }else {
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="insert_buku.php">Insert Buku</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="update_buku.php">Update Buku</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="delete_buku.php">Delete Buku</a>
                                    </li>';
                                }
                                ?>
                                <?php
                                if (isset($_SESSION)) {
                                    echo '
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="daftar_buku.php">Daftar
                                        Buku</a>
                                    </li>';
                                }
                                    ?>
                                    
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                        if (!isset($_SESSION)) {
                                            echo "Masuk";
                                        }else {
                                            echo $_SESSION['username'];
                                        }
                                        ?>
                            </a>
                            <?php
                                        if (!isset($_SESSION)) {

                                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="register.php">Daftar</a></li>
                                        </ul>';
                                        } else {
                                            echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                                  </ul>';
                                        }
                                    ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>