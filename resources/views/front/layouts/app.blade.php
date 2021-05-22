@include('front.layouts.partials.head')

<div class="flex flex-col min-h-screen text-gray-900 dark:bg-gray-900 dark:text-gray-100">

    <!-- Main navigation -->
    <nav class="sticky top-0 z-40 bg-white bg-opacity-50 border-b border-gray-100 app-header">
        <div class="container flex items-center justify-between px-4 py-4 mx-auto">
            <div>
                <a href="{{ route('home') }}" class="flex items-center text-xl font-bold underline transition duration-300 hover:text-primary">
                    <svg class="w-auto h-10" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="180" height="116.23813" viewBox="0 0 47.624998 30.754672" version="1.1" id="svg8" inkscape:version="1.0.2 (e86c870879, 2021-01-15, custom)" sodipodi:docname="Logo Larapeak - kopie.svg">
                        <defs id="defs2"/>
                        <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.979899" inkscape:cx="134.80306" inkscape:cy="94.105657" inkscape:document-units="mm" inkscape:current-layer="layer1" inkscape:document-rotation="0" showgrid="false" units="px" inkscape:pagecheckerboard="false" showborder="true" inkscape:showpageshadow="false" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" lock-margins="true" fit-margin-top="10" fit-margin-left="10" fit-margin-right="10" fit-margin-bottom="10"/>
                        <metadata id="metadata5">
                        <rdf:RDF>
                            <cc:Work rdf:about="">
                            <dc:format>image/svg+xml</dc:format>
                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                            <dc:title/>
                            </cc:Work>
                        </rdf:RDF>
                        </metadata>
                        <g inkscape:label="Laag 1" inkscape:groupmode="layer" id="layer1" transform="translate(2.6458333,2.6458333)">
                        <rect style="fill:#0a1931;fill-opacity:1;stroke-width:0.269393" id="rect847" width="5.2916665" height="5.2916665" x="-9.16362" y="0.2809391"/>
                        <rect style="fill:#185adb;fill-opacity:1;stroke-width:0.269393" id="rect849" width="5.2916665" height="5.2916665" x="-9.16362" y="5.5726056"/>
                        <rect style="fill:#ffc947;fill-opacity:1;stroke-width:0.269393" id="rect851" width="5.2916665" height="5.2916665" x="-9.16362" y="10.864272"/>
                        <rect style="fill:#feddbe;fill-opacity:1;stroke-width:0.269393" id="rect853" width="5.2916665" height="5.2916665" x="-9.16362" y="16.155939"/>
                        <path sodipodi:type="star" style="fill:#0a1931;fill-opacity:1;stroke-width:0.25446" id="path855" sodipodi:sides="3" sodipodi:cx="14.962369" sodipodi:cy="17.638889" sodipodi:r1="17.638889" sodipodi:r2="8.8194437" sodipodi:arg1="0.52359878" sodipodi:arg2="1.5707963" inkscape:flatsided="true" inkscape:rounded="0" inkscape:randomized="0" d="m 30.238095,26.458334 -30.55145231,0 L 14.962369,0 Z" inkscape:transform-center-y="-4.2438331" transform="matrix(1.0418082,0,0,0.96238129,0.32645845,0)"/>
                        <path sodipodi:type="star" style="fill:#185adb;fill-opacity:1;stroke-width:0.25446" id="path857" sodipodi:sides="3" sodipodi:cx="23.213226" sodipodi:cy="17.638889" sodipodi:r1="17.638889" sodipodi:r2="8.8194437" sodipodi:arg1="0.52359878" sodipodi:arg2="1.5707963" inkscape:flatsided="true" inkscape:rounded="0" inkscape:randomized="0" d="m 38.488953,26.458334 -30.551453,0 L 23.213226,0 Z" inkscape:transform-center-y="-4.2438329" transform="matrix(1.0418082,0,0,0.96238129,2.2352274,0)" inkscape:transform-center-x="1.3549006e-06"/>
                        <path sodipodi:type="star" style="fill:#ffc947;fill-opacity:1;stroke-width:0.25446" id="path857-4" sodipodi:sides="3" sodipodi:cx="23.213226" sodipodi:cy="17.638889" sodipodi:r1="17.638889" sodipodi:r2="8.8194437" sodipodi:arg1="0.52359878" sodipodi:arg2="1.5707963" inkscape:flatsided="true" inkscape:rounded="0" inkscape:randomized="0" inkscape:transform-center-y="-1.3979462" transform="matrix(0.34317818,0,0,0.31701439,-2.7239768,17.075333)" d="m 38.488953,26.458334 -30.551453,0 L 23.213226,0 Z"/>
                        <path sodipodi:type="star" style="fill:#ffc947;fill-opacity:1;stroke-width:0.25446" id="path857-4-0" sodipodi:sides="3" sodipodi:cx="23.213226" sodipodi:cy="17.638889" sodipodi:r1="17.638889" sodipodi:r2="8.8194437" sodipodi:arg1="0.52359878" sodipodi:arg2="1.5707963" inkscape:flatsided="true" inkscape:rounded="0" inkscape:randomized="0" inkscape:transform-center-y="-1.3979462" transform="matrix(0.34317818,0,0,0.31701439,7.780605,17.075333)" d="m 38.488953,26.458334 -30.551453,0 L 23.213226,0 Z"/>
                        </g>
                    </svg>
                    Larapeak
                </a>
            </div>
            <div>
                <div class="flex items-center h-10 font-semibold transition duration-300 border-b-4 border-gray-900 border-opacity-0 hover:border-opacity-100 dark:text-gray-400 dark:hover:border-gray-400">
                    <a href="{{ route('blog.index') }}">
                        Blog
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container flex-grow px-4 mx-auto my-6 sm:my-12">
        {{ $slot }}
    </div>

    <footer class="container flex items-center justify-between px-4 py-6 mx-auto border-t-2">
        <div>
            <!-- <a href="" class="mr-6 transition duration-300 hover:text-blue-500">Terms and Conditions</a>
            <a href="" class="mr-6 transition duration-300 hover:text-blue-500">Privacy Policy</a> -->
            &copy; 2021 - larapeak.com
        </div>
        <div>
            <a href="https://github.com/larapeak" target="_BLANK">
                <svg viewBox="0 0 16 16" fill="currentColor" class="w-5 h-5">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z" />
                </svg>
            </a>
        </div>
    </footer>
</div>