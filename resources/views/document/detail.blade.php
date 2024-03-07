@extends('index')
@section('content')
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

<section class="pt-4">
    <div class="container">
        <canvas id="pdf-canvas"></canvas>

    </div>
</section>
<script>
    // Đường dẫn đến PDF
    const pdfUrl = "http://localhost:27{{ Storage::url($document->file_path) }}";

    // Lấy đối tượng canvas
    const canvas = document.getElementById('pdf-canvas');
    const context = canvas.getContext('2d');

    // Tải PDF
    pdfjsLib.getDocument(pdfUrl).then(pdf => {
        // Lấy trang đầu tiên
        pdf.getPage(1).then(page => {
            // Thiết lập kích thước canvas theo kích thước trang PDF
            const viewport = page.getViewport({ scale: 1.5 });
            canvas.width = viewport.width;
            canvas.height = viewport.height;

            // Vẽ nội dung PDF lên canvas
            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    });
</script>

@endsection