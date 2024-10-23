@extends("layout")
@section('main')
    İletişim İçeriği
    @if($errors->any())
        Hatalı Veri Girişi
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

    <h4>İletişim Formu</h4>
    <form action=""method="POST">
        @csrf
        İsmniniz:
        <br/><input type ="text" name="isim" value="{{@old("isim")}}"/>
        <br/><br/>
        konu:
        <br/>
        <select name="konu">
            <option {{@old("konu")=="Öğrenci İşleri"?"selected" : ""}}>Öğrenci İşleri</option>
            <option {{@old("konu")=="Sosyal Olanaklar"?"selected" : ""}}>Sosyal Olanaklar</option>
            <option {{@old("konu")=="Diğer"?"selected" : ""}}>Diğer</option>
        </select>
        <br /><br/>
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{@old("mesaj")}}</textarea>
        <br/><br/>
        <input type="submit" value="mesajı Gönder"/>
    </form>
@endsection
