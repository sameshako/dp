@extends('layouts.front.app')

@section('content')

<style>
    /*! CSS Used from: Embedded */
    .gm-style-pbc {
        transition: opacity ease-in-out;
        background-color: rgba(0, 0, 0, 0.45);
        text-align: center;
    }

    .gm-style-pbt {
        font-size: 22px;
        color: white;
        font-family: Roboto, Arial, sans-serif;
        position: relative;
        margin: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    /*! CSS Used from: Embedded */
    .gm-style img {
        max-width: none;
    }

    .gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
    }

    /*! CSS Used from: https://themezhub.net/resido-demo/resido/assets/css/styles.css */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/css/bootstrap.min.css */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0 !important;
    }

    h2,
    h3,
    h4,
    h5 {
        margin-top: 0;
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    h2 {
        font-size: calc(1.325rem + .9vw);
    }

    @media (min-width:1200px) {
        h2 {
            font-size: 2rem;
        }
    }

    h3 {
        font-size: calc(1.3rem + .6vw);
    }

    @media (min-width:1200px) {
        h3 {
            font-size: 1.75rem;
        }
    }

    h4 {
        font-size: calc(1.275rem + .3vw);
    }

    @media (min-width:1200px) {
        h4 {
            font-size: 1.5rem;
        }
    }

    h5 {
        font-size: 1.25rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ul {
        padding-left: 2rem;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    strong {
        font-weight: bolder;
    }

    small {
        font-size: .875em;
    }

    sub {
        position: relative;
        font-size: .75em;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -.25em;
    }

    a {
        color: #0d6efd;
        text-decoration: underline;
    }

    a:hover {
        color: #0a58ca;
    }

    img {
        vertical-align: middle;
    }

    label {
        display: inline-block;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: dotted 1px;
        outline: -webkit-focus-ring-color auto 5px;
    }

    button,
    input,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    select {
        text-transform: none;
    }

    [role=button] {
        cursor: pointer;
    }

    select {
        word-wrap: normal;
    }

    [type=button],
    [type=submit],
    button {
        -webkit-appearance: button;
    }

    ::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    textarea {
        resize: vertical;
    }

    iframe {
        border: 0;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .container {
        width: 100%;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px;
        }
    }

    @media (min-width:1400px) {
        .container {
            max-width: 1320px;
        }
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2);
    }

    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y);
    }

    @media (min-width:576px) {
        .col-sm-12 {
            flex: 0 0 auto;
            width: 100%;
        }
    }

    @media (min-width:768px) {
        .col-md-4 {
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .col-md-12 {
            flex: 0 0 auto;
            width: 100%;
        }
    }

    @media (min-width:992px) {
        .col-lg-2 {
            flex: 0 0 auto;
            width: 16.6666666667%;
        }

        .col-lg-3 {
            flex: 0 0 auto;
            width: 25%;
        }

        .col-lg-4 {
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .col-lg-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .col-lg-8 {
            flex: 0 0 auto;
            width: 66.6666666667%;
        }

        .col-lg-12 {
            flex: 0 0 auto;
            width: 100%;
        }
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    @media (prefers-reduced-motion:reduce) {
        .form-control {
            transition: none;
        }
    }

    .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25);
    }

    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled {
        background-color: #e9ecef;
        opacity: 1;
    }

    textarea.form-control {
        min-height: calc(1.5em + .75rem + 2px);
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    @media (prefers-reduced-motion:reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover {
        color: #212529;
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25);
    }

    .btn:disabled {
        pointer-events: none;
        opacity: .65;
    }

    .btn-link {
        font-weight: 400;
        color: #0d6efd;
        text-decoration: underline;
    }

    .btn-link:hover {
        color: #0a58ca;
    }

    .btn-link:disabled {
        color: #6c757d;
    }

    .fade {
        transition: opacity .15s linear;
    }

    @media (prefers-reduced-motion:reduce) {
        .fade {
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1rem 1rem;
    }

    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        transition: transform .3s ease-out;
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion:reduce) {
        .modal.fade .modal-dialog {
            transition: none;
        }
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem;
    }

    @media (min-width:576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .align-items-center {
        align-items: center !important;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .p-4 {
        padding: 1.5rem !important;
    }

    .text-center {
        text-align: center !important;
    }

    .rounded {
        border-radius: .25rem !important;
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/slick.css */
    .slick-list,
    .slick-slider,
    .slick-track {
        position: relative;
        display: block;
    }

    .slick-slider {
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: 0;
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        top: 0;
        left: 0;
    }

    .slick-track:after,
    .slick-track:before {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    .slick-slide img {
        display: block;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/slick-theme.css */
    .slick-next,
    .slick-prev {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        cursor: pointer;
        color: transparent;
        border: none;
        outline: 0;
        background: 0 0;
    }

    .slick-next:focus,
    .slick-next:hover,
    .slick-prev:focus,
    .slick-prev:hover {
        color: transparent;
        outline: 0;
        background: 0 0;
    }

    .slick-next:focus:before,
    .slick-next:hover:before,
    .slick-prev:focus:before,
    .slick-prev:hover:before {
        opacity: 1;
    }

    .slick-next:before,
    .slick-prev:before {
        font-family: slick;
        font-size: 20px;
        line-height: 1;
        opacity: .75;
        color: #fff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
        left: -25px;
    }

    .slick-prev:before {
        content: '←';
    }

    .slick-next {
        right: -25px;
    }

    .slick-next:before {
        content: '→';
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/magnific-popup.css */
    button::-moz-focus-inner {
        padding: 0;
        border: 0;
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/font-awesome.css */
    .fa,
    .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
    }

    .fa-arrow-alt-circle-down:before {
        content: "\f358";
    }

    .fa-heart:before {
        content: "\f004";
    }

    .fa-percent:before {
        content: "\f295";
    }

    .fa-share:before {
        content: "\f064";
    }

    .fa-star:before {
        content: "\f005";
    }

    .fa-star-half:before {
        content: "\f089";
    }

    .fa,
    .fas {
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/line-icon.css */
    [class^=lni-] {
        font-family: LineIcons !important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .lni-map-marker:before {
        content: "\e91e";
    }

    .lni-phone-handset:before {
        content: "\eac1";
    }

    .lni-playstore:before {
        content: "\eab4";
    }

    .lni-apple:before {
        content: "\eab0";
    }

    /*! end @import */
    /*! @import https://themezhub.net/resido-demo/resido/assets/css/plugins/themify.css */
    [class^=ti-] {
        font-family: themify;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .ti-user:before {
        content: "\e602";
    }

    .ti-unlock:before {
        content: "\e603";
    }

    .ti-star:before {
        content: "\e60a";
    }

    .ti-arrow-up:before {
        content: "\e627";
    }

    .ti-close:before {
        content: "\e646";
    }

    .ti-briefcase:before {
        content: "\e651";
    }

    .ti-money:before {
        content: "\e68c";
    }

    .ti-location-pin:before {
        content: "\e693";
    }

    .ti-control-play:before {
        content: "\e6ad";
    }

    .ti-calendar:before {
        content: "\e6b6";
    }

    .ti-twitter:before {
        content: "\e72a";
    }

    .ti-linkedin:before {
        content: "\e735";
    }

    .ti-instagram:before {
        content: "\e73d";
    }

    .ti-google:before {
        content: "\e73e";
    }

    .ti-facebook:before {
        content: "\e741";
    }

    .ti-email:before {
        content: "\e75a";
    }

    /*! end @import */
    .form-group {
        margin-bottom: 15px;
    }

    * {
        outline: none;
    }

    a {
        color: #2D3954;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    a.link {
        color: #fd5332;
    }

    a.link:hover,
    a.link:focus,
    a:hover,
    a:focus {
        color: #fd5332;
    }

    section {
        padding: 80px 0 80px;
    }

    p {
        line-height: 1.8;
    }

    .gray {
        background: #f7f9fc;
    }

    .gray-simple {
        background: #f3f7fd;
    }

    .mr-2 {
        margin-right: 8px;
    }

    .mr-1 {
        margin-right: 4.5px;
    }

    .full-width {
        width: 100%;
    }

    p,
    ul {
        margin: 0 0 10px;
    }

    h2,
    h3,
    h4,
    h5 {
        color: #2D3954;
        font-weight: 700;
        text-transform: capitalize;
        font-family: 'Jost', sans-serif;
    }

    h5 {
        color: #2D3954;
    }

    h2 {
        line-height: 36px;
        font-size: 30px;
    }

    h3 {
        line-height: 30px;
        font-size: 24px;
    }

    h4 {
        line-height: 26px;
        font-size: 21px;
    }

    h5 {
        line-height: 22px;
        font-size: 18px;
    }

    .theme-cl {
        color: #fd5332;
    }

    .theme-bg {
        background: #fd5332;
    }

    .ht-80 {
        height: 80px;
    }

    .ht-80 {
        height: 80px;
    }

    ul:last-child {
        margin: 0;
    }

    html body .b-0 {
        border: none !important;
    }

    .btn {
        border: 2px solid transparent;
    }

    .btn {
        color: #ffffff;
        padding: 12px 25px;
        cursor: pointer;
        -webkit-transition: 0s;
        -o-transition: 0s;
        transition: 0s;
        border-radius: 0.1rem;
    }

    .btn:hover {
        color: #ffffff;
    }

    .btn:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn-link {
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #263238;
        padding: 10px 15px;
    }

    .btn-link:hover {
        color: #27b737;
    }

    .btn-md {
        padding: 1em 1.5em;
        font-size: 1em;
    }

    .btn-black {
        background: #263547;
        color: #ffffff;
        border: 1px solid #263547;
    }

    .btn-black:hover,
    .btn-black:focus {
        background: #0f7dff;
        border: 1px solid #0f7dff;
    }

    .form-control {
        height: 56px;
        font-size: 16px;
        box-shadow: none;
        padding: .5rem .75rem;
        border: 1px solid #e0ecf5;
        background-clip: initial;
    }

    select.form-control:not([size]):not([multiple]) {
        height: 56px;
    }

    textarea.form-control {
        height: 180px;
    }

    ul {
        list-style: none;
    }

    ul:last-child {
        margin: 0;
    }

    .map-container {
        float: left;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    #singleMap {
        width: 100%;
        position: relative;
        height: 300px;
        float: left;
        margin-bottom: 30px;
    }

    .input-with-icon {
        position: relative;
        width: 100%;
    }

    .input-with-icon .form-control {
        border: none;
        border-radius: 5px;
        padding-left: 45px;
        height: 60px;
        background: #ffffff;
        overflow: hidden;
        box-shadow: 0 0 6px 1px rgba(62, 28, 131, 0.1);
        -webkit-box-shadow: 0 0 6px 1px rgba(62, 28, 131, 0.1);
    }

    .input-with-icon i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 15px;
        font-size: 18px;
        color: #a2a9bf;
        font-style: normal;
        cursor: normal;
        pointer-events: none;
    }

    label {
        font-size: 14px;
        font-weight: 600;
        color: #455892;
        font-family: 'Jost', sans-serif;
    }

    span.mod-close {
        font-size: 15px;
        color: #1a1e2b !important;
        cursor: pointer;
        z-index: 1;
        box-shadow: none !important;
    }

    .btn.btn-theme-light-2:hover,
    .btn.btn-theme-light-2:focus,
    .btn.btn-theme-light-2 {
        background: rgba(15, 202, 152, 0.2) !important;
        border: 2px solid rgba(15, 202, 152, 0.3) !important;
        padding: 16px 50px;
        color: #89c736 !important;
    }

    .list-fx-features {
        margin-top: 5px;
        display: flex;
        width: 100%;
        position: relative;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .listing-card-info-icon {
        display: inline-block;
        padding-left: 0px;
        position: relative;
        vertical-align: top;
        width: 33.333333%;
        flex: 0 0 33.333333%;
        margin-bottom: 0rem;
        font-size: 14px;
        color: #616e96;
        font-weight: 600;
    }

    .inc-fleat-icon {
        width: 25px;
        height: 25px;
        background: #edf1f9;
        border-radius: 50%;
        margin-right: 7px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .form-control:focus {
        box-shadow: none;
    }

    .slick-next:before {
        content: "\e628";
        font-family: 'themify';
    }

    .slick-prev:before {
        content: "\e629";
        font-family: 'themify';
    }

    .block-body {
        line-height: 1.7;
        display: inline-block;
        width: 100%;
    }

    .avl-features {
        margin: 0;
        padding: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .avl-features li {
        display: block;
        list-style: none;
        position: relative;
        margin: 10px 0 10px;
        padding-left: 30px;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .avl-features li:before {
        content: "\e64c";
        font-family: 'themify';
        position: absolute;
        color: #00ba74;
        width: 20px;
        height: 20px;
        background: rgba(0, 186, 116, 0.1);
        text-align: center;
        line-height: 20px;
        border-radius: 50%;
        left: 0;
        top: 5px;
        font-size: 10px;
    }

    .accordion {
        border: 1px solid #e2e6ea;
        border-radius: 4px;
    }

    .accordion .card {
        border: none;
    }

    .card-header {
        background: #f5f8fb;
        border-bottom: 1px solid #e2e6ea;
    }

    .accordion .btn-link {
        color: #5c657f;
        text-decoration: none;
    }

    .accordion .btn-link>span {
        font-size: 12px;
        font-weight: 400;
        margin-left: 15px;
        background: #e8ecf1;
        padding: 6px 15px;
        border-radius: 2px;
    }

    .author-review ul {
        margin: 0;
        padding: 0;
    }

    li.article_comments_wrap {
        border-bottom: 1px dashed #e3e7ea;
        margin-bottom: 20px;
    }

    li.article_comments_wrap:last-child {
        border: none;
        margin: 0;
    }

    .author-review article {
        overflow: hidden;
        padding-bottom: 25px;
    }

    .author-review article .article_comments_thumb {
        float: left;
        width: 80px;
    }

    .author-review article .article_comments_thumb img {
        max-width: 80px;
        border-radius: 50%;
    }

    .author-review article .comment-details {
        overflow: hidden;
        padding-left: 30px;
    }

    .author-review article .comment-details .comment-meta {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .author-review article .comment-details .comment-meta .comment-left-meta {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 70%;
        flex: 1 1 70%;
    }

    .author-review article .comment-details .comment-meta .comment-left-meta .author-name {
        font-size: 17px;
        line-height: 26px;
        margin-bottom: 0px;
    }

    .author-review article .comment-details .comment-meta .comment-left-meta .comment-date {
        color: #00ba74;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 0;
        font-weight: 500;
        margin: 7px 0 0;
    }

    .author-review article .comment-details .comment-text {
        margin: 18px 0 0;
    }

    .author-review article .comment-details .comment-text p {
        margin: 0;
    }

    .author-review article .comment-details .comment-text {
        margin: 19px 0 0;
    }

    .reviews-checked {
        text-align: center;
        display: table;
        margin: 0 auto;
        font-size: 14px;
        font-weight: 600;
    }

    .nearby-wrap {
        margin-bottom: 2rem;
    }

    .nearby-wrap:last-child {
        margin-bottom: 0rem;
    }

    .neary_section_list {
        width: 100%;
        position: relative;
        display: block;
    }

    .neary_section {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        border-bottom: 1px solid #e8eaf1;
        padding: 10px 0;
    }

    .neary_section:last-child {
        border-bottom: none;
    }

    .neary_section_first {
        flex: 1;
    }

    .neary_section_first .nearby_place_title {
        font-size: 14px;
        margin: 0;
        color: #172e6f;
    }

    .neary_section_last {
        display: flex;
        align-items: center;
    }

    .nearby_place_rate {
        padding: 5px 5px;
        height: auto;
        line-height: 25px;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: #ffffff;
        border-radius: 4px;
        margin-right: 5px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .nearby_place_rate i {
        font-size: 8px;
        margin-right: 4px;
        position: relative;
    }

    .sides_list_property {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 1rem 1rem 0.8rem;
        border: 1px solid #e7eaec;
        border-radius: 0.4rem;
        background: #ffffff;
        margin-bottom: 15px;
    }

    .sides_list_property_thumb {
        width: 125px;
        height: 75px;
        border-radius: 4px;
        overflow: hidden;
    }

    .sides_list_property_thumb img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .sides_list_property_detail {
        padding-left: 0.7rem;
        width: 100%;
    }

    .sides_list_property_detail h4 {
        font-size: 16px;
        line-height: 1;
        margin: 0px 0 2px;
    }

    .sides_list_property_detail span {
        font-size: 13px;
    }

    .sides_list_property_detail span i {
        margin-right: 4px;
    }

    .lists_property_price {
        display: flex;
        align-items: center;
    }

    .lists_property_price .lists_property_types {
        flex: 1;
    }

    .lists_property_price {
        display: flex;
        align-items: center;
        padding: 8px 0;
    }

    .property_types_vlix {
        display: inline-block;
        padding: 4px 15px;
        color: #f95d02;
        background: rgba(249, 93, 2, 0.1);
        border-radius: 50px;
        font-size: 13px;
    }

    .property_types_vlix.sale {
        color: #03a98a;
        background: rgba(3, 169, 138, 0.1);
    }

    .property_types_vlix.buy {
        color: #a871e4;
        background: rgba(168, 113, 228, 0.1);
    }

    .like_share_wrap {
        background-color: #fff;
        color: #707070;
        border-radius: 4px;
        padding: 20px;
        border: 1px solid #e6eaf3;
        transition: 0.25s;
        margin-bottom: 20px;
    }

    ul.like_share_list {
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        width: 100%;
    }

    ul.like_share_list li {
        flex: 0 0 50%;
        padding: 0 5px;
        list-style: none;
        width: 50%;
    }

    ul.like_share_list li a {
        width: 100%;
        color: #03a98a !important;
        background: rgba(3, 169, 138, 0.1);
        border: 1px solid #03a98a;
        border-radius: 0.4rem;
        font-weight: 600;
        font-size: 14px;
    }

    ul.like_share_list li:last-child a {
        background: rgba(249, 93, 2, 0.1);
        color: #f95d02 !important;
        border-color: #f95d02;
    }

    ul.like_share_list li a i {
        margin-right: 7px;
    }

    .property_block_wrap {
        display: block;
        width: 100%;
        background: #ffffff;
        padding: 0;
        border-radius: 4px;
        margin-bottom: 30px;
        border: 1px solid #e6eaf3;
    }

    .property_block_wrap.style-2 {
        border-radius: 6px;
        border: none;
    }

    .property_block_wrap.style-2 {
        border-radius: 6px;
        border: none;
    }

    .property_block_wrap.style-2 .block-body {
        padding: 0rem 1.5rem 1rem;
    }

    .property_block_wrap.style-2 .property_block_wrap_header h4 {
        margin: 0;
        font-weight: 700;
        font-size: 16px;
        font-family: 'Muli', sans-serif;
        color: #140c40;
    }

    .property_block_wrap.style-2 .property_block_wrap_header h4:after {
        font-family: "Font Awesome 5 Free";
        content: "\f106";
        position: relative;
        float: right;
        margin-right: 0px;
        transition: 0.2s ease-out;
        background: #f5f7fb;
        width: 26px;
        height: 26px;
        font-weight: 600;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .property_block_wrap.style-2 .property_block_wrap_header .collapsed h4:after {
        transform: rotate(180deg);
    }

    .property_block_wrap.style-2 .property_block_wrap_header h4:before {
        display: none;
    }

    .property_block_wrap.style-2 .property_block_wrap_header {
        padding: 1rem 1.5rem;
        border: none;
    }

    ul.deatil_features {
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    ul.deatil_features li {
        width: 33.333333%;
        flex: 0 0 33.333333%;
        display: inline-block;
        font-size: 13px;
        color: #546cb1;
        margin-bottom: 1.2rem;
        line-height: 1.5;
    }

    ul.deatil_features li strong {
        color: #08184b;
        display: inline-block;
        font-size: 14px;
        margin-right: 10px;
    }

    .nearby-wrap {
        margin-bottom: 2rem;
    }

    .nearby-wrap:last-child {
        margin-bottom: 0rem;
    }

    .neary_section_list {
        width: 100%;
        position: relative;
        display: block;
    }

    .neary_section {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        padding: 6px 0;
    }

    .neary_section:last-child {
        border-bottom: none;
    }

    .neary_section_first {
        flex: 1;
    }

    .neary_section_first .nearby_place_title {
        font-size: 14px;
        margin: 0;
        color: #140c40;
        font-family: 'Muli', sans-serif;
    }

    .neary_section_last {
        display: flex;
        align-items: center;
    }

    .neary_section_first .nearby_place_title>small {
        margin-left: 10px;
    }

    .neary_section_last i {
        font-size: 10px;
        color: #ced1e4;
    }

    .neary_section_last i.filled {
        color: #FF9800;
    }

    .reviews-count {
        margin-left: 5px;
    }

    .nearby_header {
        display: flex;
        width: 100%;
        align-items: center;
        position: relative;
        margin-bottom: 1rem;
    }

    .nearby_header_first {
        flex: 1;
    }

    .nearby_header_first h5 {
        margin: 0;
        font-size: 16px;
    }

    .nearby_header_last .nearby_powerd {
        display: flex;
        align-items: center;
    }

    .nearby_header_last .nearby_powerd img {
        max-width: 50px;
        margin-left: 10px;
    }

    .list-fx-features {
        margin-top: 20px;
        justify-content: end;
    }

    .listing-card-info-icon {
        width: auto;
        flex: inherit;
        display: inline-flex;
        margin-right: 1.2rem;
        align-items: center;
    }

    .listing-card-info-icon:last-child {
        margin: 0;
    }

    .prt-price-fix {
        line-height: 1.4;
        color: #89c736;
    }

    .prt-price-fix sub {
        font-size: 15px;
        font-weight: 400;
        color: #929fc5;
    }

    .featured_slick_gallery {
        position: relative;
    }

    .btn-view-pic {
        position: absolute;
        bottom: 30px;
        right: 50px;
        background: #ffffff;
        padding: 15px 26px;
        border-radius: 5px;
        font-weight: 600;
        color: #08184b;
    }

    .property_video {
        position: relative;
    }

    .property_video .thumb {
        overflow: hidden;
        border-radius: 6px;
    }

    .bb-video-box {
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .bb-video-box-inner {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .bb-video-box-innerup {
        width: 65px;
        height: 65px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        display: flex;
        font-size: 25px;
    }

    .bb-video-box-innerup a {
        line-height: 0;
    }

    ul.list-gallery-inline {
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    ul.list-gallery-inline li {
        width: 33.333333%;
        flex: 0 0 33.33333%;
        padding: 5px;
    }

    ul.list-gallery-inline li a {
        display: block;
        height: 100%;
        width: 100%;
        border-radius: 4px;
        overflow: hidden;
    }

    .property_video {
        position: relative;
        z-index: 2;
    }

    .rating-overview {
        display: flex;
        margin: 35px 0 25px;
        background: #fff;
        padding: 30px;
        padding-right: 20px;
        border-radius: 8px;
    }

    .rating-overview-box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        border: #ffdead;
        width: 135px;
        margin-right: 20px;
        text-align: center;
        border-radius: 0;
        border-right: 1px solid #e8e8e8;
        padding-right: 27px;
    }

    .rating-overview-box-total {
        font-size: 58px;
        font-weight: 700;
        line-height: 1em;
        display: block;
        color: #2a2f3a;
    }

    .rating-overview-box-percent {
        font-size: 15px;
        margin-bottom: 0;
        display: block;
    }

    .rating-overview-box .star-rating {
        font-size: 16px;
        margin: 0;
        display: block;
        letter-spacing: -.5px;
    }

    .rating-bars {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        flex-basis: 100%;
        margin: 0;
        padding: 0;
        margin-top: 0;
        align-items: center;
    }

    .rating-bars-item {
        margin: 10px 15px;
        width: calc(50% - 30px);
        justify-content: flex-end;
        align-items: flex-start;
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 1366px) {
        .rating-bars-item {
            width: calc(50% - 30px);
        }
    }

    .rating-bars-name {
        font-weight: 600;
        color: #4c4f5a;
        display: block;
        font-size: 14px;
        line-height: 22px;
    }

    .rating-bars-inner {
        display: flex;
        width: 100%;
    }

    .rating-bars-rating {
        display: inline-block;
        vertical-align: baseline;
        background: #f4f5f7;
        width: 100%;
        height: 6px;
        margin-right: 10px;
        border-radius: 3px;
        overflow: hidden;
        background-color: #f4f5f7;
        align-self: center;
    }

    .rating-bars-rating-inner {
        height: 6px;
        display: block;
        background-color: #f4f5f7;
        position: relative;
        width: 0;
        transition: width .5s;
    }

    .rating-bars-rating.high .rating-bars-rating-inner {
        background-color: #00ba74;
    }

    .rating-bars-rating.good .rating-bars-rating-inner {
        background-color: #83ce36;
    }

    .rating-bars-rating.mid .rating-bars-rating-inner {
        background-color: #fbb851;
    }

    .rating-bars-rating.poor .rating-bars-rating-inner {
        background-color: #e6453c;
    }

    .rating-bars-item strong {
        color: #4c4f5a;
        font-size: 12px;
        font-weight: 600;
        align-self: center;
        background: #f4f5f7;
        border-radius: 50px;
        width: 46px;
        height: 22px;
        text-align: center;
        line-height: 21px;
    }

    .rating-overview-box .star-rating i {
        color: #ff9500;
    }

    .modal {
        z-index: 99999;
    }

    .modal-body {
        padding: 2.5em 3em;
    }

    h4.modal-header-title {
        font-size: 4em;
        text-align: center;
        margin: 1rem 0 1em 0;
        font-weight: 800;
    }

    .modal-divider {
        position: relative;
        margin: 20px 0;
        text-align: center;
    }

    .modal-divider:before {
        content: ' ';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        border-bottom: 1px solid #E1E5F2;
    }

    .modal-divider span {
        position: relative;
        background: #fff;
        padding: 0 20px;
    }

    .social-login ul {
        margin: 0;
        width: 100%;
        padding: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .social-login ul li {
        display: inline-block;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 50%;
        width: 50%;
        list-style: none;
        padding: 0 10px;
    }

    .social-login ul li a.btn {
        width: 100%;
        border-radius: 5px;
        padding: 20px 0;
        color: #ffffff;
        background: #f4f5f7;
    }

    .social-login ul li a.btn i {
        margin-right: 7px;
    }

    .social-login ul li a.btn.connect-fb {
        background: #3b5998;
    }

    .social-login ul li a.btn.connect-google {
        background: #ec4514;
    }

    .signup .modal-dialog {
        max-width: 880px;
        z-index: +999999;
    }

    .signup .form-group {
        margin-bottom: 1.5rem;
    }

    .modal-dialog-centered .btn {
        font-weight: 600;
    }

    span.mod-close {
        width: 35px;
        height: 35px;
        position: absolute;
        top: 15px;
        right: 15px;
        background: white;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 13px;
        color: #fd5332;
        cursor: pointer;
        z-index: 1;
        box-shadow: 0 5px 24px rgba(31, 37, 59, 0.15);
        -webkit-box-shadow: 0 5px 24px rgba(31, 37, 59, 0.15);
    }

    .sides-widget {
        background-color: #fff;
        color: #707070;
        border-radius: 8px;
        border: 1px solid #ebeef5;
        overflow: hidden;
        transition: 0.50s;
        margin-bottom: 30px;
    }

    .sides-widget {
        margin-bottom: 30px;
    }

    .sides-widget-header {
        position: relative;
        display: flex;
        background: #89c736;
        padding: 1.5rem 1.4rem;
        color: #ffffff;
        align-items: center;
    }

    .sides-widget-details {
        padding-left: 20px;
        display: block;
        position: relative;
    }

    .sides-widget-body {
        padding: 1.5rem 1.4rem;
    }

    .sides-widget-details h4 {
        margin-bottom: 2px;
        color: #ffffff !important;
    }

    .sides-widget-details h4>a {
        color: #ffffff !important;
    }

    .sides-widget-header .agent-photo {
        float: left;
        display: block;
    }

    .sides-widget-header .agent-photo img {
        border-radius: 50%;
        max-width: 60px;
    }

    .sides-widget-details span {
        color: #233b67;
    }

    .sides-widget-details span i {
        font-size: 18px;
        position: relative;
        top: 3px;
        color: #ffeb3b;
        margin-right: 10px;
    }

    .simple-form .form-control,
    .modal-dialog-centered .form-control {
        background: #f6f8fd;
        box-shadow: none;
        border: 1px solid #edf0f9;
    }

    .prt-types {
        font-size: 12px;
        font-weight: 600;
        padding: 4px 12px;
        margin-top: 5px;
        border-radius: 50px;
        background: #efefef;
        display: inline-block;
    }

    .prt-types.sale {
        background: rgba(247, 68, 0, 0.1);
        color: #f74400;
    }

    .slick-next {
        right: 25px;
    }

    .slick-prev {
        left: 25px;
        z-index: 1;
    }

    .slick-arrow:before {
        top: 0;
        width: 40px;
        height: 40px;
        display: inline-block;
        line-height: 40px;
        background: rgba(255, 255, 255, 0.4);
        font-size: 12px;
        color: #ffffff;
        cursor: pointer;
        border-radius: 4px;
        box-shadow: 0 5px 24px rgba(31, 37, 59, 0.15);
        transition: 0.2s;
    }

    .call-to-act-wrap {
        padding: 50px 0;
    }

    .call-to-act {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        color: #ffffff;
        align-items: center;
    }

    .call-to-act-head {
        flex: 1;
    }

    .call-to-act h3 {
        color: #ffffff;
        margin-bottom: 5px;
    }

    .btn.btn-call-to-act {
        background: #ffffff;
        padding: 18px 40px;
        border-radius: 50px;
        color: #333640;
        font-weight: 600;
        box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.2);
        -webkit-box-shadow: 0px 0px 0px 5px rgba(255, 255, 255, 0.2);
    }

    footer {
        z-index: 99;
        position: relative;
    }

    footer.dark-footer {
        background: #252c41;
    }

    img.img-footer {
        max-width: 180px;
        margin-bottom: 2rem;
    }

    .footer-add {
        color: #858b9f;
        font-size: 13px;
    }

    .footer-widget {
        padding: 70px 0;
    }

    h4.widget-title {
        margin-bottom: 20px;
        font-weight: 500;
        font-size: 17px;
    }

    .footer-widget ul {
        padding: 0;
        margin: 0;
    }

    .footer-widget ul li {
        list-style: none;
        margin-top: 15px;
        display: block;
    }

    .footer-widget ul li a {
        color: #626a70;
    }

    footer.skin-dark-footer h4 {
        color: #ffffff;
    }

    footer.skin-dark-footer .footer-widget ul li a,
    footer.skin-dark-footer,
    footer.skin-dark-footer a {
        color: #858b9f;
        transition: all ease 0.4s;
        font-size: 14px;
    }

    footer.skin-dark-footer .footer-widget ul li a:hover,
    footer.skin-dark-footer .footer-widget ul li a:focus {
        color: #ffffff;
    }

    .footer-bottom {
        padding: 20px 0;
        border-top: 1px solid #e9edf3;
    }

    .skin-dark-footer .footer-bottom {
        background: #1b2132;
        border-top: none;
    }

    ul.footer-bottom-social {
        margin: 0;
        padding: 0;
    }

    ul.footer-bottom-social li {
        display: inline-block;
        list-style: none;
        margin-right: 17px;
        margin-top: 0;
    }

    ul.footer-bottom-social li a {
        color: #546e7a;
    }

    ul.footer-bottom-social li a:hover,
    ul.footer-bottom-social li a:focus {
        color: #007bff;
    }

    ul.footer-bottom-social li i {
        margin-right: 5px;
    }

    footer.skin-dark-footer ul.footer-bottom-social li a {
        color: #858b9f;
        font-size: 14px;
    }

    footer.skin-dark-footer ul.footer-bottom-social li a:hover,
    footer.skin-dark-footer ul.footer-bottom-social li a:focus {
        color: #ffffff;
        opacity: 1;
    }

    .other-store-link {
        width: auto;
        margin-bottom: 20px;
        display: inline-block;
    }

    .other-store-link:last-child {
        margin-bottom: 0;
    }

    .other-store-app {
        width: 250px;
        height: 70px;
        border: 1px solid #353d56;
        border-radius: 4px;
        padding: 0 14px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        color: #ffffff;
    }

    .os-app-caps span {
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: #858b9f;
    }

    .os-app-icon {
        margin-right: 13px;
    }

    .os-app-icon i {
        font-size: 32px;
    }

    .os-app-caps {
        font-size: 18px;
        font-weight: 600;
    }

    .card-header {
        background: #ffffff;
        border: none;
        border-top: 1px solid #e9edf3;
        border-radius: 0;
    }

    .accordion .btn-link {
        padding: 3px 0;
        font-size: 13px;
        color: #333c56;
        font-size: 15px;
        font-weight: 600;
    }

    .btn.btn-link.collapsed,
    .btn.btn-link:focus {
        text-decoration: none !important;
    }

    .listing-card-info-icon {
        align-items: center;
        display: flex;
    }

    .listing-card-info-icon {
        display: flex;
    }

    @media (min-width: 992px) {
        .modal-dialog {
            max-width: 600px;
            margin: 30px auto;
        }
    }

    @media (max-width: 1199px) {
        .listing-card-info-icon {
            margin-right: 0.7rem;
            font-size: 12px;
        }
    }

    @media (max-width: 991px) {
        .avl-features li {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 767px) {
        .call-to-act {
            display: block;
            text-align: center;
        }

        .call-to-act-head {
            margin-bottom: 1rem;
        }

        .footer-widget {
            padding-bottom: 0;
        }

        .footer-bottom {
            margin-top: 70px;
        }

        ul.deatil_features li {
            width: 50%;
            flex: 0 0 50%;
        }

        .rating-overview {
            display: block;
        }

        .rating-overview-box {
            width: 100%;
            border-right: none;
            margin-bottom: 1rem;
        }

        .rating-bars-item {
            width: calc(100% - 30px);
        }
    }

    @media (max-width: 600px) {
        .avl-features li {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 500px) {
        .prt-detail-title-desc h3 {
            font-size: 18px;
            line-height: 1.4;
        }

        ul.deatil_features li {
            width: 100%;
            flex: 0 0 100%;
        }

        .author-review article .article_comments_thumb {
            float: left;
            width: 60px;
        }

        .author-review article .article_comments_thumb img {
            max-width: 60px;
            border-radius: 50%;
        }

        .author-review article .comment-details {
            overflow: hidden;
            padding-left: 20px;
        }

        .author-review article .comment-details .comment-text p {
            font-size: 13px;
        }

        .nearby_header_first h5 {
            margin: 0;
            font-size: 13px;
        }
    }

    #back2Top {
        width: 40px;
        line-height: 40px;
        overflow: hidden;
        z-index: 999;
        display: none;
        cursor: pointer;
        position: fixed;
        bottom: 10px;
        right: 20px;
        text-align: center;
        font-size: 15px;
        border-radius: 4px;
        text-decoration: none;
        background: #333c56;
        color: #ffffff;
    }

    #back2Top:hover {
        background-color: #ffffff;
        color: #333c56;
    }

    /*! CSS Used from: https://themezhub.net/resido-demo/resido/assets/css/colors.css */
    a:focus {
        color: #f02c2d;
    }

    a:focus {
        color: #89c736;
    }

    .blue-skin .theme-bg {
        background-color: #1266e3;
        background: #1266e3;
    }

    .blue-skin a.link:hover,
    .blue-skin a.link:focus,
    .blue-skin a:hover,
    a:focus,
    .blue-skin .theme-cl,
    .blue-skin span.mod-close {
        color: #1266e3;
    }

    a:focus {
        color: #ffa50d;
    }

    a:focus {
        color: #0F52BA;
    }

    a:focus {
        color: #00A877;
    }

    a:focus {
        color: #7065ef;
    }

    a:focus {
        color: #f40c43;
    }

    a:focus {
        color: #19b521;
    }

    a:focus {
        color: #0176ff;
    }

    .slick-slide {
        max-height: 501px;
    }

    .featured_slick_padd .mfp-gallery .img-fluid {
        width: 100%;
    }

    .featured_slick_padd .mfp-gallery .img-fluid {
        width: 100%;
        object-fit: cover;
        max-height: 100%;
    }

    .listing-card-info-icon {
        margin-bottom: 0 !important;
        max-width: max-content !important;
    }

    .list-fx-features {
        justify-content: flex-end !important;
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: slick;
        font-weight: 400;
        font-style: normal;
        src: url(https://themezhub.net/resido-demo/resido/assets/css/plugins/fonts/slick.eot);
        src: url(https://themezhub.net/resido-demo/resido/assets/css/plugins/fonts/slick.eot#iefix) format('embedded-opentype'), url(https://themezhub.net/resido-demo/resido/assets/css/plugins/fonts/slick.woff) format('woff'), url(https://themezhub.net/resido-demo/resido/assets/css/plugins/fonts/slick.ttf) format('truetype'), url(https://themezhub.net/resido-demo/resido/assets/css/plugins/fonts/slick.svg#slick) format('svg');
    }

    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 400;
        font-display: auto;
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.eot);
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.eot#iefix) format("embedded-opentype"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.woff2) format("woff2"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.woff) format("woff"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.ttf) format("truetype"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-regular-400.svg#fontawesome) format("svg");
    }

    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        font-display: auto;
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.eot);
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.eot#iefix) format("embedded-opentype"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.woff2) format("woff2"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.woff) format("woff"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.ttf) format("truetype"), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/fa-solid-900.svg#fontawesome) format("svg");
    }

    @font-face {
        font-family: LineIcons;
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/LineIcons.eot?y2l643);
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/LineIcons.eot?y2l643#iefix) format('embedded-opentype'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/LineIcons.ttf?y2l643) format('truetype'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/LineIcons.woff?y2l643) format('woff'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/LineIcons.svg?y2l643#LineIcons) format('svg');
        font-weight: 400;
        font-style: normal;
    }

    @font-face {
        font-family: themify;
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/themify.eot?-fvbane);
        src: url(https://themezhub.net/resido-demo/resido/assets/css/fonts/themify.eot#iefix-fvbane) format('embedded-opentype'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/themify.woff?-fvbane) format('woff'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/themify.ttf?-fvbane) format('truetype'), url(https://themezhub.net/resido-demo/resido/assets/css/fonts/themify.svg?-fvbane#themify) format('svg');
        font-weight: 400;
        font-style: normal;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oDd4iYl.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73ord4iYl.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/jost/v4/92zatBhPNqw73oTd4g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afT3GLRrX.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTzGLRrX.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Muli';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/muli/v22/7Auwp_0qiz-afTLGLQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    li {
        list-style-type: none !important;
    }

    ul.like_share_list li {
        flex: 0 0 100%;
        padding: 0 5px;
        list-style: none;
        list-style-type: none;
        width: 100%;
    }
</style>

<div class="featured_slick_gallery gray">
    <div class="featured_slick_padd " data-slide-number="1">
        <a href="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="mfp-gallery">
            <img src="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="img-fluid mx-auto" alt="">
        </a>
    </div>
    <div class="featured_slick_padd " data-slide-number="2">
        <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery">
            <img src="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="img-fluid mx-auto" alt="">
        </a>
    </div>
    <div class="featured_slick_padd " data-slide-number="3">
        <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery">
            <img src="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="img-fluid mx-auto" alt=""></a>
    </div>
    <div class="featured_slick_padd" data-slide-number="4">
        <a href="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="mfp-gallery">
            <img src="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="img-fluid mx-auto" alt="">
        </a>
    </div>
    <div class="featured_slick_padd" data-slide-number="5">
        <a href="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="mfp-gallery">
            <img src="https://knowpathology.com.au/app/uploads/2018/07/Happy-Test-Screen-01-825x510.png" class="img-fluid mx-auto" alt=""></a>
    </div>
</div>


<section class="gray-simple">
    <div class="container">
        <div class="row">

            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="property_block_wrap style-2 p-4">
                    <div class="prt-detail-title-desc">
                        <span class="prt-types sale">De vanzare</span>
                        <h3>{{$property->title}}</h3>
                        <span><i class="lni-map-marker"></i> {{$property->address}} </span>
                        <h3 class="prt-price-fix">{{$property->pret}}€</h3>
                        <div class="list-fx-features">
                            <!-- <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bed.svg" alt="" width="13"></div>4 Camere
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" alt="" width="13"></div>1 Baie
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="assets/img/move.svg" alt="" width="13"></div>200 m2
                            </div> -->

                            {!!get_atribute($property->id,$property->type)!!}
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" aria-expanded="false">
                            <h4 class="property_block_title">Detalii &amp; Beneficii</h4>
                        </a>
                    </div>
                    <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                        <div class="block-body">
                            <ul class="deatil_features">
                                <li><strong>Dormitoare:</strong>3</li>
                                <li><strong>Bai:</strong>2 </li>
                                <li><strong>Suprafata utila:</strong>200m2</li>
                                <li><strong>Garage</strong>1</li>
                                <li><strong>Property Type:</strong>Apartment</li>
                                <li><strong>An:</strong>2020</li>
                                <li><strong>Localitate:</strong>Bucuresti</li>
                                <li><strong> Judet:</strong>Ilfov</li>
                                <li><strong>Disponibilitate:</strong>Imediat</li>
                                <li><strong>Numar etaje:</strong>1</li>
                                <li><strong>Suprafata teren:</strong>400m2</li>

                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" aria-expanded="true">
                            <h4 class="property_block_title">Descriere</h4>
                        </a>
                    </div>
                    <div id="clTwo" class="panel-collapse collapse show">
                        <div class="block-body">
                                <p>{{$property->description}}
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#amen" data-bs-target="#clThree" aria-controls="clThree" aria-expanded="true">
                            <h4 class="property_block_title">Dotari</h4>
                        </a>
                    </div>

                    <div id="clThree" class="panel-collapse collapse show">
                        <div class="block-body">
                            <ul class="avl-features third color">
                                @if($property->dotari!=null)
                                @php $array=json_decode($property->dotari) @endphp
                                @foreach($array as $elem)
                                <li>{{$elem}}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-parent="#vid" data-bs-target="#clFour" aria-controls="clFour">
                            <h4 class="property_block_title">Videoclip proprietate</h4>
                        </a>
                    </div>

                    <div id="clFour" class="panel-collapse">
                        <div class="block-body">
                            <div class="property_video">
                                <div class="thumb">
                                    <div class="pro_img img-fluid w100" src="assets/img/pl-6.jpg" alt="7.jpg">
                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/cNpOqG_DsvM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#floor" data-bs-target="#clFive" aria-controls="clFive" aria-expanded="true" class="collapsed">
                            <h4 class="property_block_title">Plan etaje</h4>
                        </a>
                    </div>

                    <div id="clFive" class="panel-collapse collapse show">
                        <div class="block-body">
                            <div class="accordion" id="floor-option">
                                <div class="card">
                                    <div class="card-header" id="firstFloor">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#firstfloor" aria-controls="firstfloor">Parter<span>102 m2</span></button>
                                        </h2>
                                    </div>
                                    <div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
                                        <div class="card-body">
                                            <img src="assets/img/floor.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="seconfFloor">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#secondfloor" aria-controls="secondfloor">Etaj 1<span>110 m2</span></button>
                                        </h2>
                                    </div>
                                    <div id="secondfloor" class="collapse" aria-labelledby="seconfFloor" data-parent="#floor-option">
                                        <div class="card-body">
                                            <img src="assets/img/floor.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="third-garage">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#garages" aria-controls="garages">Terasa<span>50 m2</span></button>
                                        </h2>
                                    </div>
                                    <div id="garages" class="collapse" aria-labelledby="third-garage" data-parent="#floor-option">
                                        <div class="card-body">
                                            <img src="assets/img/floor.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#loca" data-bs-target="#clSix" aria-controls="clSix" aria-expanded="true" class="collapsed">
                            <h4 class="property_block_title">Localizare</h4>
                        </a>
                    </div>

                    <div id="clSix" class="panel-collapse collapse show">
                        <div class="block-body">
                            
                            <div class="section-location mb-60">

                                <h3 class="heading-3">Localizare proprietate</h3>

                                <div class="map">

                                    <div id="map" class="listing" style="max-height:400px"></div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#clSev" data-bs-target="#clSev" aria-controls="clOne" aria-expanded="true" class="collapsed">
                            <h4 class="property_block_title">Galerie imobil</h4>
                        </a>
                    </div>

                    <div id="clSev" class="panel-collapse collapse show">
                        <div class="block-body">
                            <ul class="list-gallery-inline">
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/img/p-5.jpg" class="mfp-gallery"><img src="assets/img/p-5.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/img/p-6.jpg" class="mfp-gallery"><img src="assets/img/p-6.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#clSev" data-bs-target="#clSev" aria-controls="clOne" aria-expanded="true" class="collapsed">
                            <h4 class="property_block_title">Vizualizeaza in 360 grade</h4>
                        </a>
                    </div>

                    <div id="clSev" class="panel-collapse collapse show">
                        <div class="block-body">
                            <ul class="list-gallery-inline">
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="mfp-gallery"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/img/p-5.jpg" class="mfp-gallery"><img src="assets/img/p-5.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                                <li>
                                    <a href="assets/img/p-6.jpg" class="mfp-gallery"><img src="assets/img/p-6.jpg" class="img-fluid mx-auto" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">

                <!-- Like And Share -->
                <div class="like_share_wrap b-0">
                    <ul class="like_share_list">
                        <li><a class="btn btn-likes" data-toggle="tooltip" data-original-title="Share"><i class="fas fa-share"></i>Distribuie</a></li>
                        <!-- <li><a class="btn btn-likes" data-toggle="tooltip" data-original-title="Save"><i class="fas fa-heart"></i>Save</a></li> -->
                    </ul>
                </div>

                <div class="details-sidebar">

                    <!-- Agent Detail -->
                    <div class="sides-widget">
                        <div class="sides-widget-header">
                            <div class="agent-photo"><img src="assets/img/user-6.jpg" alt=""></div>
                            <div class="sides-widget-details">
                                <h4><a href="#">Nume Post</a></h4>
                                <span><i class="lni-phone-handset"></i>0729-012-444</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- <div class="sides-widget-body simple-form">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <label>Descriere</label>
                                <textarea class="form-control">I'm interested in this property.</textarea>
                            </div>
                            <button class="btn btn-black btn-md rounded full-width">Send Message</button>
                        </div> -->
                    </div>

                    <!-- Mortgage Calculator -->
                    <div class="sides-widget">

                        <div class="sides-widget-header">
                            <div class="sides-widget-details">
                                <h4><a href="#">Nume Post</a></h4>
                                <span>Vezi dobanda ta</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="sides-widget-body simple-form">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Pret imobil">
                                    <i class="ti-money"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Avans">
                                    <i class="ti-money"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Durata Credit">
                                    <i class="ti-calendar"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Dobanda">
                                    <i class="fa fa-percent"></i>
                                </div>
                            </div>

                            <button class="btn btn-black btn-md rounded full-width">Calculeaza</button>

                        </div>
                    </div>

                    <!-- Featured Property -->
                    <div class="sidebar-widgets">

                        <h4>Proprietati recente</h4>

                        <div class="sidebar_featured_property">

                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Imobil 1</a></h4>
                                    <span><i class="ti-location-pin"></i>Cluj</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">Vanzare</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>52.240 €</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/test4.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Imobil 2</a></h4>
                                    <span><i class="ti-location-pin"></i>Pitesti</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix">Inchiriere</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>780 €</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="assets/img/p-5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Imobil 3</a></h4>
                                    <span><i class="ti-location-pin"></i>Iasi</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix">Inchiriere</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>550 €</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<div class="properties-details-page content-area-2">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 slider">

                <!-- Related properties start -->

                <div class="related-properties hedin-mb-30">

                    <h3 class="heading-3">Proprietati similare</h3>

                    <div class="row">

                        @foreach($similar_properties as $similar_property)

                        <div class="col-md-6">

                            <div class="property-box-7">

                                <div class="property-thumbnail">

                                    <a href="{{route('show_one_property', $slug=$similar_property->slug )}}" class="property-img">

                                        @if($similar_property->transaction_type == 1)

                                        <div class="tag-2">Vanzare</div>

                                        @else

                                        <div class="tag-2">Inchiriere</div>

                                        @endif

                                        <div class="price-box"><span>{{$similar_property->pret}}</span> €</div>

                                        <img src="{!!get_first_image($similar_property->images,$similar_property->slug)!!}" alt="property" class="img-fluid">

                                    </a>

                                </div>

                                <div class="detail">

                                    <h1 class="title">

                                        <a href="{{route('show_one_property', $slug=$similar_property->slug )}}">{{$similar_property->title}}</a>

                                    </h1>

                                    <div class="location">

                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$similar_property->judet}}, {{$similar_property->localitate}}

                                    </div>

                                </div>

                                <ul class="facilities-list clearfix">

                                    {!!get_atribute($similar_property->id,$similar_property->type)!!}

                                </ul>

                                <div class="footer clearfix">

                                    <div class="pull-left days">

                                        <p>

                                            <i class="fa fa-user"></i>

                                            {{-- $property->user->name --}}

                                        </p>

                                    </div>

                                    <ul class="pull-right">

                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>

                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>

                                    </ul>

                                </div>

                            </div>



                        </div>

                        @endforeach

                        <div class="col-md-6">

                            <div class="property-box-7">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>













@push('js')

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- <script>

    $(document).ready(function() {



        function initMap() {

            var mylat = "@php echo  $property->lat;@endphp";

            var mylong = "@php echo  $property->long; @endphp";

            var mytitle = "@php echo $property->title; @endphp";

            var map = L.map('map').setView([mylat, mylong], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

                attribution: ''

            }).addTo(map);



            L.marker([mylat, mylong]).addTo(map)

                .bindPopup(mytitle)

                .openPopup();

        }

        initMap();



    });



    $('body').addClass('list-page');

</script> -->

<script>
    var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',

        osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',

        osm = L.tileLayer(osmUrl, {

            maxZoom: 18,

            attribution: osmAttrib

        });



    var map = L.map('map').setView(["{{ $property->lat }}", "{{ $property->long }}"], 12).addLayer(osm);





    var marker = L.marker(

        ["{{ $property->lat }}", "{{ $property->long }}"]

    ).addTo(map);

    marker.bindPopup("<div><a href= '{{route('show_one_property', $slug=$property->slug )}}'><h4>{{ $property->title }}</h4></a><img style='width:20%;heigth:20%;' src='/storage/properties/{{$property->slug}}/{{get_images($property->images)}}' /> <p>{{$property->pret}} Euro</p> </div>");





    $('body').addClass('list-page');
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(".featured_slick_gallery").slick();
    $(".property_block_wrap").click(function() {
        if ($(".property_block_wrap_header a").hasClass("collapsed")) {
            $(".property_block_wrap_header a").removeClass("collapsed");
            $(this).find(".panel-collapse").addClass("show");
        } else {
            console.log($(this));
            $(this).find(".property_block_wrap_header a").addClass("collapsed");
            $(this).find(".panel-collapse").removeClass("show");
        }
    });
</script>
@endpush

@endsection