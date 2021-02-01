@extends('layouts.front.app')

@section('content')
<style> /*! CSS Used from: https://themezhub.net/resido-live/resido/assets/css/styles.css */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
body{margin:0;font-family:var(--bs-font-sans-serif);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent;}
[tabindex="-1"]:focus:not(:focus-visible){outline:0!important;}
h2,h3,h4{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h2{font-size:calc(1.325rem + .9vw);}
@media (min-width:1200px){
h2{font-size:2rem;}
}
h3{font-size:calc(1.3rem + .6vw);}
@media (min-width:1200px){
h3{font-size:1.75rem;}
}
h4{font-size:calc(1.275rem + .3vw);}
@media (min-width:1200px){
h4{font-size:1.5rem;}
}
p{margin-top:0;margin-bottom:1rem;}
ul{padding-left:2rem;}
ul{margin-top:0;margin-bottom:1rem;}
ul ul{margin-bottom:0;}
b{font-weight:bolder;}
a{color:#0d6efd;text-decoration:underline;}
a:hover{color:#0a58ca;}
img{vertical-align:middle;}
label{display:inline-block;}
button{border-radius:0;}
button:focus{outline:dotted 1px;outline:-webkit-focus-ring-color auto 5px;}
button,input,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,select{text-transform:none;}
select{word-wrap:normal;}
[type=submit],button{-webkit-appearance:button;}
::-moz-focus-inner{padding:0;border-style:none;}
textarea{resize:vertical;}
.container{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1140px;}
}
@media (min-width:1400px){
.container{max-width:1320px;}
}
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x)/ -2);margin-left:calc(var(--bs-gutter-x)/ -2);}
.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x)/ 2);padding-left:calc(var(--bs-gutter-x)/ 2);margin-top:var(--bs-gutter-y);}
@media (min-width:768px){
.col-md-2{flex:0 0 auto;width:16.6666666667%;}
.col-md-3{flex:0 0 auto;width:25%;}
.col-md-4{flex:0 0 auto;width:33.3333333333%;}
.col-md-6{flex:0 0 auto;width:50%;}
.col-md-12{flex:0 0 auto;width:100%;}
}
@media (min-width:992px){
.col-lg-2{flex:0 0 auto;width:16.6666666667%;}
.col-lg-3{flex:0 0 auto;width:25%;}
.col-lg-6{flex:0 0 auto;width:50%;}
.col-lg-12{flex:0 0 auto;width:100%;}
}
.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-moz-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
textarea.form-control{min-height:calc(1.5em + .75rem + 2px);}
.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#212529;}
.btn:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);}
.btn:disabled{pointer-events:none;opacity:.65;}
.fade{transition:opacity .15s linear;}
@media (prefers-reduced-motion:reduce){
.fade{transition:none;}
}
.fade:not(.show){opacity:0;}
.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;}
.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc;}
.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0;}
.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none;}
.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px);}
@media (prefers-reduced-motion:reduce){
.modal.fade .modal-dialog{transition:none;}
}
.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem);}
.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0;}
.modal-body{position:relative;flex:1 1 auto;padding:1rem;}
@media (min-width:576px){
.modal-dialog{max-width:500px;margin:1.75rem auto;}
.modal-dialog-centered{min-height:calc(100% - 3.5rem);}
}
.clearfix::after{display:block;clear:both;content:"";}
.align-items-center{align-items:center!important;}
.mt-5{margin-top:3rem!important;}
.mb-0{margin-bottom:0!important;}
.mb-3{margin-bottom:1rem!important;}
.text-center{text-align:center!important;}
.text-success{color:#198754!important;}
.rounded{border-radius:.25rem!important;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/dropzone.css */
.dropzone,.dropzone *{box-sizing:border-box;}
.dropzone{min-height:150px;border:2px solid rgba(0,0,0,.3);background:#fff;padding:20px;}
.dropzone.dz-clickable{cursor:pointer;}
.dropzone.dz-clickable *{cursor:default;}
.dropzone.dz-clickable .dz-message,.dropzone.dz-clickable .dz-message *{cursor:pointer;}
.dropzone .dz-message{text-align:center;margin:2em 0;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/select2.css */
.select2-container{box-sizing:border-box;display:inline-block;margin:0;position:relative;vertical-align:middle;}
.select2-container .select2-selection--single{box-sizing:border-box;cursor:pointer;display:block;height:28px;user-select:none;-webkit-user-select:none;}
.select2-container .select2-selection--single .select2-selection__rendered{display:block;padding-left:8px;padding-right:20px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.select2-hidden-accessible{border:0!important;clip:rect(0 0 0 0)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;width:1px!important;white-space:nowrap!important;}
.select2-container--default .select2-selection--single{background-color:#fff;border:1px solid #aaa;border-radius:4px;}
.select2-container--default .select2-selection--single .select2-selection__rendered{color:#444;line-height:28px;}
.select2-container--default .select2-selection--single .select2-selection__placeholder{color:#999;}
.select2-container--default .select2-selection--single .select2-selection__arrow{height:26px;position:absolute;top:1px;right:1px;width:20px;}
.select2-container--default .select2-selection--single .select2-selection__arrow b{border-color:#888 transparent transparent transparent;border-style:solid;border-width:5px 4px 0 4px;height:0;left:50%;margin-left:-4px;margin-top:-2px;position:absolute;top:50%;width:0;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/magnific-popup.css */
button::-moz-focus-inner{padding:0;border:0;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/font-awesome.css */
.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-user-circle:before{content:"\f2bd";}
.fas{font-family:'Font Awesome 5 Free';font-weight:900;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/light-box.css */
.lb-loader,.lightbox{text-align:center;line-height:0;}
.lb-dataContainer:after,.lb-outerContainer:after{content:"";clear:both;}
.lightboxOverlay{position:absolute;top:0;left:0;z-index:9999;background-color:#000;filter:alpha(Opacity=80);opacity:.8;display:none;}
.lightbox{position:absolute;left:0;width:100%;z-index:10000;font-weight:400;}
.lightbox .lb-image{display:block;height:auto;max-width:inherit;max-height:none;border-radius:3px;border:4px solid #fff;}
.lb-outerContainer{position:relative;width:250px;height:250px;margin:0 auto;border-radius:4px;background-color:#fff;}
.lb-loader,.lb-nav{position:absolute;left:0;}
.lb-outerContainer:after{display:table;}
.lb-loader{top:43%;height:25%;width:100%;}
.lb-cancel{display:block;width:32px;height:32px;margin:0 auto;background:url(https://themezhub.net/resido-live/resido/assets/css/img/loading.gif) no-repeat;}
.lb-nav{top:0;height:100%;width:100%;z-index:10;}
.lb-nav a{outline:0;background-image:url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==);}
.lb-next,.lb-prev{height:100%;cursor:pointer;display:block;}
.lb-nav a.lb-prev{width:34%;left:0;float:left;background:url(https://themezhub.net/resido-live/resido/assets/css/img/lightbox-prev.png) left 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s;}
.lb-nav a.lb-prev:hover{filter:alpha(Opacity=100);opacity:1;}
.lb-nav a.lb-next{width:64%;right:0;float:right;background:url(https://themezhub.net/resido-live/resido/assets/css/img/lightbox-next.png) right 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s;}
.lb-nav a.lb-next:hover{filter:alpha(Opacity=100);opacity:1;}
.lb-dataContainer{margin:0 auto;padding-top:5px;width:100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px;}
.lb-dataContainer:after{display:table;}
.lb-data{padding:0 4px;color:#ccc;}
.lb-data .lb-details{width:85%;float:left;text-align:left;line-height:1.1em;}
.lb-data .lb-caption{font-size:13px;font-weight:700;line-height:1em;}
.lb-data .lb-number{display:block;clear:left;padding-bottom:1em;font-size:12px;color:#999;}
.lb-data .lb-close{display:block;float:right;width:30px;height:30px;background:url(https://themezhub.net/resido-live/resido/assets/css/img/close.png) top right no-repeat;text-align:right;outline:0;filter:alpha(Opacity=70);opacity:.7;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s;}
.lb-data .lb-close:hover{cursor:pointer;filter:alpha(Opacity=100);opacity:1;}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/line-icon.css */
[class^=lni-]{font-family:LineIcons!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.lni-phone-handset:before{content:"\eac1";}
.lni-playstore:before{content:"\eab4";}
.lni-apple:before{content:"\eab0";}
/*! end @import */
/*! @import https://themezhub.net/resido-live/resido/assets/css/plugins/themify.css */
[class^=ti-]{font-family:themify;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.ti-user:before{content:"\e602";}
.ti-unlock:before{content:"\e603";}
.ti-arrow-up:before{content:"\e627";}
.ti-close:before{content:"\e646";}
.ti-briefcase:before{content:"\e651";}
.ti-help:before{content:"\e69c";}
.ti-gallery:before{content:"\e71e";}
.ti-twitter:before{content:"\e72a";}
.ti-linkedin:before{content:"\e735";}
.ti-instagram:before{content:"\e73d";}
.ti-google:before{content:"\e73e";}
.ti-facebook:before{content:"\e741";}
.ti-email:before{content:"\e75a";}
/*! end @import */
#preloader{position:fixed;top:0;left:0;right:0;bottom:0;background-color:#f7f7f7;z-index:999999;}
.form-group{margin-bottom:15px;}
.preloader{width:50px;height:50px;display:inline-block;padding:0;text-align:left;box-sizing:border-box;position:absolute;top:50%;left:50%;margin-left:-25px;margin-top:-25px;}
.preloader span{position:absolute;display:inline-block;width:50px;height:50px;border-radius:100%;background:#00a94f;-webkit-animation:preloader 1.3s linear infinite;animation:preloader 1.3s linear infinite;}
.preloader span:last-child{animation-delay:-.8s;-webkit-animation-delay:-.8s;}
form.dropzone.dz-clickable.primary-dropzone{background:#f9fafc;border:1px solid #ebedf5;}
*{outline:none;}
body{background:#fff;color:#4e5c79;font-size:16px;font-family:'Muli',sans-serif;margin:0;overflow-x:hidden!important;font-weight:400;}
a{color:#2D3954;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover,a:focus{text-decoration:none;}
a.link{color:#fd5332;}
a.link:hover,a.link:focus,a:hover,a:focus{color:#fd5332;}
a.text-success:focus,a.text-success:hover{color:#0fca98!important;}
section{padding:80px 0;}
p{line-height:1.8;}
.gray-simple{background:#f3f7fd;}
.mr-2{margin-right:8px;}
.mr-1{margin-right:4.5px;}
.alert p{margin:0;}
.no-ul-list{padding:0;}
.no-ul-list li{list-style:none;}
.full-width{width:100%;}
p,ul{margin:0 0 10px;}
h2,h3,h4{color:#2D3954;font-weight:700;text-transform:capitalize;font-family:'Jost',sans-serif;}
h2{line-height:36px;font-size:30px;}
h3{line-height:30px;font-size:24px;}
h4{line-height:26px;font-size:21px;}
.theme-cl{color:#fd5332;}
.theme-bg{background: #89c736;}
ul:last-child{margin:0;}
.text-success{color:#0fca98!important;}
.alert-success{color:#27b737;background-color:#e9ffeb;border-color:#e9ffeb;}
.btn{border:2px solid transparent;color:#fff;padding:12px 25px;cursor:pointer;-webkit-transition:0;-o-transition:0;transition:0;border-radius:.1rem;}
.btn:hover{color:#fff;}
.btn:focus{-webkit-box-shadow:none;box-shadow:none;}
.btn-md{padding:1em 1.5em;font-size:1em;}
.checkbox-custom{opacity:0;position:absolute;}
.checkbox-custom,.checkbox-custom-label{display:flex;align-items:center;margin:5px;cursor:pointer;}
.checkbox-custom-label{position:relative;}
.checkbox-custom + .checkbox-custom-label:before{content:"";background:#fff;border:2px solid #dae3ec;display:inline-block;vertical-align:middle;width:20px;height:20px;border-radius:2px;padding:2px;margin-right:10px;text-align:center;}
.checkbox-custom:checked + .checkbox-custom-label:before{content:"\e64c";font-family:'Themify';background:#140c40!important;border-radius:2px;box-shadow:none;color:#fff;display:inline-flex;align-items:center;justify-content:center;font-size:8px;}
.checkbox-custom:focus + .checkbox-custom-label{outline:none;}
.form-control{height:56px;font-size:16px;box-shadow:none;padding:.5rem .75rem;border:1px solid #e0ecf5;background-clip:initial;}
.submit-page .form-control,.form-submit .form-control{background:#f9fafc;border:1px solid #ebedf5;border-radius:3px;color:#646e77;}
.select2-container{width:100%!important;}
.select2-container--default .select2-selection--single{background-color:#fff;border-radius:0;border:none;height:57px;}
.select2-container--default .select2-selection--single .select2-selection__rendered{color:#626a70;line-height:57px;text-align:left;padding:0 15px 0 0;}
.select2-container--default .select2-selection--single .select2-selection__arrow{height:50px;position:absolute;top:1px;right:10px;width:20px;}
.select2-container--default .select2-selection--single .select2-selection__placeholder{color:#6877a5;}
select.form-control:not([size]):not([multiple]){height:56px;}
textarea.form-control{height:180px;}
.tip-topdata{position:relative;color:#fff;text-decoration:none;width:15px;height:15px;display:inline-block;background:#394d8c;border-radius:50%;text-align:center;line-height:19px;margin-left:5px;font-size:9px;}
.tip-topdata:before{content:attr(data-tip);font-size:11px;font-weight:700;position:absolute;z-index:999;white-space:nowrap;bottom:9999px;left:0;background:#394d8c;color:#fff;padding:7px 15px;line-height:25px;border-radius:3px;top:-42px;opacity:0;-webkit-transition:opacity .4s ease-out;-moz-transition:opacity .4s ease-out;-o-transition:opacity .4s ease-out;transition:opacity .4s ease-out;text-shadow:none;display:inline-table;}
.tip-topdata:hover:before{opacity:1;}
.form-submit .select2-container--default .select2-selection--single{background-color:#f9fafc;border-radius:0;border:none;height:56px;border:1px solid #ebedf5;border-radius:4px;padding-left:15px;}
.form-submit .select2-container--default .select2-selection--single .select2-selection__rendered{line-height:55px;}
.nav-brand,.nav-brand:focus,.nav-brand:hover,.nav-menu>li>a{color:#39466d;}
.nav-dropdown,.nav-menu,ul{list-style:none;}
.navigation,.navigation *{-webkit-tap-highlight-color:transparent;}
.navigation,.navigation *{box-sizing:border-box;}
.navigation{width:100%;height:70px;display:table;position:relative;font-family:inherit;}
.nav-toggle{display:none;}
.navigation-portrait{height:48px;}
.align-to-right{float:right;}
.nav-header{float:left;}
.nav-brand{padding:17px 15px;font-size:24px;margin-right:1rem;text-decoration:none!important;}
.nav-dropdown>li>a,.nav-menu>li>a,nav a{text-decoration:none;}
.navigation-portrait .nav-brand{font-size:18px;line-height:48px;}
nav a,nav a:focus,nav a:hover{outline:0;}
.nav-toggle{width:30px;height:30px;padding:6px 2px 0;position:absolute;top:50%;margin-top:-14px;right:15px;cursor:pointer;}
.nav-toggle:before{content:"";position:absolute;width:24px;height:2px;background-color:#70798b;border-radius:10px;box-shadow:0 .5em 0 0 #70798b,0 1em 0 0 #70798b;}
.navigation-portrait .nav-toggle{display:block;}
.navigation-portrait .nav-menus-wrapper{width:320px;height:100%;top:0;left:-400px;position:fixed;background-color:#fff;z-index:20000;overflow-y:auto;-webkit-overflow-scrolling:touch;transition-duration:.8s;transition-timing-function:ease;}
.nav-menus-wrapper-close-button{width:30px;height:40px;margin:10px 7px;display:none;float:right;color:#70798b;font-size:26px;cursor:pointer;}
.navigation-portrait .nav-menus-wrapper-close-button{display:block;}
.nav-menu{margin:0;padding:0;line-height:normal;}
.navigation-portrait .nav-menu{width:100%;}
.nav-menu>li{display:inline-block;float:left;text-align:left;}
.navigation-portrait .nav-menu>li{width:100%;position:relative;border-top:solid 1px #f0f0f0;}
.navigation-portrait .nav-menu>li:last-child{border-bottom:solid 1px #f0f0f0;}
.nav-menu+.nav-menu>li:first-child{border-top:none;}
.nav-menu>li>a{padding:30px 12px;display:inline-block;transition:color .3s,background .3s;font-family:'Jost',sans-serif;font-weight:500;}
.navigation-portrait .nav-menu>li>a{height:auto;width:100%;padding:12px 15px 12px 26px;}
.nav-menu>.active>a,.nav-menu>li:hover>a{color:#0fca98!important;}
.nav-menu>li>a>i{width:18px;height:16px;line-height:16px;-ms-transform:scale(1.4);transform:scale(1.4);}
.navigation-portrait .nav-menu.nav-menu-social{width:100%;text-align:center;}
.nav-menu.nav-menu-social>li{text-align:center;float:none;border:none!important;}
.navigation-portrait .nav-menu.nav-menu-social>li{width:auto;}
.navigation-portrait .nav-menu.nav-menu-social>li>a{padding:15px;}
.submenu-indicator{margin-left:6px;margin-top:6px;float:right;transition:all .3s;}
.navigation-portrait .submenu-indicator{width:54px;height:44px;margin-top:0;position:absolute;text-align:center;z-index:20000;}
.submenu-indicator-chevron{height:6px;width:6px;display:block;border-style:solid;border-width:0 1px 1px 0;border-color:transparent #39466d #39466d transparent;-ms-transform:rotate(45deg);transform:rotate(45deg);transition:border .3s;}
.navigation-portrait .submenu-indicator-chevron{position:absolute;top:18px;left:24px;}
.nav-menu>.active>a .submenu-indicator-chevron,.nav-menu>li:hover>a .submenu-indicator-chevron{border-color:transparent #0fca98 #0fca98 transparent;}
.nav-dropdown{min-width:250px;margin:0;padding:0;display:none;position:absolute;z-index:98;white-space:nowrap;}
.navigation-portrait .nav-dropdown{width:100%;position:static;left:0;}
.nav-dropdown .nav-dropdown{left:100%;}
.nav-menu>li .nav-dropdown{border:none;padding:15px;background:#fff;box-shadow:0 0 50px 0 rgba(32,32,32,0.15);-webkit-box-shadow:0 0 50px 0 rgba(32,32,32,0.15);border-radius:.4rem;}
.nav-menu>li>.nav-dropdown:before{background-color:#fff;content:"";height:20px;left:25px;position:absolute;top:-10px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:20px;-webkit-transition:all .1s ease 0;-moz-transition:all .1s ease 0;-o-transition:all .1s ease 0;transition:all .1s ease 0;}
.nav-dropdown>li{width:100%;float:left;clear:both;position:relative;text-align:left;}
.nav-dropdown>li>a{width:100%;padding:14px 20px 14px 10px;border-bottom:1px solid #e4e8ec;display:inline-block;float:left;color:#5b6d90;-webkit-transition:all .3s ease 0;-moz-transition:all .3s ease 0;-o-transition:all .3s ease 0;transition:all .3s ease 0;font-family:'Jost',sans-serif;}
.nav-dropdown>li:last-child>a{border-bottom:none;}
.nav-dropdown>li>a:hover,.nav-dropdown>li>a:focus{padding-left:20px;color:#0fca98;}
.nav-dropdown>li:hover>a{color:#00a94f;}
.navigation-portrait .nav-dropdown>li>a{padding:12px 20px 12px 30px;}
.navigation-portrait .nav-dropdown>li>ul>li>a{padding-left:50px;}
.nav-dropdown .submenu-indicator{right:15px;top:16px;position:absolute;}
nav a{position:relative;}
.navigation-portrait .submenu-indicator{right:0;top:0;}
.nav-dropdown .submenu-indicator .submenu-indicator-chevron{-ms-transform:rotate(-45deg);transform:rotate(-45deg);}
.navigation-portrait .nav-dropdown .submenu-indicator .submenu-indicator-chevron{-ms-transform:rotate(45deg);transform:rotate(45deg);}
.nav-dropdown>li:hover>a .submenu-indicator-chevron{border-color:transparent #00a94f #00a94f transparent;}
nav a{display:inline-block;}
.header{background:#fff;position:relative;}
.nav-menu.nav-menu-social>li.add-listing{border-radius:4px;top:15px;position:relative;background:#08184b;height:50px;}
.nav-menu.nav-menu-social>li.add-listing a{top:0;padding:30px 20px;color:#fff!important;}
.nav-brand img{max-width:150px;position:relative;top:2px;}
.nav-menu.nav-menu-social>li>a>.fas{font-size:15px;-ms-transform:scale(1);transform:scale(1);}
ul:last-child{margin:0;}
.no-ul-list.third-row{display:table;width:100%;margin-bottom:15px;}
.no-ul-list.third-row li{width:50%;float:left;margin-bottom:7px;}
.no-ul-list{display:table;width:100%;margin-bottom:15px;}
.no-ul-list.third-row{display:flex;width:100%;margin-bottom:15px;flex-wrap:wrap;justify-content:center;align-items:center;}
.no-ul-list.third-row li{max-width:50%;float:left;margin-bottom:7px;flex:0 0 50%;}
.input-with-icon{position:relative;width:100%;}
.input-with-icon .form-control{border:none;border-radius:5px;padding-left:45px;height:60px;background:#fff;overflow:hidden;box-shadow:0 0 6px 1px rgba(62,28,131,0.1);-webkit-box-shadow:0 0 6px 1px rgba(62,28,131,0.1);}
.input-with-icon i{position:absolute;top:50%;transform:translateY(-50%);left:15px;font-size:18px;color:#a2a9bf;font-style:normal;cursor:normal;pointer-events:none;}
label{font-size:14px;font-weight:600;color:#455892;font-family:'Jost',sans-serif;}
span.mod-close{font-size:15px;color:#1a1e2b!important;cursor:pointer;z-index:1;box-shadow:none!important;}
.btn.btn-theme-light-2:hover,.btn.btn-theme-light-2:focus,.btn.btn-theme-light-2{background:rgba(15,202,152,0.2)!important;border:2px solid rgba(15,202,152,0.3)!important;padding:16px 50px;color:#0fca98!important;}
.form-control:focus{box-shadow:none;}
.page-title{width:100%;height:200px;text-align:left;display:flex;flex-direction:column;align-items:center;flex-wrap:wrap;justify-content:center;background:#2540a2;}
.page-title .ipt-title{color:#fff;}
.ipn-subtitle{color:#7590f3;}
.ipt-title{margin-bottom:5px;}
.ipn-subtitle{font-size:20px;font-family:initial;font-style:italic;}
.modal{z-index:99999;}
.modal-body{padding:2.5em 3em;}
h4.modal-header-title{font-size:4em;text-align:center;margin:1rem 0 1em;font-weight:800;}
.modal-divider{position:relative;margin:20px 0;text-align:center;}
.modal-divider:before{content:' ';position:absolute;top:50%;left:0;right:0;border-bottom:1px solid #E1E5F2;}
.modal-divider span{position:relative;background:#fff;padding:0 20px;}
.social-login ul{margin:0;width:100%;padding:0;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;}
.social-login ul li{display:inline-block;-ms-flex:0 0 33.333333%;flex:0 0 50%;width:50%;list-style:none;padding:0 10px;}
.social-login ul li a.btn{width:100%;border-radius:5px;padding:20px 0;color:#fff;background:#f4f5f7;}
.social-login ul li a.btn i{margin-right:7px;}
.social-login ul li a.btn.connect-fb{background:#3b5998;}
.social-login ul li a.btn.connect-google{background:#ec4514;}
.signup .modal-dialog{max-width:880px;z-index:999999;}
.signup .form-group{margin-bottom:1.5rem;}
.modal-dialog-centered .btn{font-weight:600;}
span.mod-close{width:35px;height:35px;position:absolute;top:15px;right:15px;background:#fff;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;border-radius:50%;font-size:13px;color:#fd5332;cursor:pointer;z-index:1;box-shadow:0 5px 24px rgba(31,37,59,0.15);-webkit-box-shadow:0 5px 24px rgba(31,37,59,0.15);}
.modal-dialog-centered .form-control{background:#f6f8fd;box-shadow:none;border:1px solid #edf0f9;}
.submit-page{position:relative;width:100%;padding:2em;background:#fff;box-shadow:0 0 20px 0 rgba(62,28,131,0.1);border-radius:10px;}
.call-to-act-wrap{padding:50px 0;}
.call-to-act{width:100%;display:flex;flex-wrap:wrap;color:#fff;align-items:center;}
.call-to-act-head{flex:1;}
.call-to-act h3{color:#fff;margin-bottom:5px;}
.btn.btn-call-to-act{background:#fff;padding:18px 40px;border-radius:50px;color:#333640;font-weight:600;box-shadow:0 0 0 5px rgba(255,255,255,0.2);-webkit-box-shadow:0 0 0 5px rgba(255,255,255,0.2);}
footer{z-index:99;position:relative;}
footer.dark-footer{background:#252c41;}
img.img-footer{max-width:180px;margin-bottom:2rem;}
.footer-add{color:#858b9f;font-size:13px;}
.footer-widget{padding:70px 0;}
h4.widget-title{margin-bottom:20px;font-weight:500;font-size:17px;}
.footer-widget ul{padding:0;margin:0;}
.footer-widget ul li{list-style:none;margin-top:15px;display:block;}
.footer-widget ul li a{color:#626a70;}
footer.skin-dark-footer h4{color:#fff;}
footer.skin-dark-footer .footer-widget ul li a,footer.skin-dark-footer,footer.skin-dark-footer a{color:#858b9f;transition:all ease .4s;font-size:14px;}
footer.skin-dark-footer .footer-widget ul li a:hover,footer.skin-dark-footer .footer-widget ul li a:focus{color:#fff;}
.footer-bottom{padding:20px 0;border-top:1px solid #e9edf3;}
.skin-dark-footer .footer-bottom{background:#1b2132;border-top:none;}
ul.footer-bottom-social{margin:0;padding:0;}
ul.footer-bottom-social li{display:inline-block;list-style:none;margin-right:17px;margin-top:0;}
ul.footer-bottom-social li a{color:#546e7a;}
ul.footer-bottom-social li a:hover,ul.footer-bottom-social li a:focus{color:#007bff;}
ul.footer-bottom-social li i{margin-right:5px;}
footer.skin-dark-footer ul.footer-bottom-social li a{color:#858b9f;font-size:14px;}
footer.skin-dark-footer ul.footer-bottom-social li a:hover,footer.skin-dark-footer ul.footer-bottom-social li a:focus{color:#fff;opacity:1;}
.other-store-link{width:auto;margin-bottom:20px;display:inline-block;}
.other-store-link:last-child{margin-bottom:0;}
.other-store-app{width:250px;height:70px;border:1px solid #353d56;border-radius:4px;padding:0 14px;display:flex;flex-wrap:wrap;align-items:center;color:#fff;}
.os-app-caps span{display:block;font-size:13px;font-weight:400;color:#858b9f;}
.os-app-icon{margin-right:13px;}
.os-app-icon i{font-size:32px;}
.os-app-caps{font-size:18px;font-weight:600;}
form.dropzone.dz-clickable.primary-dropzone{background:#f9fafc;border:1px solid #ebedf5;}
.alert-success{color:#27b737;background-color:#e9ffeb;border-color:#e9ffeb;}
@media (min-width: 768px){
.no-ul-list.third-row li{max-width:33.333333%;flex:0 0 33.333333%;}
}
@media (min-width: 992px){
.header .nav-menu>.active>a .submenu-indicator-chevron,.header .nav-menu>li:hover>a .submenu-indicator-chevron{border-color:transparent #0fca98 #0fca98 transparent;}
.nav-menu.nav-menu-social>li.add-listing a{top:-16px;}
.modal-dialog{max-width:600px;margin:30px auto;}
}
@media (min-width: 993px){
.head-shadow{box-shadow:0 5px 30px rgba(0,22,84,0.1);-webkit-box-shadow:0 5px 30px rgba(0,22,84,0.1);}
}
@media (max-width: 992px){
.nav-menu>li .nav-dropdown{background:transparent;padding:0;box-shadow:none;}
.nav-menu>li>.nav-dropdown:before{display:none;}
.navigation-portrait .nav-menu.nav-menu-social{padding-top:1rem;}
}
@media (max-width: 991px){
.nav-menu.nav-menu-social>li.add-listing a{top:0;padding:15px 20px;}
.nav-menu.nav-menu-social>li.add-listing{top:0;}
}
@media (max-width: 767px){
.call-to-act{display:block;text-align:center;}
.call-to-act-head{margin-bottom:1rem;}
.footer-widget{padding-bottom:0;}
.footer-bottom{margin-top:70px;}
.modal-body{padding:2.5em 1em;}
}
#back2Top{width:40px;line-height:40px;overflow:hidden;z-index:999;display:none;cursor:pointer;position:fixed;bottom:10px;right:20px;text-align:center;font-size:15px;border-radius:4px;text-decoration:none;background:#333c56;color:#fff;}
#back2Top:hover{background-color:#fff;color:#333c56;}
/*! CSS Used from: https://themezhub.net/resido-live/resido/assets/css/colors.css */
a:focus{color:#f02c2d;}
a:focus{color:#0fca98;}
.blue-skin .theme-bg,.blue-skin .checkbox-custom:checked + .checkbox-custom-label:before{background-color:#1266e3;background:#1266e3;}
.blue-skin a.link:hover,.blue-skin a.link:focus,.blue-skin a:hover,a:focus,.blue-skin .theme-cl,.blue-skin span.mod-close{color:#1266e3;}
a:focus{color:#ffa50d;}
a:focus{color:#0F52BA;}
a:focus{color:#00A877;}
a:focus{color:#7065ef;}
a:focus{color:#f40c43;}
a:focus{color:#19b521;}
a:focus{color:#0176ff;}
/*! CSS Used keyframes */
@keyframes preloader{0%{transform:scale(0,0);opacity:.5;}100%{transform:scale(1,1);opacity:0;}}
@-webkit-keyframes preloader{0%{-webkit-transform:scale(0,0);opacity:.5;}100%{-webkit-transform:scale(1,1);opacity:0;}}
/*! CSS Used fontfaces */
@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:400;font-display:auto;src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.eot);src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.eot#iefix) format("embedded-opentype"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.woff2) format("woff2"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.woff) format("woff"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.ttf) format("truetype"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-regular-400.svg#fontawesome) format("svg");}
@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:900;font-display:auto;src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.eot);src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.eot#iefix) format("embedded-opentype"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.woff2) format("woff2"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.woff) format("woff"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.ttf) format("truetype"),url(https://themezhub.net/resido-live/resido/assets/css/fonts/fa-solid-900.svg#fontawesome) format("svg");}
@font-face{font-family:LineIcons;src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/LineIcons.eot?y2l643);src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/LineIcons.eot?y2l643#iefix) format('embedded-opentype'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/LineIcons.ttf?y2l643) format('truetype'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/LineIcons.woff?y2l643) format('woff'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/LineIcons.svg?y2l643#LineIcons) format('svg');font-weight:400;font-style:normal;}
@font-face{font-family:themify;src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/themify.eot?-fvbane);src:url(https://themezhub.net/resido-live/resido/assets/css/fonts/themify.eot#iefix-fvbane) format('embedded-opentype'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/themify.woff?-fvbane) format('woff'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/themify.ttf?-fvbane) format('truetype'),url(https://themezhub.net/resido-live/resido/assets/css/fonts/themify.svg?-fvbane#themify) format('svg');font-weight:400;font-style:normal;}
@font-face{font-family:'Muli';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Muli';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Muli';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Muli';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Muli';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Muli';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Muli';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Muli';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Muli';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Muli';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Muli';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Muli';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Jost';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oDd4iYl.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Jost';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73ord4iYl.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Jost';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/jost/v6/92zatBhPNqw73oTd4g.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}

.page-title {
    padding-top: 65px;
    background: white;
}
.ipt-title, .ipn-subtitle {
    text-align: center;
    display: block;
}
.ipt-title {
    color: #89C736 !important;
}
.ipn-subtitle {
    color: #243a69!important;
}
</style>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">Adauga proprietate</h2>
               
            </div>
        </div>
    </div>
</div>
<section class="gray-simple">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                

            </div>

            <!-- Submit Form -->
            <form action="/adauga_anunt" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col-lg-12 col-md-12">

                <div class="submit-page">

                    <!-- Basic Information -->
                    <div class="form-submit">
                        <h3>Informatii principale</h3>
                        <div class="submit-section">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label>Titlu anunt<span class="tip-topdata" data-tip="Titlu anunt"><i class="ti-help"></i></span></label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Tranzactie</label>
                                    <select name="transaction_type" >
                                      
                                        <option value="1" >Cumparare</option>
                                        <option value="2" >Inchiriere</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Tip proprietate</label>
                                    <select name="type">
                                       
                                        @foreach($types as $elem)
                                        <option value="{{$elem->key_int}}" >{{$elem->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Pret</label>
                                    <input type="text" name="price" class="form-control" placeholder="EUR">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="form-submit">
                        <h3>Galerie foto</h3>
                        <div class="submit-section">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label>Urca galerie</label>
                                   
                                       <input type="file" name="images[]" value="" />
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="form-submit">
                        <h3>Localizare</h3>
                        <div class="submit-section">
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>Adresa</label>
                                    <input type="text" name="adresa" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Oras</label>
                                    <input type="text" name="oras" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Judet</label>
                                    <input type="text" name="judet" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Latitudine</label>
                                    <input type="text" name="lat" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Longitudine</label>
                                    <input type="text" name="long" class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Detailed Information -->
                    <div class="form-submit">
                        <h3>Informatii detaliate</h3>
                        <div class="submit-section">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label>Descriere</label>
                                    <textarea name="description" class="form-control h-120"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Specificatii </label>
                                    <div class="o-features">
                                        <ul class="no-ul-list third-row">
                                            <li>
                                                <input id="a-1" class="checkbox-custom" name="optiuni[]" value="Aer Conditionat" type="checkbox">
                                                <label for="a-1" class="checkbox-custom-label">Aer conditionat</label>
                                            </li>
                                            <li>
                                                <input id="a-2" class="checkbox-custom"name="optiuni[]" value="Mobilat" type="checkbox">
                                                <label for="a-2" class="checkbox-custom-label">Mobilat</label>
                                            </li>
                                            <li>
                                                <input id="a-3" class="checkbox-custom" name="optiuni[]" value="Incalzire" type="checkbox">
                                                <label for="a-3" class="checkbox-custom-label">Incalzire</label>
                                            </li>
                                            <li>
                                                <input id="a-4" class="checkbox-custom" name="optiuni[]" value="Internet" type="checkbox">
                                                <label for="a-4" class="checkbox-custom-label">Internet</label>
                                            </li>
                                            <li>
                                                <input id="a-5" class="checkbox-custom" name="optiuni[]" value="Cuptor" type="checkbox">
                                                <label for="a-5" class="checkbox-custom-label">Cuptor</label>
                                            </li>
                                            <li>
                                                <input id="a-6" class="checkbox-custom" name="optiuni[]" value="Fumatul permis" type="checkbox">
                                                <label for="a-6" class="checkbox-custom-label">Fumatul permis</label>
                                            </li>
                                            <li>
                                                <input id="a-7" class="checkbox-custom" name="optiuni[]" value="Terasa" type="checkbox">
                                                <label for="a-7" class="checkbox-custom-label">Terasa</label>
                                            </li>
                                            <li>
                                                <input id="a-8" class="checkbox-custom" name="optiuni[]" value="Balcon" type="checkbox">
                                                <label for="a-8" class="checkbox-custom-label">Balcon</label>
                                            </li>
                                            <li>
                                                <input id="a-9" class="checkbox-custom" name="optiuni[]" value="Centrala Termica" type="checkbox">
                                                <label for="a-9" class="checkbox-custom-label">Centrala termica</label>
                                            </li>
                                            <li>
                                                <input id="a-10" class="checkbox-custom" name="optiuni[]" value="Wi-Fi" type="checkbox">
                                                <label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
                                            </li>
                                            <li>
                                                <input id="a-11" class="checkbox-custom" name="optiuni[]" value="Plaja"type="checkbox">
                                                <label for="a-11" class="checkbox-custom-label">Plaja</label>
                                            </li>
                                            <li>
                                                <input id="a-12" class="checkbox-custom" name="optiuni[]" value="Parcare" type="checkbox">
                                                <label for="a-12" class="checkbox-custom-label">Parcare</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="form-submit">
                        <h3>Informatii de contact</h3>
                        <div class="submit-section">
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label>Nume</label>
                                    <input type="text" name="contact_name" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="text" name="contact_email"class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Telefon </label>
                                    <input type="text" name="contact_telefon" class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <label>Accept GDPR si Termeni si conditii*</label>
                        <ul class="no-ul-list">
                            <li>
                                <input id="aj-1" class="checkbox-custom" name="tos" type="checkbox">
                                <label for="aj-1" class="checkbox-custom-label">Permit folosirea datelor si declar ca am citit <a href="termeni-si-conditii">Termenii si conditiile</a>.</label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <button class="btn btn-theme-light-2 rounded" type="submit">Posteaza anunt</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</form>

</section>
<section class="theme-bg call-to-act-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call-to-act">
                    <div class="call-to-act-head">
                        <h3>Vrei sa faci parte din platforma construita special pentru proprietari?</h3>
                        <span>Iti oferim cele mai bune solutii.</span>
                    </div>
                    <a href="#" class="btn btn-call-to-act">De ce Direct Proprietar?</a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection