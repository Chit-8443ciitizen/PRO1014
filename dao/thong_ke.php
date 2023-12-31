<?php
  require_once "pdo.php";
  function thong_ke_hang_hoa(){
    $sql = "SELECT  AVG(`hang_hoa`.`don_gia`) as `don_gia_avg`,COUNT(*) as `so_luong`, MIN(`hang_hoa`.`don_gia`) as `min_price`, MAX(`hang_hoa`.`don_gia`) as `max_price`, `loai`.`ten_loai` FROM `hang_hoa` JOIN `loai` WHERE `hang_hoa`.`ma_loai` = `loai`.`ma_loai` GROUP BY `loai`.`ma_loai`, `loai`.`ten_loai`";
    return pdo_query($sql);
    // $spl = "SELECT AVG('hang_hoa'.'don_gia') as 'don_gia_avg',COUNT(*) as 'so_luong', MIN('hang_hoa'.'don_gia') as 'min_price', MAX ('hang_hoa'.'don_gia') as 'max_price', 'loai'.'ten_loai' FROM 'hang_hoa' JOIN 'loai' WHERE 'hang_hoa'.'ma_loai' = 'loai'.'ma_loai' GROUP BY 'loai'.'ma_loai', 'loai'.'ten_loai'"
  }
  function thong_ke_binh_luan(){
    $sql = "SELECT `hang_hoa`.`ma_hh`,`hang_hoa`.`ten_hh`,COUNT(*) AS `tong`, MAX(`binh_luan`.`ngay_bl`) AS `moi_nhat`, MIN(`binh_luan`.`ma_bl`) AS `cu_nhat` FROM `binh_luan` JOIN `hang_hoa` WHERE `binh_luan`.`ma_hh` = `hang_hoa`.`ma_hh` GROUP BY `hang_hoa`.`ma_hh`, `hang_hoa`.`ten_hh` HAVING `tong` > 0";
    return pdo_query($sql);
  }
  function thong_ke_bieu_do_area(){
    $sql = "SELECT COUNT(*) AS `total`,`created_at` from `order` GROUP BY CAST(`created_at` AS DATE) ORDER BY `order`.`created_at` ASC";
    return pdo_query($sql);
  }
?>