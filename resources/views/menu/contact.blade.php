@extends('base')

@section('menu.contact')

<div class="section">

<div class="sub_title"><h1>{{ $title }}</h1></div>

<div class="sub_title">
<h2>Feel free to see more at my <a href="www.linkedin.com/pub/callie-briscoe/61/838/4a8">LinkedIn</a>.</h2>
<h2>Or email me at <a href="mailto:calliebriscoe@gmail.com">calliebriscoe@gmail.com</a>.</h2>
</div>

<!--
    <div class="email">
        <div class="sub_title">{{ $title }} {{ $name }}</div>
        <div class="contact_form">
           <form name="contact_form" method="post" action="contact.blade.php">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" />
            </div>
            <div>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" />
            </div>
            <div>
                <label for="msg">Message:</label>
                <textarea id="msg"></textarea>
            </div>
            <div class="button">
                <button type="submit">Send your message</button>
            </div>
          </form>
        </div>
      </div>
       -->

</div>
@stop
