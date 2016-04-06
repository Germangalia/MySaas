@extends('layouts.app')

@section('htmlheader_title')
    Daily sales report
@endsection

@section('custom_scripts')
    <!-- jsPDF -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>

    <script>
        var logo;
        function createPDF(){
            this.pdf = new jsPDF('p', 'mm', 'a4');
            this.title = document.getElementById('invoice-title').value;
            this.titleColor = document.getElementById('invoice-title-color').value;
            this.titleSize = document.getElementById('invoice-title-size').value;
            this.description = document.getElementById('invoice-description').value;
            this.price = document.getElementById('invoice-price').value;
            this.currency = document.getElementById('invoice-price-currency').value;
            this.priceColor = document.getElementById('invoice-price-color').value;
            this.separator = "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
            this.titleSeparation = 12;
            if (logo != null){
                pdf.addImage(logo, 'JPG', 10, 5, 80, 60);
                this.titleSeparation = 90;
            }

            pdf.setFontSize(titleSize);
            pdf.setTextColor(titleColor);
            this.titleWidth = pdf.getStringUnitWidth(title) * titleSize / pdf.internal.scaleFactor;
            this.titleOffset = (pdf.internal.pageSize.width - titleWidth) / 2;
            pdf.setFontSize(40);
            pdf.text('CREATE YOUR INVOICE', titleOffset, titleSeparation);
            pdf.setFontSize(20);
            pdf.text(title, 10, titleSeparation+30);
            pdf.setFontSize(16);
            pdf.setTextColor(this.titleColor);
            pdf.text(description , 10, titleSeparation+50);
            this.priceWidth = pdf.getStringUnitWidth(price) * 25 / pdf.internal.scaleFactor;
            this.priceOffset = pdf.internal.pageSize.width - priceWidth - 30;
            pdf.text(separator, 0, pdf.internal.pageSize.width-10);
            pdf.text("Price:", 10, pdf.internal.pageSize.width);
            pdf.setTextColor(priceColor);
            pdf.text(price+currency, priceOffset,pdf.internal.pageSize.width);
            return pdf;
        }
        function download() {
            this.pdf = createPDF();
            this.pdf.save(document.getElementById('invoice-title').value + '.pdf');
        }
        function preview() {
            this.pdf = createPDF();
            this.string = pdf.output('datauristring');
            $('#pdf_preview').attr('src', string);
        }
        function getBase64() {
            this.logo = null;
            var FR= new FileReader();
            FR.onload = function(e) {
                this.logo = e.target.result;
            };
            FR.readAsDataURL(this.files[0]);
        }
        document.getElementById('invoice-image').addEventListener("change", getBase64, false);
    </script>


@endsection

@section('custom_css')
    <style>
        .invoice-builder iframe,
        .invoice-builder .no_iframe {
            width: 100%;
            height: 400px;
            border: 1px solid #666;
            background-color: #ddd;
        }
    </style>

@endsection

@section('main-content')

<h1>Make your invoice:</h1>

<div class="container-fluid invoice-builder">

    <div class="row">
        <div class="col-sm-6 loc_form">

            <div class="form-group">
                <label for="invoice-image" class="control-label">Image</label>
                <input id="invoice-image" type="file" tabindex="1">
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="invoice-title" class="control-label">Product</label>
                        <input required class="form-control" id="invoice-title" placeholder="Main title" value="Product name..." maxlength="255" type="text" tabindex="2">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="invoice-title-size" class="control-label">Size (pt)</label>
                        <input required class="form-control" id="invoice-title-size" value="60" min="1" step="1" type="number" tabindex="3" title="Title size: tune it to fit the available space">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="invoice-title-color" class="control-label">Color</label>
                        <input required class="form-control" id="invoice-title-color" value="#0080FF" type="color" tabindex="4" title="Title color">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="invoice-description">Description</label>
                <textarea class="form-control" id="invoice-description" placeholder="Insert a short description taking care of the available space">Product description...</textarea>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="invoice-price" class="control-label">Price</label>
                        <input required class="form-control" id="invoice-price" placeholder="Enter price (w/o decimals)" value="100" type="number" tabindex="5" step="any" min="0">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="invoice-price-currency" class="control-label">Currency</label>
                        <select required class="form-control" id="invoice-price-currency" tabindex="6">
                            <option value="&euro;">&euro;</option>
                            <option value="$">$</option>
                            <option value="&pound;">&pound;</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="invoice-price-color" class="control-label">Color</label>
                        <input required class="form-control" id="invoice-price-color" value="#cc0000" type="color" tabindex="8" title="Price color">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <button onclick="preview()" id="invoice_preview_btn" type="button" class="btn btn-primary btn-block" tabindex="9">Preview</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group text-right">
                        <button onclick="download()" id="invoice_download_btn" type="button" class="btn btn-default btn-xs btn-block" tabindex="10">Download</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <iframe id="pdf_preview" type="application/pdf" src="" style="width: 400px; height: 500px"></iframe>
        </div>

    </div>
</div>

@endsection

</body>
</html>