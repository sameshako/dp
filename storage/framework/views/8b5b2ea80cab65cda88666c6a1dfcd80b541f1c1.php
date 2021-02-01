
<style>
    #widget_container_curs {
        display: none !important;
    }

    input {
        overflow: visible;
    }

    input,
    select,
    textarea {
        font-family: sans-serif;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
    }

    select {
        text-transform: none;
    }

    [type=submit] {
        -webkit-appearance: button;
    }

    [type=submit]::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }

    textarea {
        overflow: auto;
    }

    [type=checkbox],
    [type=radio] {
        box-sizing: border-box;
        padding: 0;
    }

    /*! CSS Used from: Embedded */
    .form .label,
    .form .checkbox-input+label,
    .form .option-input+label,
    .form .text-input,
    .form .textarea,
    .form .select,
    .customSelect,
    .form .button {
        padding: 0.75em 1em;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        line-height: normal;
        border-radius: 0;
        border: none;
        background: none;
        display: block;
    }

    .form .label {
        font-weight: bold;
        color: white;
        padding-top: 0;
        padding-left: 0;
        letter-spacing: 0.025em;
        font-size: 1.125em;
        line-height: 1.25;
        position: relative;
        z-index: 100;
    }

    .form .required .label:after {
        content: " *";
        color: #2339d6;
        font-weight: normal;
        font-size: 0.75em;
        vertical-align: top;
    }

    .form .checkbox-input+label,
    .form .option-input+label,
    .form .text-input,
    .form .textarea,
    .form .select,
    .customSelect {
        font: inherit;
        line-height: normal;
        width: 100%;
        box-sizing: border-box;
        background: #222222;
        color: white;
        position: relative;
    }

    .form .checkbox-input+label:placeholder,
    .form .option-input+label:placeholder,
    .form .text-input:placeholder,
    .form .textarea:placeholder,
    .form .select:placeholder,
    .customSelect:placeholder {
        color: white;
    }

    .form .checkbox-input,
    .form .option-input {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .form .checkbox-input+label,
    .form .option-input+label {
        display: inline-block;
        width: auto;
        color: #2339d6;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
    }

    .form .checkbox-input:focus+label,
    .form .option-input:focus+label,
    .form .checkbox-input:active+label,
    .form .option-input:active+label {
        color: #2339d6;
    }

    .form .checkbox-input:checked+label,
    .form .option-input:checked+label {
        color: white;
    }

    .form .button {
        font: inherit;
        line-height: normal;
        cursor: pointer;
        background: #2339d6;
        color: white;
        font-weight: bold;
        width: auto;
        margin-left: auto;
        font-weight: bold;
        padding-left: 2em;
        padding-right: 2em;
    }

    .form .button:hover,
    .form .button:focus,
    .form .button:active {
        color: white;
        border-color: white;
    }

    .form .button:active {
        position: relative;
        top: 1px;
        left: 1px;
    }

    .form {
        max-width: 40em;
        margin: 0 auto;
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: end;
        align-items: flex-end;
    }

    .form .field {
        width: 100%;
        margin: 0 0 1.5em 0;
    }

    @media  screen and (min-width: 40em) {
        .form .field.half {
            width: calc(50% - 1px);
        }
    }

    .form .textarea {
        max-width: 100%;
    }

    .form .select {
        text-indent: 0.01px;
        text-overflow: "" !important;
    }

    .form .select::-ms-expand {
        display: none;
    }

    .form .checkboxes,
    .form .options {
        padding: 0;
        margin: 0;
        list-style-type: none;
        overflow: hidden;
    }

    .form .checkbox,
    .form .option {
        float: left;
        margin: 1px;
    }

    .customSelect {
        pointer-events: none;
    }

    .customSelect:after {
        content: "";
        pointer-events: none;
        width: 0.5em;
        height: 0.5em;
        border-style: solid;
        border-color: white;
        border-width: 0 3px 3px 0;
        position: absolute;
        top: 50%;
        margin-top: -0.625em;
        right: 1em;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .magic-focus {
        position: absolute;
        z-index: 0;
        width: 0;
        pointer-events: none;
        background: green;
        -webkit-transition: top 0.2s, left 0.2s, width 0.2s;
        transition: top 0.2s, left 0.2s, width 0.2s;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        will-change: top, left, width;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    body {
        background-color: #111111 !important;
    }

    form .option-input+label.option-label {
        background: #2339d6;
        color: white;
    }

    form.form li.option {
        margin-right: 10px;
    }

    input:focus:required:invalid {
        border: 1px solid #2339d6 !important;
    }

    input:required:valid {
        border: 1px solid #2339d6 !important;
    }
        
    .change-header .main-header {
        top: 40px!important;
    }
</style>
<script type="text/javascript" language="javascript" src="//cdn1.curs-valutar-bnr.ro/custom_widgets/get_widget.php?lw=230&rw=1&font=Trebuchet%20MS&cft=00b0ea&ctt=ffffff&ttb=0&cc=f2f2f2&cfb=ffffff&ct=000000&pd=4&pc=4&aiv=1&val[]=8&val[]=19&val[]=4&val[]=9&mf=14&avc=1&ac=1&aod=0&lang=ro"></script>

<?php $__env->startSection('content'); ?>


<form action="" class="form has-magic-focus" style="margin-top:200px;margin-bottom:200px">
    <p class="field required">
        <label class="label required" for="name">Preţ imobil în Euro</label>
        <input class="text-input pret_imobil" id="name" name="name" required="" type="text" placeholder="Introduceti suma">
    </p>
    <p class="field required half">
        <label class="label required" for="email">Pret imobil in lei</label>
        <input class="text-input valoare" id="email" name="email" required="" type="email">
    </p>

    <div class="field">
        <label class="label">Imobilul va fi cumparat</label>
        <ul class="options">
            <li class="option">
                <input class="option-input" id="option-0" name="option" type="radio" value="0">
                <label class="option-label" for="option-0">Fara credit</label>
            </li>
            <li class="option">
                <input class="option-input" id="option-1" name="option" type="radio" value="1">
                <label class="option-label" for="option-1">Credit ipotecar</label>
            </li>
            <li class="option">
                <input class="option-input" id="option-2" name="option" type="radio" value="2">
                <label class="option-label" for="option-2">Prima casa</label>
            </li>
        </ul>
    </div>
    <p class="field required">
        <label class="label required" for="taxa_vanzarecumparare">Taxe contract vanzare-cumparare</label>
        <input class="text-input taxe_vc" name="taxa_vanzarecumparare" required="" type="text" placeholder="Introduceti suma">
    </p>
    <p class="field required half">
        <label class="label" for="taxa_inta">Taxe intabulare</label>
        <input class="text-input taxe_intabulare" name="taxa_inta" required="" type="text">
    </p>
    <p class="field required half">
        <label class="label" for="taxa_credit">Taxe contract credit</label>
        <input class="text-input taxe_credit" name="taxa_credit" required="" type="text" placeholder="0">
    </p>

    <div class="magic-focus"></div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    var text = $('#widget_container_curs ').text();
    var splittedSource = text.replace(/\s{2,}/g, ' ').split(' ');
    var euro_value = splittedSource[5];
    var pret_imobil_eur = $('.pret_imobil').val() * 1;
    var valoarea_in_lei = pret_imobil_eur * euro_value;

    $("#option-0").click(function() {
        var radioValue = $("#option-0").val();
        if (radioValue == 0) {
            $('.taxe_credit').val($('.pret_imobil').val() * 0 * euro_value);
        }
    });
    $("#option-1").click(function() {
        var radioValue = $("#option-1").val();
        if (radioValue == 1) {
            $('.taxe_credit').val(($('.pret_imobil').val() * 0.002 * euro_value).toFixed(2));
        }
    });
    $("#option-2").click(function() {
        var radioValue = $("#option-2").val();
        if (radioValue == 2) {
            $('.taxe_credit').val($('.pret_imobil').val() * 0 * euro_value);
        }
    });

    $('.pret_imobil').on('input', function() {
        pret_imobil_eur = $('.pret_imobil').val();
        console.log($('.pret_imobil').val());
        var valoarea_in_lei = pret_imobil_eur * euro_value;
        $('.valoare').val(valoarea_in_lei.toFixed(2));

        var valoarea_vc = valoarea_in_lei * 0.02;
        $('.taxe_intabulare').val((valoarea_in_lei * 0.0015).toFixed(2));
        $('.taxe_vc').val(valoarea_vc.toFixed(2));

    });
    var body = document.body;
    body.classList.add("change-header");
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/frontend/curs.blade.php ENDPATH**/ ?>