<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../public/css/admin.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Admin Panel</h2>
      <ul>
        <li>
          <a href="index.php?act=addsp" class="tab-link active" data-tab="products"
            >📦 Quản lý Sản phẩm</a
          >
        </li>
        <li>
          <a href="index.php?act=adddm" class="tab-link" data-tab="categories">📁 Danh mục</a>
        </li>
        <li><a href="index.php?act=dskh" class="tab-link" data-tab="users">👤 Người dùng</a></li>
        <li>
          <a href="index.php?act=addkm" class="tab-link" data-tab="discounts">🏷️ Mã giảm giá</a>
        </li>
        <li>
          <a href="index.php?act=dsbl" class="tab-link" data-tab="discounts">Bình Luận</a>
        </li>
        <li><a href="index.php?act=thongke" class="tab-link" data-tab="stats">📊 Thống kê</a></li>
      </ul>
    </div>