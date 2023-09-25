@extends("layout.start")


@section("css")
        * {
            margin: 0;
            padding: 0;
            font-family: Sans-Serif, Times New Roman, Tahoma, Arial, Courier New;
            
        }
        body {
            background-color: black;
        }
        .dNone{
            display: none;
        }
        .head {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            background-color: #FFF6AF;
        }
        .head h1 {
            font-size: 3em;
        }

        .container {
            width: 75vw;
            height: 75vh;
            padding: 6vh;

        }
        .container .card {
            width: 100%;
            border-radius: 30% 0 30% 0;
            height: 20vh;
            background-color: #FFCBFC;
            overflow: hidden;
            
        }
        .container .card div:nth-child(1) {
            background-color: #BD976F;
            text-align: right;
            padding: 1.5vh;
            font-size: 2em;
        }
        .container .card div:nth-child(2) {
            font-size: 2.4em;
            padding: 8%;
            display: flex;
        }
        .container .card div:nth-child(2) ul {
            overflow-x: scroll;
            flex: 3;
            height: 7vh;
            
            
        }
        .container .card div:nth-child(2) div {
            flex: 2;
            height: 7vh;
            
            
            padding: 0;
            display: flex;
        }
        .line {
            width: 7px;
            height: 20vh;
            background-color: white;
        }
        .add {
            width: 150px;
            height: 150px;
            background-color: #00FFA1;
            margin: 60px;
            border-radius: 50% 50% 50% 0;
            font-size: 2em;
            margin-bottom: -10vh;
        }
        .add:hover{
            box-shadow: 0 0px 10vh #00EFFF;
        }
        .spin{
            animation: spin 1.7s;
            
        }
@keyframes spin {
            100%{
                opacity: 0;
                transform: rotate(360deg);
            }
        }

        .form {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(255,255,255,0.2);
            top: 0.1px;
            left: 0.1px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .form form{
            width: 70%;
            height: 70%;
            background-color: #EDFFDA;
            border-radius: 10%;
        }
        .form form div:nth-child(1){
            margin-top: 20%;
        }
        .form form div{
            margin: 5% 10% 0 10%;
            background-color: #FFD88E;
            
        }
        .form form div label{
            letter-spacing: 7px;
            font-size: 2.4em;
            opacity: 0.7;
            margin: 10px;
        }
         #warna{
            width: 30%;
        }
        .form form div input{
            width: 90%;
            padding: 10px;
            height: 3vh;
            border: 0;
            font-size: 2em;
            border-radius: 0 30% 0 30%;
            margin: 10px;
        }
        .top{
            margin-bottom: 5vh;
        }
        
        .form form button{
            width: 40%;
            height: 30%;
            
            margin: 20px;
            background-color: #5AD67A;
            padding: 2vh;
            font-size: 2em;
            border-radius: 20% 50% 20% 50%;
        }
        .form form h1{
            font-size: 7em;
            padding: 0;
        }
        .opsi button{
            
            width: 50%;
            height: 100%;
            margin: 0;
            border-radius: 100%;
            background-color: rgba(0,0,0,0);
            
            border: 0.3vh solid black;
            box-shadow: 0 0 20px black;
        }
        .opsi button a{
            text-decoration: none;
            color: black;
            font-size: 2em;
        }
        .save{
            display: flex;
        }
        #close{
            width: 100%;
            margin: 20px;
            border: 1px solid black;
            font-size: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20% 50% 20% 50%;
            background-color: #FF784C;
            
        }
@endsection
@section("body")
<div class="head">
  <h1>Jual Beli Kendaraan</h1>
  <img src="kda.jpg" alt="">
</div>
<button class="add">Tambah</button>
<div class="container">
  @foreach($datas as $data)
  <div class="card">
    <div align="right">
      <h2>{{ $data->namaMotor }}</h2>
    </div>
    <div>
      <ul type="circle">
        <li>Merk : {{ $data->merkMotor }}</li>
        <li>Warna : <input type="color" value="{{ $data->warna }}" disabled="disabled" /></li>
      <li>Harga : Rp. {{ $data->harga }}</li>
    </ul>

    <div class="opsi">
      <button><a href="/home/edit/{{ $data->kdMotor }}">Edit</a></button>
      <button><a href="/home/delete/{{ $data->kdMotor }}">Delete</a></button>
    </div>
  </div>
</div>
@endforeach
</div>

<div id="form" class="dNone" >
    <div class="form">

        <form action="/home/tambah">
            <h3 align="center"><font size="800">Simpan Data</font></h3>
            <div>
                <label for="merk">Merk Motor</label>
                <br>
                <input type="text" name="merk" id="merk" />
            </div>

            <div>
                <label for="nama">Nama Motor</label>
                <br>
                <input type="text/submit/hidden/button" name="nama" id="nama" />
            </div>

            <div>
                <label for="warna">Warna Motor</label>
                <br>
                <input type="color" name="warna" id="warna" value="" />
            </div>
            <div class="top">
                <label for="harga">Harga Motor</label>
                <br>
                <input type="number" name="harga" id="harga" value="" />
            </div>
            <div class="save" id="save">
                <button type="submit" id="save">Simpan</button>
                <div disabled="" id="close">Tutup</div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    const btn1 = document.querySelector(".add")
    const form = document.querySelector("#form")
    const close = document.querySelector("#close")
    
    btn1.addEventListener("click", function(){
        btn1.classList.add('spin')
        form.classList.remove("dNone")
        
    })
    close.addEventListener("click", function(){
        form.classList.add("dNone")
    })
</script>
@endsection