<section id="hero">
</section>
<div class="unimob">
    <a href="https://www.unimob.com.br/" target="_" class="" title="Unimob">
        <img src="{{ asset('images/unimob_.png') }}" class="img-fluid" alt="">
    </a>
</div>

@section('style')
<style>
    .unimob{
        z-index: 999;
        max-width: 100px;
        margin-top: -120px;
        margin-left: 93%;
        display: flex;
        position: relative;
        text-align: right;
    }
    @media (max-width: 768px) {
        .unimob{
            z-index: 999;
            margin-top: -80px;
            margin-left: 85%;
            width: 80px;
            display: flex;
            position: relative;
        }
    }
</style>
@endsection
