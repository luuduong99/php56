<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/admin/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../assets/admin/css/style.css">
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>

</head>
<body>
    <header style="background-color: #343a40;">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="align-self: center;text-align: center;">
                    <div class="img-header">
                        <a href="">
                            <img src="../assets/admin/images/anh1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6" style="align-self: center;">
                    <div class="search-header">
                        <input type="text" class="search-header" name="keyword" placeholder="search">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3" style="align-self: center;font-size: 25px;">
                    <div class="icon-user">
                        <a href="">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col-md-3">
                <div class="menu" style="height: 450px;">
                    <div class="menu-top">
                        <div class="menu-top-img">
                            <img src="../assets/admin/images/meo5.jpg" alt="">
                        </div>
                        <div class="menu-top-content">
                            <div class="content-top">
                                <p style="margin-bottom: 0;font-size: 12px;">YOUR NAME</p>
                            </div>
                            <div class="content-bottom">
                                <span style="font-size: 10px;"><i style="color: green;" class="fas fa-circle"></i> online</span>
                             </div>
                        </div>
                    </div>
                    <h5>Layout Admin</h5>
                    <div class="menu-bottom">
                        <ul>
                            <li>
                                <a href="index.php?controller=categories"><i class="fa fa-th"></i>Danh Mục Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="index.php?controller=products"><i class="fa fa-th"></i>Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="index.php?controller=users"><i class="fa fa-code"></i>Quản Lý User</a>
                            </li>
                            <li>
                                <a href="index.php?controller=orders"><i class="fa fa-code"></i>Đơn Hàng</a>
                            </li>
                            <li>
                                <a href="index.php?controller=news"><i class="fa fa-code"></i>Tin Tức</a>
                            </li>
                            <li>
                                <a href="index.php?controller=login&action=logout"><i class="fa fa-code"></i>Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="Dashboard">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <h1>
                                Dashboard
                                <small style="font-size: 15px;display: inline-block;padding-left: 4px;font-weight: 300;">Control Panel</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="#" ><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                <li class="active"> Dashboard</li>
                            </ol>
                        </section>

                        <!-- Main content -->
                        <section class="content">
                             <?php echo $this->view; ?>
                        </section>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>    

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../assets/admin/js/script.js"></script>
</body>
</html>