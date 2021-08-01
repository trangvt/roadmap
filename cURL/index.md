Trang chủ 
	https://curl.se/docs/manpage.html

	curl is a tool to transfer data from or to a server
	The command is designed to work without user interaction.
	curl is powered by libcurl for all transfer-related features

https://wiki.matbao.net/curl-la-gi-cach-su-dung-va-thiet-lap-curl-tren-php-va-linux/
cURL viết tắt của Client URL là một công cụ dòng lệnh (command line tool) dùng để 
	+ kiểm tra kết nối từ URL 
	+ và cho phép truyền dữ liệu

Trong PHP
	+ curl init(): khởi tạo
	+ curl_setopt(): thiết lập tùy chọn request. phải đứng trước curl_exec()
		CURLOPT_TIMEOUT: 
			Thời gian duy trì kết nối của cURL
			https://curl.se/libcurl/c/CURLOPT_TIMEOUT.html
		CURLOPT_CONNECTTIMEOUT
			Timeout for the connection phase

	+ curl_exec(): thực hiện việc gửi request
	+ curl_close(): đóng request


https://www.hostinger.vn/huong-dan/curl-la-gi-cac-lenh-curl-curl-command-can-biet-trong-linux
dùng lệnh
