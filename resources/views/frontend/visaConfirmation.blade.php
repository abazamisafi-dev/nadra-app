<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PAK VISA</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript (optional, if you're using Bootstrap JS features) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <!-- Styles -->
        <style>

/* Fullscreen Loader */
#page-loader {
    position: fixed;
    inset: 0;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 99999;
}

/* Hide page initially */
body.loaded #page-loader {
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.4s ease;
}
                /* Center the card horizontally and vertically */
    .card-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 80px);
        background-color: white; 
        position: relative;
        
        
    }

    .card {
       
        width: 38%;
        background-color: rgb(247, 247, 247);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s; 
        
        
        
        
    }



    .card:hover {
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); 
        background-color: white;
    }

    
    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 10%;
        height: 3px;
        margin-left: 5%;
        background-color: rgb(0, 104, 172); 
       
    }
    .img-fluid{
        
        width: 130px;
    }
    #img{
        margin-left:5px;
        width: 100px;
        height:140px;
    }


    /* @media (max-width: 767px) { 
    .card {
      width: 85%;
      text-align: center; 
     
      margin-top: -70px;

   
      
     

     
    }
    #imagee{
        margin-left: 150%;
        width: 200px;
        height: 140px;

    }
    .card-wrapper{
        height: 150vh;
        
        
    }
    .img-fluid {
        margin-left: 150%;
    }
  }
  */
@media (max-width: 767px) {
    .card-wrapper {
        height: auto; /* Allow wrapper to be flexible on small screens */
        padding-top: 40px;
        padding-bottom: 150px;
    }
    .card {
        width: 90%; /* Make card width smaller on mobile */
        padding: 15px; /* Reduce padding for mobile */
        text-align: center; 
    }
    #imagee {
    
    max-width: 400px;
    height: auto;

        
    }
 .img{
    align-items: center;
 }
   .img-fluid {
        margin-left: 100%;
    }
   
}


  .styled_button:hover {
        
        
    }		
#log{
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); /* Change shadow on hover */
    background-color: rgb(0,104,172);
    color: white;
    height: 30px;
    padding-top: 3px;
    margin-top: 5px;
    width: 110px;
    font-size: 14px;
    text-decoration: none;
}
#ref{
    /* margin: 25%; */
    color: rgb(0, 104, 172);
    font-size: 12px;
    font-weight: bold;
    font-family: Arial, sans-serif;
}
#ref:hover{
    text-decoration: none;
}
#ref_no{
    text-align: center;
}
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        
        </style>
    @include('frontend.layout.navBar')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
                <!-- Loading Spinner -->
 <!-- Page Loader -->
<div id="page-loader">
    <svg width="80" height="80" viewBox="0 0 100 100">
        <g fill="none" stroke="#0068ac" stroke-width="4" stroke-linecap="round">
            <path d="M50 10 A40 40 0 0 1 90 50">
                <animateTransform
                    attributeName="transform"
                    type="rotate"
                    from="0 50 50"
                    to="360 50 50"
                    dur="1.2s"
                    repeatCount="indefinite"/>
            </path>
            <path d="M50 20 A30 30 0 0 1 80 50" opacity="0.7">
                <animateTransform
                    attributeName="transform"
                    type="rotate"
                    from="360 50 50"
                    to="0 50 50"
                    dur="1s"
                    repeatCount="indefinite"/>
            </path>
        </g>
    </svg>
</div>

<div class="card-wrapper">
        <div class="card">

                <div class="card-body">
                 <div class="row ">
                    <div class="col-12"><a href="#" id="ref">Visa Reference Number - <p id="ref_no">88003563497</p></a></div>
                 </div>
                 <br>
                 <hr/>
              
                        <div class="row" style="margin-top:8px; ">
                            
                            <div class="col-4 col-sm-12 col-lg-4 col-md-4 img" style="border: 5px;">
                                <img src="{{ asset($info->photo_path) }}" style=" " class="img-fluid" id="imagee" alt="Image">
                            </div>
                            <div class="col-md-8">	
                                                    
                                                    
                                <div class="row" style="">
                                    <div class="col-md-5 ">
                                        <label style="font-weight: bold;    font-size: 10px;
                                        font-family: Arial;">NAME</label>
                                    </div>
                        
                                    <div class="col-md-7 ">
                                        <p style="font-size: 15px;  font-size: 10px;
                                        font-family: Arial;">{{$info->name}}</p>
                                    </div>
                                </div>
                            
                                <div class="row" style="margin-top:8px;">
                                    <div class="col-md-5 "><span style="     font-size: 24;     font-weight: bold;  font-size: 10px;
                                        font-family: Arial;">Passport No</span>
                                        
                                    </div>
                        
                                    <div class="col-md-7 ">
                                        <p style="font-size: 15px;  font-size: 10px;
                                        font-family: Arial;">{{$info->passport_no}}</p>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            
                                <div class="row" style="margin-top:8px;">
                                    <div class="col-md-5 "><span style="     font-size: 24;     font-weight: bold;  font-size: 10px;
                                        font-family: Arial;">Passport Country</span>
                                        
                                        
                                        
                                        
                                    </div>
                        
                                    <div class="col-md-7 ">
                                        <p style="font-size: 15px; font-size: 10px;
                                        font-family: Arial;">Afghanistan</p>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top:8px;">
                                    <div class="col-md-5">
                                        <label style="font-weight: bold; font-size: 10px;
                                        font-family: Arial;">Visa Category</label>
                                    </div>
                        
                                    <div class="col-md-7 ">
                                        <p style="font-size: 15px; font-size: 10px;
                                        font-family: Arial;">{{$info->visaCategory}}</p>
                                    </div>
                                </div>	
                            
                             </div>
                   
                        
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Visa Sub Category</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;">{{$info->visaSubCategory}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Application Type</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;">{{$info->applicationType}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="">
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Staying Facility</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;">{{$info->stayFicility}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Visa Start Date</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;"> {{$info->visaStartDate}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="row" style="">
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Visa End Date</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;">{{$info->visaEndDate}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="row" style="">
                                <div class="col-md-5 ">
                                    <label style="font-weight: bold; font-size: 10px;
                                    font-family: Arial;">Visa Duration</label>
                                </div>
                    
                                <div class="col-md-7 ">
                                    <p style="font-size: 15px; font-size: 10px;
                                    font-family: Arial;">{{$info->visaDuration}} day(s)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row " style="text-align: center; display: flex;
                    justify-content: center;
                    align-items: center; "><a href="https://visa.nadra.gov.pk/e-visa/authenticate" class="styled_button" id="log">Back to Login</a>
                    </div>
                

            </div>
        </div>
    </div>

        {{-- @include('frontend.layout.body') --}}
        @include('frontend.layout.footer')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Hide the spinner once the page is fully loaded
            window.addEventListener('load', function() {
                const spinner = document.getElementById('loadingSpinner');
                spinner.style.visibility = 'hidden';
                spinner.style.opacity = 0;
            });
        </script>
<script>
(function () {
    const MIN_TIME = 2000; // 5 seconds
    const startTime = Date.now();

    window.addEventListener("load", function () {
        const loader = document.getElementById("page-loader");
        if (!loader) return;

        const elapsed = Date.now() - startTime;
        const remaining = Math.max(0, MIN_TIME - elapsed);

        setTimeout(() => {
            loader.style.opacity = "0";
            loader.style.transition = "opacity 0.4s ease";

            setTimeout(() => {
                if (loader.parentNode) loader.remove();
            }, 400);
        }, remaining);
    });
})();
</script>

    </body>
    
    
</html>
