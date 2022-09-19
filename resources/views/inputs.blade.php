<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            background-color: yellow;
            border-color: red;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <h6>Task:03 ----> There are five input textboxes. On click of the input box , the background colour should change to yellow</h6>
            <input id="input_box2" />
            <input id="input_box3" />
            <input id="input_box4" />
            <input id="input_box5" />
            <input id="input_box6" />
        </div>
        <br>
        <br>

        <div>

            <h6>Tas:08 ----> Use one progress bar for showing the number of text entered </h6>
            <div class="progress">
                <div class="progress-bar" id="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <span class="current-value">25%</span>
                </div>
            </div>
        </div>
        <br>

        <h6>Task:09 ---> Create one style class and name it error, give its border colour as red and background colour as yellow. Apply this class to the text box when the focus is moved out of it and if entered data is more than 10.</h6>

        Name: <input type="text" id='input1' name="fullname">
        <br>
        <br>

        <div>
            <br>
            <br>

            <h6>Task:10 ---->Create two textboxes and one button with + on it. On click of the button you should display the sum of the two entered numbers in the textbox. Similarly add Subtract, Multiple and Division buttons.
                <br>
                <br>
                Task:11 -------> Your buttons in above code will remain in disable state till both the inputs are filled. ( Use one function to enable or disable buttons. Trigger that function with on Blur events of the textboxes
            </h6>

            <input id="first_No">
            <input id="second_No">
            <button id="add" disabled class="btn btn-warning">+</button>
            <button id="sub" disabled class="btn btn-info">-</button>
            <button id="multiply" disabled class="btn btn-dark">*</button>
            <button id="divide" disabled class="btn btn-primary">/</button>
        </div>
        <br>
        <div>
            <h6>Task ---> Create a form asking users to enter userid and password. On submit of the form the page should submit the data to the backend page written in PHP or Python. Note that you are submitting the form using JQuery so the page should not reload or redirect. If submitted data is valid then the login form should show a welcome message by hiding the input boxes, otherwise it should ask the user to try again. </h6>
            <form action="post.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md4">
                        <label for="exampleInputId">User Id</label>
                        <input class="form-control" id="userId" aria-describedby="idHelp" placeholder="Enter id">
                        <span class="error" id="errorMsg"></span>
                    </div>
                    <br>
                    <div class="form-group col-md4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="userPassword" placeholder="Password">
                        <span class="passerror" id="pass_error"></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="submit_button">Submit</button>
            </form>
        </div>


    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="my_jquery_functions.js"></script>


<script>
    $(document).ready(function() {
        $("#input1").focusout(function() {
            if ($("#input1").val().length > 10) {
                $(this).addClass('error');
            }
        });
        $("#first_No") && $("#second_No").blur(function() {
            $("button").prop("disabled", !this.value);
        });
        $("#add").click(function() {
            var a = parseInt($("#first_No").val());
            var b = parseInt($("#second_No").val());
            var sum = a + b;
            alert(`sum of two no is ${sum}`);
        })
        $("#sub").click(function() {
            var a = parseInt($("#first_No").val());
            var b = parseInt($("#second_No").val());
            var sub = a - b;
            alert(`sub of two no is : ${sub}`);
        })
        $("#multiply").click(function() {
            var a = parseInt($("#first_No").val());
            var b = parseInt($("#second_No").val());
            var multiply = a * b;
            alert(`multiply of two no is : ${multiply}`);

        })
        $("#divide").click(function() {
            var a = parseInt($("#first_No").val());
            var b = parseInt($("#second_No").val());
            var divide = a / b;
            alert(`divide of two no is : ${divide}`);

        })


        //validating form
        $("#errorMsg").hide()
        let userIdError = true
        $("#userId").keyup(function() {
            validateUserId()
        })

        function validateUserId() {
            let userIdValue = $("#userId").val()
            console.log(userIdValue, 'userId valueeeeeeeeeee')
            if (userIdValue.length == "") {
                $("#errorMsg").show();
                $("#errorMsg").html("**enter id");
                userIdError = false;
                return false
                $("errorMsg")
            } else {
                $("#errorMsg").hide();

            }
        }
        $("#pass_error").hide()
        let passError = true
        $("#userPassword").keyup(function() {
            validateUserPassword()
        })

        function validateUserPassword() {
            let passValue = $("#userPassword").val()
            console.log(passValue, 'pasworddddddddddddd')
            if (passValue.length == "") {
                $("#pass_error").show()
                $("#pass_error").html("Enter password");
                passError = false

                return false

            } else {
                $("#pass_error").hide()
            }
        }

        //submit but

        $("#submit_button").click(function() {
            validateUserId()
            validateUserPassword()
            $("#userId").hide()
            $("#userPassword").hide()
            if (
                userIdError == true &&
                passError == true
            ) {
                return alert('you have successfully submitted the form');


            } else {
                return alert("Try again");
            }

        })

        $("#text_Length").keyup(function() {
            var input = $(this).val()
            var main = input.length * 100; //taking length of input which i stored in var input
            var value = (main / 100); //to convert it into percent
            var count = 0 + input.length;
            var reverse_count = 100 - input.length;
            if (input.length >= 0) {
                $('.progress-bar').css('width', count + '%');
                $('.current-value').text(count + '%');
                $('.count').text(reverse_count);


            }
            return false;

        })

        $("#input_box2, #input_box4, #input_box5,#input_box6").click(function() {
            $(this).css({
                "background-color": "rgb(240, 240, 108)",
            });
        });

        $("#counter").hide()

        $("#text_length").click(function() {
            $("#counter").show()
        })


    });
</script>

</html>