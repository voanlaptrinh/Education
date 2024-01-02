<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Hello World!</title>

    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

</head>


<body>


    @yield('content')
</body>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        // Thêm tùy chọn font_names
        font_names: 'Arial/Arial, Helvetica, sans-serif;' + 'Comic Sans MS/Comic Sans MS, cursive;' +
            'Courier New/Courier New, Courier, monospace;' + 'Georgia/Georgia, serif;' +
            'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
            'Tahoma/Tahoma, Geneva, sans-serif;' +
            'Times New Roman/Times New Roman, Times, serif;' +
            'Verdana/Verdana, Geneva, sans-serif',
        fontSize_sizes: '12/12px;14/14px;16/16px;18/18px;24/24px;36/36px'
    };
</script>
<script>
    CKEDITOR.replace('my-editor', options);
</script>

</html>
