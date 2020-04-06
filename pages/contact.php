<?php
?>

<div class="ContactPage">
    <div class="container">
        <div class="text-center form">
            <form class="ContactForm">
                <div class="form-group">
                    <label class="ContactLabel">{{__('contact.name')}}</label>
                    <input class="ContactInput">
                </div>
                <div class="form-group">
                    <label class="ContactLabel">{{__('contact.email')}} </label>
                    <input class="ContactInput">
                </div>
                <div class="form-group">
                    <label class="ContactLabel">{{__('contact.subject')}} </label>
                    <input class="ContactInput">
                </div>
                <div class="form-group">
                    <textarea class="ContactText" rows="5">

                    </textarea>
                </div>
                <div class="form-group text-right">
                    <input type="submit" value="submit" class="btn ContactBtn">
                </div>
            </form>
        </div>
    </div>
</div>
