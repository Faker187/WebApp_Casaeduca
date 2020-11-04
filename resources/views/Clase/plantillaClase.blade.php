@foreach ($documentos as $documento)
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
@endforeach