<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header top -->
    <div class="globalheader">
        <div class="header_top">
            <div class="label_tlu">
                <a href="http://www.tlu.edu.vn/">Trường Đại học Thủy Lợi -TLU</a>
            </div>
            <div class="thanghang" id="text"><p>(+) |</p></div>
            <div class="thanghang" id="language">
                <span class="language-text"> Ngôn ngữ: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <a href="#" title="Tiếng Việt"><img src="images/vietnam.png" alt="Tiếng Việt"></a>
                    <a href="#" title="Tiếng Anh" ><img src="images/tienganh.png" alt="Tiếng Anh"></a>
            </div>
            <div class="thanghang" id="search-container">
                <input type="text" placeholder="Tìm kiếm" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="container">
    <table class="table table-striped">
        <thead class="thead-dark">
    <div class="card-title mt-5">
        <div class="card-header">
        <h1 class="text-center" style="font-weight: 700;" >DANH BẠ ĐIỆN THOẠI</h1>   
        
        </div> 
            <tr>
                <th class="text-center" >STT</th>
                <th class="text-center" >HỌ VÀ TÊN</th>
                <th class="text-center" >CHỨC VỤ</th>
                <th class="text-center" >PHÒNG LÀM VIỆC</th>
                <th class="text-center" >EMAIL</th>
                <th class="text-center" >SĐT DI ĐỘNG</th>   
            </tr>
    </div>
        </thead>
    </div>
    <?php
        require('includes/config.php');
        $sql = "SELECT * FROM danhba";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){      
    ?>           
            <tr>
            <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['hovaten']; ?></td>
                <td><?php echo $row['chucvu']; ?></td>
                <td><?php echo $row['phonglamviec']; ?></td>                
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sdtdidong']; ?></td>
            </tr>
    <?php } ?>            
            
    </table>
        </div>
</body>        
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer__bot">
                <img id="image_bot" src="images/image_bot.jpg" alt="">
                <p style="color: white;">© 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi<br>
                Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024&nbsp;3 5632211. Email: <a class="ui-link-white" href="#">vpkcntt@tlu.edu.vn</a></p>
            </div>
        </div>
    </div>
</footer>    

</html>
<script>
    function Sure() {
        return confirm("Do you really want to delete ?");
    }
</script>