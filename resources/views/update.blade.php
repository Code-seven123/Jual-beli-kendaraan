@extends("layout.start")

@section("css")
    *{
        margin: 0;
        padding: 0;
        font-family: Sans-Serif, Times New Roman, Tahoma, Arial, Courier New;
    }
    body{
        background-color: black;
    }
    .head{
        width: 100%;
        height: 16vh;
        background-color: #CCC8AA;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 7px grey;
        overflow: hidden;
    }
    .head h1{
        letter-spacing: 10px;
        word-spacing: 5px;
        color: #A6FF96;
        -webkit-text-stroke: 4px black;
        text-stroke: 9px black;
        font-size: 7em;
    }
    .head h1:hover{
        animation: spa 3s;
    }
    @keyframes spa {
        from{
            letter-spacing: 20px;
        }
        to{
            letter-spacing: -30px;
        }
    }
    @media screen and (max-width: 720px) {
        .head h1{
            font-size: 6em;
            -webkit-text-stroke: 4px black;
        }
    }
    .container{
        width: 100%;
        height: 84vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: vh;
    }
    .container .form{
        width: 65%;
        height: 65%;
        background-color: #F2EAD3;
        border-radius: 10%;
    }
    .container .form form{
        width: 100%;
        height: 100%;
        padding: 10%;
        text-align: center;
    }
    
    .container .form form label{
        letter-spacing: 3px;
        text-align: left;
        font-size: 3.5em;
        -webkit-text-stroke: 3px black;
        color: white;
        
    }
    .container .form form div{
        width: 70%;
        width: 80%;
        height: 4vh;
        padding-top: 10%;
        text-align: left;
        
    }
    .container .form form input{
        height: 2.5vh;
        width: 70%;
        font-size: 3em;
        padding: 3px;
        border: 4px solid black;
        border-radius: 20% 0 20% 0;
    }
    .container .form form div .color{
        width: 10%;
    }
    button{
        width: 500px;
        height: 100px;
        background-color: #40D01E;
        font-size: 3em;
        border-radius: 0% 50% 50% 0;
        transition: right 6s;
        position: absolute;
        right: 230px;
    }
    form button:hover{
        animation: dor 2s normal;
    }
    @keyframes dor {
        from{
            background-color: red;
            
            opacity: 1;
        }
        to{
            right: 1px;
            opacity: 0;
        }
    }
    
    .container .form form .btn{
        margin-top: 10vh;
    }
    .dNone{
        display: none;
    }
@endsection
@section("body")
    <div class="head">
        <h1>Update Data</h1>
    </div>
    
    <div class="container">
        <div class="form">
            <form action="/home/update" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="kd" value="{{ $data[0]->kdMotor }}">
                <div>
                    <label for="merk">Merk Motor</label>
                    <br>
                    <input type="text" name="merk" id="merk" value="{{ $data[0]->merkMotor }}"/>
                </div>
                
                <div>
                    <label for="nama">Nama Motor</label>
                    <br>
                    <input type="text" name="nama" id="nama" value="{{ $data[0]->namaMotor }}"/>
                </div>
                
                <div>
                    <label for="warna">Warna Motor</label>
                    <br>
                    <input type="color" name="warna" id="warna" value="{{ $data[0]->warna }}" class="color"/>
                </div>
                <div>
                    <label for="harga">Harga Motor</label>
                    <br>
                    <input type="number" name="harga" id="harga" value="{{ $data[0]->harga }}" />
                </div>
                <div class="btn">
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection