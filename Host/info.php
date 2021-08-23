<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS for me -->
    <link rel="stylesheet" href="./assets/style_admin.css">
    <link rel="stylesheet" href="./assets/style_info.css">
    <title> Quản lý </title>
</head>

<body>
    <?php
    include("../login_page/assets/config/connect.php");
    ?>
    <!-- Header -->
    <?php
    include("./header.php");
    ?>
    <div class="wrapper">
        <div class="container">
            <!-- Title -->
            <div class="header-main">
                <i class="fas fa-home"></i> <i class="fas fa-angle-right" style="padding: 0 10px;"></i> <span>Thông tin</span>
                <h2>Thông tin</h2>
            </div>
            <!-- Form info -->
            <div class="row">
                
                <div class="col-sm-8 bd-rd">
                    <div class="card-body">
                        <form method="POST" role="form" id="form_Signin" action="./register_login.php">
                            <div class="form-name">
                                <span for="form-name" class="f-right">HỌ VÀ TÊN</span>
                                <input type="text" class="form-control f-n" name="name">
                            </div>
                            <div class="form-username">
                                <span for="name" class="f-right">CHỨC VỤ</span>
                                <input type="text" class="form-control f-n" name="username">
                            </div>
                            <div class="form-password">
                                <span for="pass_signin" class="f-right">PHÒNG LÀM VIỆC</span>
                                <input type="password" class="form-control f-m" name="password">
                            </div>
                            <div class="form-password">
                                <span for="pass_signin" class="f-right">EMAIL</span>
                                <input type="text" class="form-control f-m" name="word">
                            </div>
                            <div class="form-password">
                                <span for="pass_signin" class="f-right">SĐT DI ĐỘNG</span>
                                <input type="text" class="form-control f-m" name="email">
                            </div>
                            <button class="btn btn-danger f-bot" id="submit_add" name="submit_add" style="margin-top: 20px;">Thêm mới</button>
                            <button class="btn btn-danger f-bot" id="submit_edit" name="submit_edit" style="margin-top: 20px;">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Wrapper -->
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>