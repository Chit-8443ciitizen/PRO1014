<?php
 require_once "pdo.php";    // require: nếu tạo ra lỗi nghiêm trọng (E_COMPILE_ERROE) và dừng tập lệnh

 function loai_selectall(){  // chọn tất cả
   $sql = "SELECT * FROM loai";
   return pdo_query($sql);
}
function loai_insert($ten_loai){   // thêm ( tên loại. còn mã loại tự động tăng)
    $sql = "INSERT INTO `loai` (`ten_loai`) VALUES (?)";
    pdo_execute($sql, $ten_loai);
}
function loai_delete($ma_loai){ //xóa
    $sql = "DELETE FROM `loai` WHERE `ma_loai` = ?";
    pdo_execute($sql, $ma_loai);
}
function loai_getinfor($ma_loai){   // xem thông tin bằng mã loại
    $sql = "SELECT * FROM `loai` WHERE `ma_loai`=?";
    return (pdo_query_one($sql, $ma_loai));
}
function loai_update($ma_loai, $ten_loai){  // cập nhật 
    $sql = "UPDATE `loai` SET `ten_loai` = ? WHERE `ma_loai` = ?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
function loai_search($ten_loai){    // tìm
    $sql = "SELECT * FROM `loai` WHERE `ten_loai` LIKE ? ";
    return pdo_query($sql, "%$ten_loai%");
}
//var_dump(loai_search('1'));
//var_dump(loai_selectall());

//loai_delete(1);
//var_dump(loai_getinfor(2)); name must contain lest one character special and number 
//loai_update(2, "name update");
?>