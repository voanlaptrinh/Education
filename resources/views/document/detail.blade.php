@extends('index')
@section('content')
<section class="bg-light py-0 py-sm-5">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-8">
				
				<h1>{{ $document->name }}</h1>
				<p>{{ $document->description }}</p>
				
			</div>
		</div>
	</div>
</section>
<section class="pb-0 py-lg-5">
	<div class="container">
		<div class="row">
			<!-- Main content START -->
			<div class="col-lg-9">
				<div class="card shadow rounded-2 p-0">
					<!-- Tabs START -->
					
					<!-- Tabs END -->

					<!-- Tab contents START -->
					<div class="card-body p-4">
						<div class="tab-content pt-2" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="" id="course-pills-1">
								<!-- Course detail START -->
								<div id="pdf-viewer"></div>

							</div>
							<!-- Content END -->
						</div>
					</div>
					<!-- Tab contents END -->
				</div>
			</div>
			<!-- Main content END -->
            <div class="col-lg-3 pt-5 pt-lg-0">
				<div class="row mb-5 mb-lg-0">
					<div class="col-md-6 col-lg-12">
						<!-- Video START -->
						<div class="card shadow p-2 mb-4 z-index-9">
							<div class="overflow-hidden rounded-3">
								<img src="{{ asset('storage/' . $document->image_path) }}" class="card-img" alt="course image">
								<!-- Overlay -->
								
							</div>
		
							<div class="card-body px-3">
								<!-- Info -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Price and time -->
									<div>
										<div class="d-flex align-items-center">
											<h6 class="fw-bold mb-0 me-2">{{ $document->name }}</h6>
											
										</div>
									</div>

									<!-- Share button with dropdown -->
									<div >
										<!-- Share button -->
										<a href="{{ route('document.download', [$document->id]) }}" class="btn btn-sm btn-light rounded small" >
											<i class="fas fa-download"></i>
										</a>
										
									</div>
								</div>
							</div>
						</div>
						<!-- Video END -->

					
					</div>

					
				</div><!-- Row End -->
			</div>
			

		</div><!-- Row END -->
	</div>
</section>
  


    <style>
       canvas{
        height: 1160px;
       }
        #pdf-viewer {
            width: 100%;
            height: 800px;
            overflow: auto;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <script>
        // PDF.js
        const pdfjsLib = window['pdfjs-dist/build/pdf'];

        // Đường dẫn đến file PDF
        const pdfUrl = '{{ asset("storage/" . $document->file_path) }}';

        // Đối tượng viewer
        const pdfViewer = document.getElementById('pdf-viewer');

        // Đọc file PDF
        pdfjsLib.getDocument(pdfUrl).promise.then(pdfDoc => {
            // Lấy số lượng trang
            const numPages = pdfDoc.numPages;

            // Mỗi trang
            for (let pageNum = 1; pageNum <= numPages; pageNum++) {
                // Tải trang
                pdfDoc.getPage(pageNum).then(page => {
                    const canvas = document.createElement('canvas');
                    pdfViewer.appendChild(canvas);

                    // Kích thước trang A4
                    const viewport = page.getViewport({
                        scale: 1.5
                    });

                    // Canvas context
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Vẽ trang lên canvas
                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };

                    page.render(renderContext);
                });
            }
        });
    </script>
@endsection
