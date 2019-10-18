
<div class="container">
    <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
    </div>
</div>


<style>/***
 *  Simple Pure CSS Star Rating Widget Bootstrap 4
 *
 *  www.TheMastercut.co
 *
 ***/

    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    .starrating > input {
        display: none;
    } /* Remove radio buttons */

    .starrating > label:before {
        content: "\f005"; /* Star */
        margin: 2px;
        font-size: 2em !important;
        font-family: FontAwesome;
        display: inline-block;
    }

    .starrating > label {
        color: #808080; /* Start color when not clicked */
    }

    .starrating > input:checked ~ label {
        color: #ffca08;
    } /* Set yellow color when star checked */

    .starrating > input:hover ~ label {
        color: #ffca08;
    } /* Set yellow color when star hover */
</style>


<div class="button-group-pills text-center" data-toggle="buttons">
    <label class="btn btn-default shadow-none" onclick="this.blur();">
        <input type="checkbox"    style="opacity: 0; width: 0px;height: 0px;" name="options" >
        <div style="margin-bottom: 10px;"> Kibar</div>
    </label>
    <label class="btn btn-default shadow-none">
        <input type="checkbox"  style="opacity: 0; width: 0px;height: 0px;" name="options">
        <div style="margin-bottom: 10px;">Dakik</div>
    </label>
    <label class="btn btn-default shadow-none">
        <input type="checkbox"   style="opacity: 0; width: 0px;height: 0px;" name="options">
        <div style="margin-bottom: 10px;">İşe zamanında geldi</div>
    </label>
    <label class="btn btn-default shadow-none">
        <input type="checkbox"   style="opacity: 0; width: 0px;height: 0px;" name="options">
        <div style="margin-bottom: 10px;"> Güvenilir</div>
    </label>
</div>


<style>
    .button-group-pills .btn {
        border-radius: 10px;
        line-height: 1.2;
        margin-bottom: 10px;
        margin-left: 10px;
        border-color: #bbbbbb;
        background-color: #fff;
        color: #14a4be;
        padding-top: 5px;
        padding-bottom: 5px;
        outline: none !important;
        box-shadow: inset 0 -1px 0 #ddd;
    }
    .button-group-pills .btn.active {
        border-color: #14a4be!important;
        background-color: #14a4be!important;
        color: #fff;
        outline: none !important;
        box-shadow: none !important;
    }
    .button-group-pills .btn:hover {
        border-color: #14a4be!important;
        background-color: #14a4be !important;
        color: #fff!important;
        outline: none !important;
        box-shadow: none !important;
    }
    .button-group-pills .btn:focus {
        outline: none !important;
        border: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
    .btn.btn-default:hover:not(:disabled) {
        border-color: #14a4be;
        background-color: white;
        color: #14a4be;
        outline: none !important;
        box-shadow: none !important;
    }

</style>
