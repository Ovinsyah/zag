@extends('master.master_main')
@section('content')
<div class="header">
    <div class="ini container">
        <div class="ini align center">
            <div class="title font-40 mb-0">Sahabat ZAG</div>
            <div class="ini bold color-app font-18">
                <a href="http://www.demokrat.or.id">
                    http://www.demokrat.or.id
                </a>    
            </div>
            <div class="caption">PRESTASI,DEDIKASI,LOYALITAS,NASIONALIS DAN RELIGIUS</div>
            <div>
                <button class="button is-primary">
                    DUKUNG SAYA
                </button>
            </div>
        </div>
        <div class="menu-header">
            <div class="ini grids align center mt-3">
                @for($i=0; $i < 3; $i++)
                <div class="grid">
                    <img src="{{asset('img/list.png')}}" alt="" class="icon-menu">
                    <div>List Pendukung</div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="wave">  
        <img src="{{asset('img/wave.png')}}" alt="">
    </div>
</div>
<div id="bio">
    <div class="ini container">
        <div class="bio pt-5 pb-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis harum odio veniam, asperiores quae tempora in quidem quo delectus expedita. At iure sunt vero impedit asperiores sapiente expedita accusantium voluptatibus!
        </div>
    </div>
</div>
<div id="visimisi">
    <div class="ini container">
        <div class="ini grids">
            <div class="grid xlarge of-12 grid medium of-1 column">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique beatae ipsum sint animi porro totam hic enim magnam earum perspiciatis eveniet sunt sequi ea aliquam, architecto, veritatis esse excepturi nobis?
            </div>
        </div>
    </div>
</div>
@endsection