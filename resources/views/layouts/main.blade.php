<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeSafe</title>
    @vite('resources/css/app.css')

    <style>
        .glowing-circle {
            width: 45px;
            height: 45px;
            border-radius:50%;
            animation: glowing 1s ease-in-out infinite alternate;

        }
        .filter-grey{
            filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(86deg) brightness(118%) contrast(119%);
        }
        @-webkit-keyframes glowing {
            from {
                box-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #f0f, 0 0 40px #0ff, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }
            to {
                box-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }
    </style>
</head>
<body>
    <div class="bg-gray-800">
        @yield('content')
    </div>
    <div class="w-full absolute bottom-0 left-0 right-0">
        <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 bg-gray-900 shadow">
            <div id="tabs" class="flex justify-between">

                <a href="{{ route('profile') }}" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-5 pb-3">
                    <svg class="m-auto" style="width: 25px;" viewBox="0 0 600 600" version="1.1" id="svg9724" sodipodi:docname="home.svg" inkscape:version="1.2.2 (1:1.2.2+202212051550+b0a8486541)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" fill="#a0aec0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs9728"></defs> <sodipodi:namedview id="namedview9726" pagecolor="#a0aec0" bordercolor="#a0aec0" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#a0aec0" showgrid="true" inkscape:zoom="0.84179692" inkscape:cx="153.83758" inkscape:cy="310.64499" inkscape:window-width="1920" inkscape:window-height="1009" inkscape:window-x="0" inkscape:window-y="1080" inkscape:window-maximized="1" inkscape:current-layer="svg9724" showguides="true"> <inkscape:grid type="xygrid" id="grid9972" originx="0" originy="0"></inkscape:grid> <sodipodi:guide position="300,720" orientation="1,0" id="guide1112" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="-540,300" orientation="0,-1" id="guide399" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="110,200" orientation="0,-1" id="guide401" inkscape:locked="false"></sodipodi:guide> </sodipodi:namedview> <path style="color:#a0aec0;fill:#a0aec0;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none" d="M 300,0 A 40.004,40.004 0 0 0 271.71484,11.714844 L 11.714844,271.71484 A 40.004,40.004 0 0 0 0,300 v 260 a 40.004,40.004 0 0 0 40,40 h 164.66602 a 40.004,40.004 0 0 0 40,-40 V 426.66602 H 355.33398 V 560 a 40.004,40.004 0 0 0 40,40 H 560 a 40.004,40.004 0 0 0 40,-40 V 300 a 40.004,40.004 0 0 0 -11.71484,-28.28516 l -260,-259.999996 A 40.004,40.004 0 0 0 300,0 Z m 0,96.568359 220,220.000001 V 520 H 435.33398 V 386.66602 a 40.004,40.004 0 0 0 -40,-40 H 204.66602 a 40.004,40.004 0 0 0 -40,40 V 520 H 80 V 316.56836 Z" id="path1011"></path> </g></svg>
                </a>

                <a href="{{ route('home') }}" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-3 pb-3">
                    <svg class="m-auto glowing-circle" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25203 10C4.08751 10.6392 4 11.3094 4 12C4 12.6906 4.08751 13.3608 4.25204 14H8.10516C8.03772 13.3727 8 12.7062 8 12C8 11.2938 8.03772 10.6273 8.10516 10H4.25203ZM5.07026 8H8.44148C8.74649 6.6871 9.17396 5.60504 9.60763 4.74755C9.68837 4.58792 9.76925 4.4362 9.8495 4.29235C7.81403 4.85906 6.10548 6.21041 5.07026 8ZM12 4.60481C11.8126 4.88536 11.6032 5.23336 11.3924 5.65018C11.0768 6.27421 10.7565 7.0555 10.5029 8H13.4971C13.2435 7.0555 12.9232 6.27421 12.6076 5.65018C12.3968 5.23336 12.1874 4.88536 12 4.60481ZM13.8818 10H10.1182C10.0431 10.6184 10 11.2848 10 12C10 12.7152 10.0431 13.3816 10.1182 14H13.8818C13.9569 13.3816 14 12.7152 14 12C14 11.2848 13.9569 10.6184 13.8818 10ZM15.8948 14C15.9623 13.3727 16 12.7062 16 12C16 11.2938 15.9623 10.6273 15.8948 10H19.748C19.9125 10.6392 20 11.3094 20 12C20 12.6906 19.9125 13.3608 19.748 14H15.8948ZM13.4971 16H10.5029C10.7565 16.9445 11.0768 17.7258 11.3924 18.3498C11.6032 18.7666 11.8126 19.1146 12 19.3952C12.1874 19.1146 12.3968 18.7666 12.6076 18.3498C12.9232 17.7258 13.2435 16.9445 13.4971 16ZM9.84951 19.7077C9.76925 19.5638 9.68837 19.4121 9.60763 19.2524C9.17396 18.395 8.74649 17.3129 8.44148 16H5.07026C6.10548 17.7896 7.81403 19.1409 9.84951 19.7077ZM14.1505 19.7076C14.2308 19.5638 14.3116 19.4121 14.3924 19.2524C14.826 18.395 15.2535 17.3129 15.5585 16H18.9297C17.8945 17.7896 16.186 19.1409 14.1505 19.7076ZM18.9297 8H15.5585C15.2535 6.6871 14.826 5.60504 14.3924 4.74755C14.3116 4.58792 14.2308 4.4362 14.1505 4.29235C16.186 4.85906 17.8945 6.21041 18.9297 8ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z" fill="#a0aec0"></path> </g></svg>
                </a>
                <a href="{{ route('events') }}"  class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-5 pb-3">
                    <svg class="m-auto" style="width: 25px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#a0aec0">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 0C7.90405 0 4.5835 3.32056 4.5835 7.41667V8.33334C4.5835 10.5339 4.2847 12.4847 3.82936 13.8507C3.59994 14.539 3.34881 15.0238 3.11851 15.316C2.948 15.5324 2.84626 15.5761 2.82292 15.5834C2.27551 15.5891 1.8335 16.0346 1.8335 16.5833V16.7917C1.8335 17.344 2.28121 17.7917 2.8335 17.7917H21.1668C21.7191 17.7917 22.1668 17.344 22.1668 16.7917V16.5833C22.1668 16.0346 21.7248 15.5891 21.1774 15.5834C21.1541 15.5761 21.0523 15.5324 20.8818 15.316C20.6515 15.0238 20.4004 14.539 20.171 13.8507C19.7156 12.4847 19.4168 10.5339 19.4168 8.33334V7.41667C19.4168 3.32056 16.0963 0 12.0002 0ZM2.82044 15.5841C2.81863 15.5844 2.81773 15.5846 2.81774 15.5847C2.81774 15.5847 2.81812 15.5847 2.81886 15.5845C2.81928 15.5844 2.8198 15.5843 2.82044 15.5841ZM6.5835 7.41667C6.5835 4.42512 9.00862 2 12.0002 2C14.9917 2 17.4168 4.42512 17.4168 7.41667V8.33334C17.4168 10.6891 17.7336 12.8633 18.2736 14.4832C18.4305 14.9538 18.6124 15.3966 18.8219 15.7917H5.1784C5.38795 15.3966 5.56986 14.9538 5.72672 14.4832C6.26668 12.8633 6.5835 10.6891 6.5835 8.33334V7.41667Z" fill="#a0aec0"></path>
                            <path d="M10.0541 19.9054C9.72577 19.4613 9.09959 19.3675 8.65552 19.6959C8.21145 20.0242 8.11764 20.6504 8.446 21.0945C9.27811 22.2198 10.5352 22.9999 12.0001 22.9999C13.465 22.9999 14.722 22.2198 15.5541 21.0945C15.8825 20.6504 15.7887 20.0242 15.3446 19.6959C14.9005 19.3675 14.2744 19.4613 13.946 19.9054C13.4147 20.6239 12.7124 20.9999 12.0001 20.9999C11.2877 20.9999 10.5854 20.6239 10.0541 19.9054Z" fill="#a0aec0"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </section>
    </div>
</body>
</html>
