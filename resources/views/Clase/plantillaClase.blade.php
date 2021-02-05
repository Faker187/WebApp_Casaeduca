   @if (count($documentos) != 0)
        <div class="col-sm-5 bg-ce1 py-4 h-100 rounded-left">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 text-center pb-2 font-weight-bold animated wow fadeInUp"><img class="px-2" src="{{ asset('public/img/book-stack.png') }}" style="width:64px" alt="libros">Documentos</h5>
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
                                <a href="#!" class="list-group-item list-group-item-action color-ce1 documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file fa-2x pr-2 secondary-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('docx')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-word fa-2x pr-2 primary-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('pptx')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-powerpoint fa-2x pr-2 orange"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('xlsx')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-excel fa-2x pr-2 success-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('pdf')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-pdf fa-2x pr-2 danger-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('png')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @case('jpg')
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold"  data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                    <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                                    {{$documento->documento}}
                                </a>
                                @break

                            @default
                                <a href="#!" class="list-group-item list-group-item-action documentoJS font-weight-bold" data-toggle="modal" data-target="#centralModalSm" rutaDocumento="{{$documento->documento}}">
                                <i class="fas fa-file fa-2x pr-2 color-ce4 "></i>
                                    {{$documento->documento}}
                                </a>
                        @endswitch
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 bg-ce1 py-4 h-100 rounded-right">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 text-center pb-2 font-weight-bold animated wow fadeInUp"><img class="px-2" src="{{ asset('public/img/youtube.png') }}" style="width:64px" alt="libros">Videos</h5>
                    <div class="list-group bg-ce1 color-ce1">
                      @foreach ($documentos as $documento)
                        @if($documento->link)
                            <a href="{{$documento->link}}" target="_blank" style="padding: 1rem;" class="list-group-item list-group-item-action color-ce1 font-weight-bold">{{$documento->link}}</a>
                        @else
                            <a href="#" style="padding: 1rem;" class="list-group-item list-group-item-action color-ce1 font-weight-bold">SIN VIDEO</a>
                        @endif
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="list-group-item list-group-item-action color-ce2 font-weight-bold">
            No hay documentos en esta clase!
        </p>
    @endif
    
<script>
    $('.documentoJS').click(function (e) {
        e.preventDefault();
        let ruta = $(this).attr('rutaDocumento');
      
        var output = ruta.split(/[. ]+/).pop();
        if(output == 'pptx' || output == 'ppt' ){}
        console.log(output);
        $("#resolte-contaniner").officeToHtml({
            url: '/public/imgcard/'+ruta,
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
                downloadBtn: true,
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
            },
            pptxSetting: {
                slidesScale: "70%", //Change Slides scale by percent
                slideMode: true, /** true,false*/
                keyBoardShortCut: true,  /** true,false ,condition: slideMode: true*/
                mediaProcess: true, /** true,false: if true then process video and audio files */
                slideModeConfig: {
                    first: 1,
                    nav: true, /** true,false : show or not nav buttons*/
                    navTxtColor: "black", /** color */
                    keyBoardShortCut: true, /** true,false ,condition: */
                    showSlideNum: true, /** true,false */
                    showTotalSlideNum: true, /** true,false */
                    autoSlide:1, /** false or seconds , F8 to active ,keyBoardShortCut: true */
                    randomAutoSlide: false, /** true,false ,autoSlide:true */ 
                    loop: true,  /** true,false */
                    background: false, /** false or color*/
                    transition: "default", /** transition type: "slid","fade","default","random" , to show transition efects :transitionTime > 0.5 */
                    transitionTime: 3 /** transition time between slides in seconds */               
                }
                
            }
        });  


       
    });
</script>

