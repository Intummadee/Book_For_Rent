@extends('layouts.layout3')

@section('title', 'Home')


<head>
    <style>
        blockquote {
            display: block;
            background: #fff;
            padding: 15px 20px 15px 45px;
            margin: 0 0 20px;
            position: relative;
            font-family: Georgia, serif;
            font-size: 16px;
            line-height: 1.2;
            color: #666;
            text-align: justify;
            border-left: 15px solid #c76c0c;
        }

        /* padding-left: 1rem;
        padding-right: 1rem; */

        


    </style>
</head>


@section('content')
<div class="container">
    <blockquote>
        Morbi placerat imperdiet risus quis blandit. Ut lobortis elit luctus, feugiat erat vitae, interdum diam. Nam sit
        amet arcu vitae justo lacinia ultricies nec eget tellus. Curabitur id sapien massa. In hac <a
            href="#">habitasse</a> platea dictumst. Integer tristique leo consectetur libero pretium pretium. Nunc sed
        mauris magna. Praesent varius purus id turpis iaculis iaculis. Nulla <em>convallis magna nunc</em>, id rhoncus massa
        ornare in. Donec et feugiat sem, ac rhoncus mauris. Quisque eget tempor massa.
    </blockquote>

</div>


@endsection
