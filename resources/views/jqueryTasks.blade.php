<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <style>
        h6 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: blueviolet;
            font-weight: 400;
            font-size: 19px;
        }

        .addColor {
            color: yellow;

        }

        #progressbar .caption {
            width: 50px;
            margin: 0 auto;
        }

        #submit_name .cls1 {
            background-color: yellow;
        }

        .cls2 {
            background-color: #fff;
        }

        .submit_name-desc {
            height: 30px;
            border: 1px;
        }
    </style>



    <title>Jquery Tasks</title>
</head>

<body>
    <div>
        <h3>Jquery TAsks</h3>
        <div class='task1'>
            <h6>Task 1</h6>
            <p id='para'>
                Ajax is a set of web development techniques that uses various web technologies on the client-side to create asynchronous web applications. With Ajax, web applications can send and retrieve data from a server asynchronously without interfering with the display and behaviour of the existing page
            </p>
        </div>
        <br>
        <div className='task2'>
            <h6>TAsk:02 ---> On click of a button, welcome message should display.</h6>
            <button class='btn btn-dark' id='msgBtn'>Display message</button>

        </div>
        <br>
        <br>
        <br>

        <div>
            <h6>Task:04 ---> Display and hide message shown in the div tag on click of the buttons. You can use Jquery show hide. </h6>
            <p id="msg">If you click on the "Hide" button, I will disappear.</p>
            <button id="hide">Hide</button>
            <button id="show">Show</button>
        </div>
        <br>
        <br>
        <div>
            <h6>Task:05 -----> Display/Hide message by using a single button . You can use Jquery toggle()</h6>
            <button class='btn btn-dark' id="togglebtn"> Toggle Button </button>
            <p id="toggleMsg"> It will show and hide when click on toggle button </p>
        </div>
        <br>
        <br>
        <div>
            <h6>Task:06 and 7 --------> Create one textarea and one button. On click of the button the length of text entered inside the textarea will be displayed. </h6>
            <input id="text_Length">
            <br>
            <br>

            <button class="btn btn-primary" id="textlength">show text length</button>
            <br>

            <button class="btn btn-dark" id="counter">Counter</button>
        </div>
        <br>
    </div>
    <br>
    @include('inputs')




    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="my_jquery_functions.js"></script>


<script>
    $(document).ready(function() {
        $("#msgBtn").click(function() {
            alert('hello')
        });
        $("#para").css({
            "background-color": "gray",
            "font-size": "150%",
            "font-family": "Georgia, 'Times New Roman', Times, serif"
        });
        $("#hide").click(function() {
            $("#msg").hide()
        })
        $("#show").click(function() {
            $("#msg").show()
        })

        $("#togglebtn").click(function() {
            $("#toggleMsg").toggle()
        })
        $("#textlength").click(function() {
            alert($("#text_Length").val().length)
        })




    });
</script>


</html>