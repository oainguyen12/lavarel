Mô tả dự án
Dự án Quản lý Sinh viên là một ứng dụng web được phát triển bằng framework Laravel, giúp quản lý thông tin sinh viên một cách hiệu quả. Ứng dụng cung cấp các chức năng cơ bản như thêm, sửa, xóa, và xem danh sách sinh viên, đồng thời hỗ trợ tìm kiếm và phân trang dữ liệu.

Các chức năng chính
1. Xem danh sách sinh viên
Hiển thị danh sách sinh viên với các thông tin cơ bản như:

Mã sinh viên

Họ tên

Ngày sinh

Lớp

Điểm trung bình

Hỗ trợ phân trang và sắp xếp dữ liệu theo các tiêu chí khác nhau.

2. Thêm sinh viên
Cho phép người dùng thêm thông tin sinh viên mới vào hệ thống.

Các thông tin cần nhập bao gồm:

Mã sinh viên

Họ tên

Ngày sinh

Giới tính

Địa chỉ 

Số điện thoại

Hệ thống kiểm tra tính hợp lệ của dữ liệu trước khi lưu.

3. Sửa thông tin sinh viên
Cho phép người dùng chỉnh sửa thông tin của sinh viên đã có trong hệ thống.

Người dùng có thể cập nhật các thông tin như mã sinh viên, họ tên, ngày sinh, giới tính, địa chỉ, số điện thoại.

Hệ thống kiểm tra tính hợp lệ của dữ liệu trước khi lưu.

4. Xóa sinh viên
Cho phép người dùng xóa thông tin của sinh viên khỏi hệ thống.

Hệ thống hiển thị hộp thoại xác nhận trước khi thực hiện xóa.

Công nghệ sử dụng
Backend: Laravel (PHP framework)

Frontend: Tailwind CSS

Cơ sở dữ liệu: MySQL

Công cụ hỗ trợ:

GitHub Codespaces: Môi trường phát triển tích hợp trên đám mây.

Git: Quản lý phiên bản mã nguồn.

Cài đặt và chạy dự án
Yêu cầu hệ thống
PHP >= 8.0

Composer

MySQL

Node.js và npm (để biên dịch Tailwind CSS)

2. Cài đặt
- Cài đặt dependencies
- composer install
- npm install
- Cấu hình môi trường
- cp .env.example .env
- Cập nhật thông tin kết nối database trong file .env:
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=library_management
- DB_USERNAME=root
- DB_PASSWORD=your_password

- Tạo key và chạy migrations
- php artisan key:generate
- php artisan migrate --seed
- Chạy ứng dụng
- php artisan serve

### Tài khoản mẫu 
### Admin
- Email: admin
- Password: admin
