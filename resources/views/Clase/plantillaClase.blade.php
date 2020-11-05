<div class="list-group bg-ce1 color-ce1">
    @foreach ($documentos as $documento)
        @php
        $ext = explode('.', $documento->documento);
        $extension = '';
        if(isset($ext[1])){
            $extension = $ext[1];
        }
        @endphp
        @switch($extension)
            @case('txt')
                <a href="#!" class="list-group-item list-group-item-action color-ce1 documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file fa-2x pr-2 secondary-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('docx')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-word fa-2x pr-2 primary-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('pptx')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-powerpoint fa-2x pr-2 orange"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('xlsx')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-excel fa-2x pr-2 success-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('pdf')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-pdf fa-2x pr-2 danger-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('png')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @case('jpg')
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                    <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                    {{$documento->documento}}
                </a>
                @break

            @default
                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" rutaDocumento="{{$documento->documento}}">
                <i class="fas fa-file fa-2x pr-2 color-ce4 "></i>
                    {{$documento->documento}}
                </a>
        @endswitch 
    @endforeach
</div>


<script>
    $('.documentoJS').click(function (e) {
        e.preventDefault();
        let ruta = $(this).attr('rutaDocumento');
        // alert(ruta);

        // var file_path = "{{ asset('docs/'.$documento->documento.'') }}"; 
        $("#resolte-contaniner").officeToHtml({
            url: '/docs/'+ruta,
            imageSetting: {
                frame: ['100%', '100%',false],
                maxZoom: '900%',
                zoomFactor: '10%',
                mouse: true,
                keyboard: true,
                toolbar: true,
                rotateToolbar: false
            },
            pdfSetting: {
                openFileBtn: false,
                printBtn: false,
                downloadBtn: false,
                bookmarkBtn: false, 
            },
            docxSetting: {
                styleMap : null,
                includeEmbeddedStyleMap: true,
                includeDefaultStyleMap: true,
                convertImage: null,
                ignoreEmptyParagraphs: false,
                idPrefix: "",
                isRtl : "auto" 
            },
            sheetSetting: {
                jqueryui : false,
                activeHeaderClassName: "",
                allowEmpty: true,
                autoColumnSize: true,
                autoRowSize: false,
                columns: false,
                columnSorting: true,
                contextMenu: false,
                copyable: true,
                customBorders: false,
                fixedColumnsLeft: 0,
                fixedRowsTop: 0,
                language:'en-US',
                search: false,
                selectionMode: 'single',
                sortIndicator: false,
                readOnly: false,
                startRows: 1,
                startCols: 1,
                rowHeaders: true,
                colHeaders: true,
                width: false,
                height:false
            }
        }); 
        
    });
</script>

<div id="resolte-contaniner" class="px-3"></div>

{{-- @foreach ($documentos as $documento)
    <div id="resolte-contaniner"></div>
    <script>
        var file_path = " {{ asset('docs/'.$documento->documento.'') }}"; 
        $("#resolte-contaniner").officeToHtml({
            url: file_path,
            imageSetting: {
                frame: ['100%', '100%',false],
                maxZoom: '900%',
                zoomFactor: '10%',
                mouse: true,
                keyboard: true,
                toolbar: true,
                rotateToolbar: false
            },
            pdfSetting: {
                openFileBtn: false,
                printBtn: false,
                downloadBtn: false,
                bookmarkBtn: false, 
            },
            docxSetting: {
                styleMap : null,
                includeEmbeddedStyleMap: true,
                includeDefaultStyleMap: true,
                convertImage: null,
                ignoreEmptyParagraphs: false,
                idPrefix: "",
                isRtl : "auto" 
            },
            sheetSetting: {
                jqueryui : false,
                activeHeaderClassName: "",
                allowEmpty: true,
                autoColumnSize: true,
                autoRowSize: false,
                columns: false,
                columnSorting: true,
                contextMenu: false,
                copyable: true,
                customBorders: false,
                fixedColumnsLeft: 0,
                fixedRowsTop: 0,
                language:'en-US',
                search: false,
                selectionMode: 'single',
                sortIndicator: false,
                readOnly: false,
                startRows: 1,
                startCols: 1,
                rowHeaders: true,
                colHeaders: true,
                width: false,
                height:false
            }
        }); 
    </script>
@endforeach --}}