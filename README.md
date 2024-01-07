HHH
<!-- Nếu không hiện ảnh khi được ảnh  -->
    php artisan storage:link
<!--  -->


<!-- Gửi mail thì config vào env -->
    MAIL_DRIVER=sendmail    
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=thanbatbai3092002@gmail.com
    MAIL_PASSWORD= etejnwheciweprdo
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=thanbatbai3092002@gmail.com
    MAIL_FROM_NAME="khánh"
<!--  -->


<!-- migratae -->
php artisan make:migration create_flights_table
<!--  -->

<!-- Model -->
php artisan make:model Flight
<!--  -->

## xóa cache

php artisan config:cache

## Clear

php artisan optimize:clear
