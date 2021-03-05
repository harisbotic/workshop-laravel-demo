<!-- Vjezba za pravljenje forme -->
<!--
    forma treba imati sljedece stvari:
        (ime varijable: tip)
        title: text
        body: textarea
        category: select (a.k.a. dropdown)
        tags[]: multiselect (dodati atribut 'multiple')
-->
<!--
    Informacija kad budete googlali: element <form> je vec upisan u vanjskom
    view-u. ne trebate dodavati <form> i </form> u ovom fajlu
 -->

<!-- Ispis errora iz forme. Ne brisati radi lakseg debugiranja ! -->
@if($errors->any())
    {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
@endif

<!-- Stvari ispod su radi lakseg debugiranja. Kad zavrsite s formom, mozete obrisati ovaj ispod dio -->

<!-- isprintati varijablu za kategorije -->
<div>
    {{ print_r($categories) }}
</div>
<!-- isprintati varijablu za tagove -->
<div>
    {{ print_r($tags) }}
</div>
<!-- isprintati svaku kategoriju u odvojenom divu -->
<div class="col-sm-6">
    @foreach ($categories as $category_id => $category_name)
    <div>{{ $category_name }} - {{ $category_id }}</div>
    @endforeach
</div>
<div class="col-sm-6">
    @foreach ($tags as $tag_id => $tag_name)
    <div>{{ $tag_name }} - {{ $tag_id }}</div>
    @endforeach
</div>

<!-- Ovdje ide vas kod -->
