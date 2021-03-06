<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
        {{-- page style --}}
        <style>
            @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

            body { background:rgb(30,30,40); }
            form { max-width:420px; margin:50px auto; }

            .title {color: white; margin: 50px auto;text-align:center;}

            .feedback-input {
                color:white;
                font-family: Helvetica, Arial, sans-serif;
                font-weight:500;
                font-size: 18px;
                border-radius: 5px;
                line-height: 22px;
                background-color: transparent;
                border:2px solid #CC6666;
                transition: all 0.3s;
                padding: 13px;
                margin-bottom: 15px;
                width:100%;
                box-sizing: border-box;
                outline:0;
            }

            .feedback-input:focus { border:2px solid #CC4949; }

            textarea {
                height: 150px;
                line-height: 150%;
                resize:vertical;
            }

            [type="submit"] {
                font-family: 'Montserrat', Arial, Helvetica, sans-serif;
                width: 100%;
                background:#CC6666;
                border-radius:5px;
                border:0;
                cursor:pointer;
                color:white;
                font-size:24px;
                padding-top:10px;
                padding-bottom:10px;
                transition: all 0.3s;
                margin-top:-4px;
                font-weight:700;
            }
            [type="submit"]:hover { background:#CC4949; }

        </style>

    </head>
    <body>
        <h1 class="title">Contact Us Form</h1>
        <form action="{{route('contact')}}" method="POST">
            @csrf
            <input name="name" type="text" class="feedback-input" placeholder="Name..." />   
            <input name="email" type="text" class="feedback-input" placeholder="Email..." />
            <textarea name="message" class="feedback-input" placeholder="Message..."></textarea>
            <input type="submit" value="SUBMIT"/>
        </form>
    
    </body>
</html>